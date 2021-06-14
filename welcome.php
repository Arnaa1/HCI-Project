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
    <title>Dobrodošli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        body {
          font: 14px sans-serif; 
          font: 14px sans-serif;          
          background-image: url('images/landing.png');
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
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
  background-color: #360e94;
  color: white;
}

.container {
  padding: 0 16px;
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
      .button1 {
      background-color: rgb(54, 14, 148);
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

    .button {
              background-color: #360e94;
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
</head>
<body>
    <h1 class="my-5" style="color:rgb(54, 14, 148);">Zdravo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Dobrodošli na online glasanje.</h1>


<body>

<div class="about-section">
  <h1 style="color:yellow;">Uslovi korištenja</h1>
  <p style="color:yellow;">Nakon odabira opcije "Dalje" dobijate mogućnost biranja kandidata klikom na ponuđeni meni.</p>
  <p style="color:yellow;">Sa Vaše desne strane ce se nalaziti statistika trenutnog broja glasova prikazanih u postotcima.</p>
</div>

<h2 style="text-align:center; color:rgb(54, 14, 148);">Podrška</h2>

<div class="container">

  <img src="images/Screenshot_1.jpg"> 

</div>
  <p>
        
    </p>

        <center><button class="button" style="#360e94" onclick="myFunction()">Dalje--></button></center>
        <script>
            function myFunction() {
              location.replace("vote.html")
            }
        </script>

        <a href="logout.php" class="btn btn-danger ml-3">Odjavi se</a>
    

<button class="button1" onclick="goBack()">Idi nazad</button>

<script>
function goBack() {
  window.history.back();
}

</script>
        
</body>
</html>


