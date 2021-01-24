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


               <table class="table">

            <thead>
                <tr>
                    <th>medewerkers</th>
                    <th>ID</th>
                    <th>username</th>
                    <th>name</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($database_gegevens as $hero) : ?>                
                    <tr>
                        <td>#</td>
                        <td><?php echo $hero['id'] ?></td>
                        <td><?php echo $hero['user_name'] ?></td>
                        <td><?php echo $hero['name'] ?></td>
                        <td>
                            <a href="user_show.php?id=<?php echo $hero['id'] ?>">Bekijk</a>
                        </td>
                        <td>
                            <a href="user_update.php?id=<?php echo $hero['id'] ?>">Update</a>
                        </td>
                        <td>
                            <a href="user_delete.php?id=<?php echo $hero['id'] ?>">Verwijder</a>
                        </td>
                    </tr>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <table class="table">

<thead>
    <tr>
        <th>klussen</th>
        <th>ID</th>
        <th>username</th>
        <th>name</th>
        
    </tr>
</thead>
<tbody>
    <?php foreach ($database_gegevens as $hero) : ?>                
        <tr>
            <td>#</td>
            <td><?php echo $hero['id'] ?></td>
            <td><?php echo $hero['klusnaam'] ?></td>
            <td><?php echo $hero['klantnaam'] ?></td>
            <td>
                <a href="klussen_show.php?id=<?php echo $hero['id'] ?>">Bekijk</a>
            </td>
            <td>
                <a href="klussen_update.php?id=<?php echo $hero['id'] ?>">Update</a>
            </td>
            <td>
                <a href="klussen_delete.php?id=<?php echo $hero['id'] ?>">Verwijder</a>
            </td>
        </tr>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
          </main>
     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>