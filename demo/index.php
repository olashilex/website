<?php
require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/demo/' || $uri === '/demo/index.php') {
  require "controllers/index.php";
} elseif ($uri === '/demo/about/' || $uri === '/demo/about.php') {
  require "controllers/about.php";
} elseif ($uri === '/demo/contact/' || $uri === '/demo/contact.php') {
  require "controllers/contact.php";
} else {
  echo "Page not found";
}
