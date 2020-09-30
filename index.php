<?php

require_once "models/template.php";
require_once "models/servicios.php";

require_once "controllers/template.php";
require_once "controllers/servicios.php";
require_once "controllers/globales.php";

Template::baseUrl();
Template::titleTemplate();
Template::templateController();