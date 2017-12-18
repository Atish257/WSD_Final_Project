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

<?php  include("header.php"); ?>
<body background = "paper.jpg">

<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>

<style>
    tab{
        float: right;
        margin-right: 3.0em;
    }
    #sadiv{
        margin-top: 4em;
        margin-left: 21.5em;
        font-size:17px;
        background-color: lightgrey;
        border: 15px solid greenyellow;
        border-style:outset;
        width: 500px;
        font-family:georgia;
        padding: 40px 50px 50px 50px;
    }

</style>
<?php
//this is how you print something  $data contains the record that was selected on the table.
print utility\htmlTable::generateTableFromOneRecord($data);
?>

<div id="sadiv">
<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <tab><input type="text" name="fname" value="<?php echo $data->fname; ?>"></tab><br><br>
    Last name: <tab><input type="text" name="lname" value="<?php echo $data->lname; ?>"></tab><br><br>
    Email: <tab><input type="email" name="email" value="<?php echo $data->email; ?>"></tab><br><br>
    Phone: <tab><input type="text" name="phone" value="<?php echo $data->phone; ?>"></tab><br><br>
    Birthday:<tab><input type="text" name="birthday" value="<?php echo $data->birthday; ?>"></tab><br><br>
    Gender:<tab><input type="text" name="gender" value="<?php echo $data->gender; ?>"></tab><br><br>
    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>