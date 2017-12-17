<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something
//print($data);
include "header.php";
print_r(utility\htmlTable::genarateTableFromMultiArray($data));
?>

<br>
<br>
<style>
    tab{
        float: right;
        margin-right: 63.0em;
    }
</style>
<form action="index.php?page=tasks&action=insertTodo" method="post">

    Owneremail: <tab><input type="email" name="owneremail"></tab><br><br>
    Ownerid:    <tab><input type="number" name="ownerid"></tab><br><br>
    Createdate: <tab><input type="text" name="createddate"></tab><br><br>
    Duedate:    <tab><input type="text" name="duedate"></tab><br><br>
    Message:    <tab><input type="text" name="message"></tab><br><br>
    Isdone:     <tab><input type="text" name="isdone"></tab><br><br>
    <input type="submit" value="Insert Task">
</form>

<script src="js/scripts.js"></script>
</body>
</html>