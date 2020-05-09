<?php
ob_start();
session_start();
$products=$_POST['products'];
$qty=$_POST['qty'];
print_r($products);
print_r($qty);

foreach ($products as $v)
{
    $_SESSION['cart'][$v]=$qty[$k];
}

header("Refresh:0;url=viewcart.php");
//header("Location:detail.php?prod_id=$prod_id");
ob_flush();
?>
