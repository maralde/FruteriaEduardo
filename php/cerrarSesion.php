<?php
session_unset();
session_destroy();

header("Location: ../indexSinSesion.php");
exit();