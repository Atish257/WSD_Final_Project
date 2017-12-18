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

<body background = "paper.jpg">

<style>
    tab{
        float: right;
        margin-right: 63.0em;
    }

    #stdiv{
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
<div id="stdiv">
<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

    Owneremail: <tab><input type="email" name="owneremail" value="<?php echo $data->owneremail; ?>"></tab><br><br>
    Ownerid:    <tab><input type="number" name="ownerid" value="<?php echo $data->ownerid; ?>"></tab><br><br>
    Createdate: <tab><input type="text" name="createddate" value="<?php echo $data->createddate; ?>"></tab><br><br>
    Duedate:    <tab><input type="text" name="duedate" value="<?php echo $data->duedate; ?>"></tab><br><br>
    Message:    <tab><input type="text" name="message" value="<?php echo $data->message; ?>"></tab><br><br>
    Isdone:     <tab><input type="text" name="isdone" value="<?php echo $data->isdone; ?>"></tab><br><br>
    <input type="submit" value="Submit form">
</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
</div>



<script src="js/scripts.js"></script>
</body>
</html>