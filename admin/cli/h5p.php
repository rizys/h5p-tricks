<?php

define('CLI_SCRIPT', true);

require_once('config.php');
defined('MOODLE_INTERNAL') || die();


require 'h5p.class.php';
$h5p = new h5p();
$h5p->updateAllModules();