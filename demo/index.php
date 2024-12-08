<?php
require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/demo/' || $uri === '/demo/index.php') {
    require "controllers/index.php";
} else if ($uri === '/about/' || $uri === '/demo/about.php'){
  require "about/index.php";
} else if ($uri === '/contact/' || $uri === '/demo/contact.php'){
    require "controllers/contact.php";
}