//All of the Images/Content of this website must
//belong with it's owner and it's reserved terms and conditions
//
//Copyright to Kirk Charles P. Niverba for this Website
//000Webhost for my Server Hosting
//
//Apache License 2.0 is Used! Please see the readme in github to see!

<?php
session_start();
$user["kirkniverba23"] = "kirk05230912";
if (!isset($_SESSION['logged_in']))
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (empty($_POST['username']) || empty($_POST['password']))
        {
            exit('<br /><br /><html><body><div id="center"><h2> Login Status: <br/></h2><span style="color:red; font-weight: bold">Please fill in all fields!</span></div><meta http-equiv="refresh" content="1"></body>');
        }
        elseif ($user[$_POST['username']] != $_POST['password'])
        {
            exit('<br /><br /><div id="center"><h2> Login Status: <br/></h2><span style="color:red; font-weight: bold">Your username/password is wrong!</span></div><meta http-equiv="refresh" content="1"></body>');
        }
        else
        {
            if (!isset($_SESSION['ingelogd']))
            echo '<div id="center"><h2> Login Status: <br/></h2><span style="color:green; font-weight: bold">You are now logged in!</span></div>';
        }
    }
    else
    {
        exit('<br /><br />
<link rel="stylesheet" href="/css/body.css">
<link rel="stylesheet" href="/css/button.css">
<div id="center">
        <form method="POST" action=""><p>
        Username:<br />
        <input type="text" name="username" /><br /><br />
        Password:<br />
        <input type="password" name="password" /><br /><br />
        <input type="submit" value="Login" /> <input type="reset" value="Empty fields" />
        </form></div>');
    }
}
?>
<link rel="stylesheet" href="/css/body.css">
