<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>


<style>
    tab{
        float: right;
        margin-right: 0.5em;
    }
    #atdiv {
        margin-top: 1px;
        margin-left: 21.5em;
        font-size: 17px;
        background-color: lightgrey;
        border: 15px solid greenyellow;
        border-style: outset;
        width: 500px;
        font-family: georgia;
        padding: 40px 50px 50px 50px;
    }
    a{
        padding: 50px;
        font-size: 20px;
    }
</style>
<body background = "paper.jpg">

<?php include "header.php"; ?>


<a href="index.php?page=accounts&action=myprofile"><b>MY PROFILE</b></a>
<a href="index.php?page=accounts&action=myprofile"><b>EDIT PROFILE</b></a>

<br><br>
<?php /*print_r(utility\htmlTable::genarateTableFromMultiArray($data)); */?>

<?php
if(!empty($data)) {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}
?>



<br>
<br>
<div id="atdiv">
<form action="index.php?page=tasks&action=insertTodo" method="post">

    <b>Owneremail:</b> <tab><input type="email" name="owneremail"></tab><br><br>
    <b>Ownerid:</b>    <tab><input type="number" name="ownerid"></tab><br><br>
    <b>Createdate:</b> <tab><input type="text" name="createddate"></tab><br><br>
    <b>Duedate:</b>    <tab><input type="text" name="duedate"></tab><br><br>
    <b>Message:</b>    <tab><input type="text" name="message"></tab><br><br>
    <b>Isdone:</b>     <tab><input type="text" name="isdone"></tab><br><br>
    <input type="submit" value="Insert Task">
</form>
</div>
<script src="js/scripts.js"></script>
</body>
</html>