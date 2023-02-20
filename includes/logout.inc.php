<?php
//Deze functie zorgt er voor dat de oude session die wordt gemaakt als je inlogged wordt vernietigd, dus uitloggen
session_start();
session_unset();
session_destroy();

header("location: ../php/index.php");
exit();