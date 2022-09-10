<?php session_start();?>
<?php
if(!isset($_SESSION['valid'])) {
     header('Location: login.html');
}
?>

<html>
<head>
  <title>pickup-request</title>
</head>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  }

  body {
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(images/new.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
  }

  label {
    background-color: #fff;
  }

  .container {
    display: flex;
    justify-content: center;
    margin: 0 auto;
    height: 100vh;
    align-items: center;
    max-width: 400px;
  }

  .form {
    background-color: #fff;
    padding: 2rem;
    border-radius: 2px;
    box-shadow: 0 3px 9px -3px rgb(0, 0, 0, 0.1);
  }

  .btn {
    outline: none;
    border: none;
    padding: 12px;
    color: #fff;
    cursor: pointer;
    background-color: rgb(0, 191, 255) !important;
  }

  .form-input {
    width: 100%;
    padding: 5px 10px;
    margin: 5px 0;
    font-size: 1rem;
    background-color: #f7f7f7;
    border: 1px solid #ccc;
    border-radius: 2px;
  }

  .form-heading {
    margin-bottom: 1rem;
    background-color: #fff;
  }
</style>

<body>
  <div class="container">
    <form class="form" method="POST" action="pickup-request.php">
      <h2 class="form-heading">Pickup Request</h2>
      <input class="form-input" placeholder="name" name="name" id="name" type="text" required>
      <!-- <input class="form-input" placeholder="password" name="password" id="password" type="password" required /> -->
      <input class="form-input" placeholder="phone" name="phone" id="phone" type="text" required>
      <input class="form-input" placeholder="address" name="address" id="line1" type="text" required>
      <input class="form-input" placeholder="area" name="area" id="area" type="text" required />
      <input class="form-input" placeholder="city" name="city" id="city" type="text" required />
      <input class="form-input" placeholder="pincode" name="pincode" id="pincode" type="number" required />
      <input class="form-input" placeholder="date" name="date" id="date" type="date" required />
      <input class="form-input" placeholder="time" name="time" id="time" type="time" required />
      <select class="form-input" name="scrap" id="scrap">
        <option value="">Select your scrap</option>
        <option value="Newspaper">Newspaper</option>
        <option value="Books">Books</option>
        <option value="Carton">Carton</option>
        <option value="Magazines">Magazines</option>
        <option value="White Papers">White Papers</option>
        <option value="Grey Board">Grey Board</option>
        <option value="Record paper">Record paper</option>
        <option value="Plain paper">Plain paper</option>
        <option value="Rough paper">Rough paper</option>
        <option value="Copy">Copy</option>
      </select>
      <select class="form-input" name="payment" id="payment">
        <option value="">Select your payment method</option>
        <option value="Offline">Cash on delivary</option>
        <option value="Online">Online</option>
      </select>
        <!--  <a href="home.php" onclick="submit()">
     <button class="form-input btn btn-primary" type="submit">Submit</button></a> -->
      <input type="submit" value="submit" name="submit" class="form-input btn btn-primary">
      <a href="profile.php">Go Back!</a>

    </form>
  </div>

  <script>
    function submit() {
      alert("Your request has been submitted successfully, Thank you!!!");
    }
  </script>
  <!-- <script src="src/index.js"></script>-->
</body>
</html>