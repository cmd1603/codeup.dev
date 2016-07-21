<?php
require_once 'functions-debug.php';



function pageController() {
    session_start();
    clearSession();
    redirect("login-debug.php");
}
pageController();