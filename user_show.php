<?php
require 'db_conn.php';


$id = $_GET['id'];

$sql = "SELECT * FROM dbnaam WHERE id = :ph_id";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_id", $id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);
?>

<table class="table table-striped">
    <?php foreach ($database_gegevens as $key => $hero) : ?>
        <tr>
            <th><?php echo $key . ":" ?></th>
            <td><?php echo $hero; ?></td>
        </tr>
    <?php endforeach; ?>
</table>