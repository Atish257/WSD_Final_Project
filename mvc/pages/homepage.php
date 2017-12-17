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


<h1>
    <?php echo $data['site_name'];

    ?> </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

<style>
    space{
           float: right;
           margin-right: 65em;
         }
</style>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Email ID:</b></label>
        <space><input type="text" placeholder="Enter Username" name="email" required></space><br><br>

        <label><b>Password:</b></label>
        <space><input type="password" placeholder="Enter Password" name="password" required></space><br><br>

        <button type="submit"><b>LOGIN</b></button>
    </div>


</form>
<h1><a href="index.php?page=accounts&action=register">REGISTER</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>