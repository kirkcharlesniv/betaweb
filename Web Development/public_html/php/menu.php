<?php
session_start();
//if user is logged in, \"user\" toolbox will show
if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == true) {
    echo "<ul id=\"menu\">
  <li class=\"li\"><a class=\"active\" href=\"#home\">Home</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/info/news.html\">News</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/info/contact.html\">Contact</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/info/about.html\">About</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/auth/logout.php\" style=\"float:right\">Log out</a></li>
</ul>
<br/>";
}
//if not logged in, this will show
 else {
    echo "<ul id=\"menu\">
  <li class=\"li\"><a class=\"active\" href=\"#home\">Home</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/info/news.html\">News</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/info/contact.html\">Contact</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/info/about.html\">About</a></li>
  <li class=\"li\"><a id=\"a\" href=\"html/auth/login.php\" style=\"float:right\">Log in</a></li>
</ul>
<br/>";
}
?>
<link rel="stylesheet" href="/css/menu.css">

//All of the Images/Content of this website must
//belong with it's owner and it's reserved terms and conditions
//
//Copyright to Kirk Charles P. Niverba for this Website
//000Webhost for my Server Hosting
//
//Apache License 2.0 is Used! Please see the readme in github to see!