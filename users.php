<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="styling/style_users.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

     </head>

     <body>
          <?php if (isset($_SESSION['message'])) : ?>
               <div class="msg">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
               </div>
          <?php endif ?>
          <header>
               <div id="mySidebar" class="sidebar">
                    <a href="users.php"><i class="material-icons">account_box</i><span class="icon-text">gebruikers</a><br>
                    <a href="klussen.php"><i class="material-icons">gavel</i><span class="icon-text"></span>klussen</a></a><br>
                    <a href="logout.php"><i class="material-icons">logout</i><span class="icon-text"></span>uit loggen</a>
               </div>
          </header>

          <main>
               <table>
                    <thead>
                         <tr>
                              <th>Name</th>
                              <th>Address</th>
                              <th colspan="2">Action</th>
                         </tr>
                    </thead>

                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                         <tr>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['address']; ?></td>
                              <td>
                                   <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
                              </td>
                              <td>
                                   <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                              </td>
                         </tr>
                    <?php } ?>
               </table>
               <form method="post" action="server.php">
                    <div class="input-group">
                         <label>Name</label>
                         <input type="text" name="name" value="">
                    </div>
                    <div class="input-group">
                         <label>Address</label>
                         <input type="text" name="address" value="">
                    </div>
                    <div class="input-group">
                         <button class="btn" type="submit" name="save">Save</button>
                    </div>
               </form>
               <?php

               // initialize variables
               $name = "";
               $address = "";
               $id = 0;
               $update = false;

               if (isset($_POST['save'])) {
                    $name = $_POST['name'];
                    $address = $_POST['address'];

                    mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')");
                    $_SESSION['message'] = "Address saved";
                    header('location: index.php');
               }
               ?>
          </main>


     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>