<?php
ob_start();
session_start();
require_once "./env.php";
require_once "./app/views/client/header.php";

require_once "./vendor/autoload.php";
require_once "./app/common/route.php";

require_once "./app/views/client/hethong_showroom.php";
require_once "./app/views/client/lienhe.php";

require_once "./app/views/client/footer.php";
