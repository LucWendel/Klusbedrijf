<?php

require 'db_conn.php';


$id = $_GET['id'];
$sql = "SELECT * FROM dbnaam WHERE id = :ph_id";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_id", $id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submit']) && $_POST['name'] != "") {
    $id = $_POST['id'];
    $user_name = $_POST['user_name'];
    $name = $_POST['name'];
    $sql = "UPDATE dbnaam SET id = :ph_id, 'user_name' = :ph_user_name, 'name' = :ph_name WHERE id = :ph_id ";
    $stmt = $db_conn->prepare($sql);
    $stmt->bindParam(":ph_id", $id);              
    $stmt->bindParam(":ph_user_name", $user_name);            
    $stmt->bindParam(":ph_name", $name);
    $stmt->execute();
    header('location: home.php');
}

?>

<div class="container">
    <h4 class="display-4">Update user</h4>     
    <form action="" method="post">
        <div class="col-6"></div>
        <h6>id</h6>              <input type="text" name="id"         class="form-control" value="<?php echo $database_gegevens['id']; ?>">
        <h6>user_name</h6>          <input type="text" name="user_name"     class="form-control" value="<?php echo $database_gegevens['user_name']; ?>">
        <h6>name</h6>             <input type="text" name="name"        class="form-control" value="<?php echo $database_gegevens['name']; ?>">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
    </form>
</div>