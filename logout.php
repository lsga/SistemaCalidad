<?php
session_start();
echo 	header("Location: index.php");
session_destroy();
