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

<style>
    tab{
        float: right;
        margin-right: 63.0em;
    }
</style>
<form action="index.php?page=accounts&action=register" method="post">
    <em><b>First name:</b></em> <tab><input type="text" name="fname"></tab><br><br>
    <em><b>Last name:</b></em>  <tab><input type="text" name="lname"></tab><br><br>
    <em><b>Email:</b></em>      <tab><input type="text" name="email"></tab><br><br>
    <em><b>Phone:</b></em>      <tab><input type="text" name="phone"></tab><br><br>
    <em><b>Birthday:</b></em>   <tab><input type="text" name="birthday"></tab><br><br>
    <em><b>Gender:</b></em>     <tab><input type="text" name="gender"></tab><br><br>
    <em><b>Password:</b></em>   <tab><input type="password" name="password"></tab><br><br>
    <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
