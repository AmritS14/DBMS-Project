<?php

include("includes/config.php");

$userId = $_POST['userId'];

$sql = "SELECT * FROM cart WHERE userId = '$userId'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$sql = "SELECT SUM(qty) FROM cart WHERE userId = '$userId'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$qty = $row['SUM(qty)'];
if ($num == 0) {
    echo '<a href="#" onclick="showCart()"><i id="cart" class="fa badge fa-lg" style="background-color: black; margin-left: 300px; margin-top: -95px; font-size: 30px">&#xf07a;</i></a>';
} else {
    echo '<a href="#" onclick="showCart()"><i id="cart" class="fa badge fa-lg" value="' . $qty . '" style = "background-color: black; margin-left: 300px; margin-top: -95px; font-size: 30px" >&#xf07a;</i></a>';
}
?>