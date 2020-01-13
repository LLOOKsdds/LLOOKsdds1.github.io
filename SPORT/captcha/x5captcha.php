<?php
include("../res/x5engine.php");
$nameList = array("ncw","e2y","8t3","gjn","s58","my6","ndt","27t","tzd","32y");
$charList = array("3","M","Z","S","Y","S","G","M","K","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
