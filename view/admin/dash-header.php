<?php
include_once("././model/accountModel.php");
$obj = new accountModel();
$getAcc = $obj->getAccount();

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/svg+xml" href="../../assets/logo/upress-logo-red.svg">

    <!-- semantics -->
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../node_modules/datatables.net-dt/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="../../node_modules/datatables.net-buttons-dt/css/buttons.dataTables.min.css">
    
</head>
<body>
    <div class="wrapper">