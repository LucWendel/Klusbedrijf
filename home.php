<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="styling/style.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

     </head>

     <body>
          <header>
               <div id="mySidebar" class="sidebar">
                    <a href="users.php"><i class="material-icons">account_box</i><span class="icon-text">gebruikers</a><br>
                    <a href="klussen.php"><i class="material-icons">gavel</i><span class="icon-text"></span>klussen</a></a><br>
                    <a href="logout.php"><i class="material-icons">logout</i><span class="icon-text"></span>uit loggen</a>
               </div>
          </header>

          <main>
               <img class="logo" src="logo.png" alt="Klusbedrijf Handige Mannen">
               <h1>Hallo, <?php echo $_SESSION['name']; ?></h1>
          </main>
     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>