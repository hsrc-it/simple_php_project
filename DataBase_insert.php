<?php
<?php include 'DataBase_connection.php';?>
$sql = "INSERT INTO users (id, name) VALUES ('2', 'Maram)";
if(mysqli_query($link, $sql)){
    echo "Record inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>