<?php 
include_once("db_connect.php");

$remove = "DELETE FROM vr_set WHERE id='".$_GET['id']."' ";
                    if ($conn->query($remove) === TRUE) {
                        header("Location: results.php");
                     } else {
                         echo "Ошибка удаления: " . $conn->error;
                     }

                     $conn->close();
?>
