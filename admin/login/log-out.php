<?php

session_start();

unset($_SESSION["login"]); 
unset($_SESSION["Name"]); 
unset($_SESSION["Name"]); 
unset($_SESSION["Password"]); 

header('location: ./');
