//All of the Images/Content of this website must
//belong with it's owner and it's reserved terms and conditions
//
//Copyright to Kirk Charles P. Niverba for this Website
//000Webhost for my Server Hosting
//
//Apache License 2.0 is Used! Please see the readme in github to see!

<?php
session_start('logged_in');
unset($_SESSION['logged_in']);
session_destroy();
echo '<div class=\"center\"><h2>Login Status: </h2><p>You have successfully logged out!</p></div>';
header ("Refresh: 0; /index.html");
?>
<link rel="stylesheet" href="/css/body.css">