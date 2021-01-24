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
    $klusnaam = $_POST['klusnaam'];
    $klantnaam = $_POST['klantnaam'];
    $sql = "UPDATE dbnaam SET id = :ph_id, klusnaam = :ph_klusnaam, klantnaam = :ph_klantnaam WHERE id = :ph_id ";
    $stmt = $db_conn->prepare($sql);
    $stmt->bindParam(":ph_id", $id);              
    $stmt->bindParam(":ph_klusnaam", $klusnaam);            
    $stmt->bindParam(":ph_klantnaam", $klantnaam);
    $stmt->execute();
    header('location: home.php');
}

?>

<div class="container">
    <h4 class="display-4">Update user</h4>     
    <form action="" method="post">
        <div class="col-6"></div>
        <h6>id</h6>                 <input type="text" name="id"            class="form-control" value="<?php echo $database_gegevens['id']; ?>">
        <h6>klusnaam</h6>           <input type="text" name="klusnaam"      class="form-control" value="<?php echo $database_gegevens['klusnaam']; ?>">
        <h6>klantnaam</h6>          <input type="text" name="klantnaam"     class="form-control" value="<?php echo $database_gegevens['klantnaam']; ?>">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
    </form>
</div>