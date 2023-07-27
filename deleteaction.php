<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM `product` WHERE Id = '$id'";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script>alert('Product Deleted')</script>";
        echo "<script>location.href='homepage.php'</script>";
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}
?>
