<?php
/**
 * Created by PhpStorm.
 * User: everton
 * Date: 25/12/17
 * Time: 21:07
 */
	session_start();
	session_destroy();
	setcookie("logado",1,time()-23);
	header("location:index.html");
