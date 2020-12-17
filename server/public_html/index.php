<?php

define("ROOTPATH", "../src");

require ROOTPATH . '/App.php';

App::init();
App::$kernel->launch();