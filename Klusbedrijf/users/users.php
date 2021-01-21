<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="style_users.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

     </head>

     <body>
          <header>
               <div id="mySidebar" class="sidebar">
                    <a href="users/users.php"><i class="material-icons">account_box</i><span class="icon-text">gebruikers</a><br>
                    <a href="klussen/klussen.php"><i class="material-icons">gavel</i><span class="icon-text"></span>klussen</a></a><br>
                    <a href="logout.php"><i class="material-icons">logout</i><span class="icon-text"></span>uit loggen</a>
               </div>
          </header>

          <main>
               <h1>Je bent bij de user page</h1>
          </main>

          <!--Als jij hier de code van superheroes kan toepassen dat werknemers het kan aanpassen.
              Dan ga ik kijken of ik nog iets kan doen om ervoor tezorgen dat werknemers een ander beeld krijgen dat klanten.
              Niet gelukt te lang aan gezeten ben moe  -->
     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>