<?php
include 'connect.php';

$id = $_GET['deleteid'] ?? null;
if ($id) {
    $result = $collection->deleteOne(['id' => (int)$id]);
    if ($result->getDeletedCount() == 1) {
        header("Location: display.php");
        exit();
    } else {
        echo "Error: Document was not deleted";
    }
} else {
    header("Location: display.php");
}
?>