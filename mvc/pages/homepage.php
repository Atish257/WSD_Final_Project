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

<body>


<h1 style="font-family:georgia">
    <?php echo $data['site_name']; ?>
</h1>

<!--<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>-->
<!--<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>-->
<br><br>
<style>
    space{
           float: right;
           margin-right: 50em;
         }
</style>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container" style="font-family:georgia;border-style:outset;padding: 50px 15px 50px 50px">
        <label><b>Email ID:&nbsp&nbsp</b></label>
        <input type="text" placeholder="Enter Username" name="email" required><br><br>

        <label><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br><br>

        <button type="submit" style="font-family:georgia;float:right"><b>LOGIN</b></button>
    </div>

<hr>
</form>
<h1><a href="index.php?page=accounts&action=register">REGISTER</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>