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
        margin-right: 45.0em;
    }
</style>
<div style="border-style:outset;padding: 50px 50px 50px 50px">
<form action="index.php?page=accounts&action=register" method="post" style="font-size: 20px;">
    <em><b>First name:</b></em> <tab><input type="text" name="fname"></tab><br><br>
    <em><b>Last name:</b></em>  <tab><input type="text" name="lname"></tab><br><br>
    <em><b>Email:</b></em>      <tab><input type="text" name="email" required></tab><br><br>
    <em><b>Phone:</b></em>      <tab><input type="text" name="phone" maxlength="10"></tab><br><br>
    <em><b>Birthday:</b></em>   <tab><input type="text" name="birthday"></tab><br><br>
    <em><b>Gender:</b></em>     <tab><!--<input type="text" name="gender">-->
                                <select>
                                    <option value=""></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                </tab><br><br>
    <em><b>Password:</b></em>   <tab><input type="password" name="password" required></tab><br><br>
    <input type="submit" value="Submit form">
</form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
