<?php 
require_once("database.php");
$id = $_GET['id'];
$sql = Delete("notes", $id);
    if ($sql) {
        header("location:list_notes.php");
    }

// if (Isset($_GET["id"]) && is_numeric($_GET["id"])) {
//     $note_id = $_GET["id"];

//     $delete_query = "DELETE FROM notes WHERE id = $note_id";
//     mysqli_query($dbconnect, $delete_query);

//     header("Location: list_notes.php");
// } else {
//     echo "Failed";
// }
?>