<?php
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="../../dist/img/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EMPRESA</title>
	

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <style type="text/css">
    .graph {
        float: left;
        width: 100%;
        height: auto;
        padding: 1em 0 0 1em;
        background-color: #fff;
    }

    #totalGraphic1, #totalGraphic2 {
      color: red;
    }

    .table {
      overflow: auto;      
    }    
  </style>  
</head>

<body class="hold-transition sidebar-mini">
	