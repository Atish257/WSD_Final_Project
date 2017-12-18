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
    tab {
        float: right;
        margin-right: 2.0em;
    }
    #rdiv{
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
    strong{
        margin-left: 14em;
        margin-top:  2em;
        padding: 40px;

    }
    input{
        float: right;
    }

</style>

<body>


<h2><strong>REGISTRATION</strong></h2>
<div id="rdiv">
<form action="index.php?page=accounts&action=register" method="post">
    <b>First name:</b> <tab><input type="text" name="fname"></tab><br><br>
    <b>Last name:</b>  <tab><input type="text" name="lname"></tab><br><br>
    <b>Email:</b>      <tab><input type="text" name="email" required></tab><br><br>
    <b>Phone:</b>      <tab><input type="text" name="phone" maxlength="10"></tab><br><br>
    <b>Birthday:</b>   <tab><input type="text" name="birthday"></tab><br><br>
    <b>Gender:</b>     <tab><!--<input type="text" name="gender">-->
                                <select>
                                    <option value=""></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                </tab><br><br>
    <b>Password:</b>   <tab><input type="password" name="password" required></tab><br><br>
    <input type="submit" value="Submit form" >
</form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
