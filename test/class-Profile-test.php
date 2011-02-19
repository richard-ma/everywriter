<?php

require_once dirname(dirname(__file__)) . '/ew-load.php';

require_once APPROOT . '/libs/class-Profile.php';

$blog = new Blog();

$profile = new Profile();
$profile->load(APPROOT . '/profile/profile_example.ini', $blog);

var_dump($blog);
