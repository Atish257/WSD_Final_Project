<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0:">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>
<style>
    h1{
        font-family:georgia;
        text-align:center;
        padding: 20px;
    }
    #hdiv{
        background-color: lightgrey;
        border: 20px solid greenyellow;
        border-style:ridge;
        width: 450px;
        font-family:georgia;
        padding: 40px 40px 40px 40px
    }
    space{
        float: right;
        margin-right: 45em;
    }
    button{
        font-family:georgia;
        margin-left: 8em;
    }
    strong
    {
        margin: 10px;
    }

</style>
<body>


<h1>
    <?php echo $data['site_name']; ?>
</h1><br>
<hr>
<!--<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>-->
<!--<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>-->
<br>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container" id="hdiv">
        <label><b>Email ID:&nbsp&nbsp</b></label>
        <input type="text" placeholder="Enter Username" name="email" required><br><br>

        <label><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br><br>

        <button type="submit" style=""><strong>LOGIN</strong></button>
    </div>

</form>
<br><hr>
<h1 style="text-align: center"><a href="index.php?page=accounts&action=register">REGISTER</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>