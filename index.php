<?php
session_start();
include("lib/sip2.class.php");
include("lib/messages.class.php");
include("lib/functions.php");
include "config.php";
$msg = new Messages();
if (isset($_SESSION['page']))
$page = $_SESSION['page'];
else
$page = "start";
//For big mistakes

#session_destroy();
 if (isset($_GET['killsession']))   
{
	session_destroy();
	header("Location: index.php");
}

if ($page == 'start') 
include ("parts/start.php");
elseif ($page == "process" )
include ("parts/process.php");
elseif ($page == "checkout" )
include ("parts/checkout.php");
elseif ($page == "reciept" )
include ("parts/reciept.php");


include("parts/footer.php");