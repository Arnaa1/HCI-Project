<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Dobrodosli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Zdravo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Dobrodosli na online glasanje.</h1>

    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Uslovi koristenja</h1>
  <p>Nakon odabira opcije "Dalje" dobijate mogucnost biranja kandidata klikom na ponudjeni meni.</p>
  <p>Sa Vase desne strane ce se nalaziti statistika trenutnog broja glasova prikazanih u postotcima.</p>
</div>

<h2 style="text-align:center">Podrska</h2>

<div class="container">
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Kenan Bektas</h2>
        <p class="title">CEO & Founder</p>
        <p>kenan.bektas@stu.ibu.edu.ba</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Ajla Arnautovic</h2>
        <p class="title">CEO & Founder</p>
        <p>ajla.arnautovic@stu.ibu.edu.ba</p>
      </div>
    </div>
  </div>
</div>
</div>
  <p>
        
    </p>
    <style>
            .button {
              background-color: grey;
              border: none;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
            }
            </style>
        <center><button class="button" onclick="myFunction()">Dalje--></button></center>
        <script>
            function myFunction() {
              location.replace("vote.html")
            }
        </script>

        <a href="logout.php" class="btn btn-danger ml-3">Odjavi se</a>
    <style>
      .button1 {
      background-color: grey;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 0;
      right: 0;
    }
    </style>

<button class="button1" onclick="goBack()">Idi nazad</button>

<script>
function goBack() {
  window.history.back();
}

</script>
        
</body>
</html>


