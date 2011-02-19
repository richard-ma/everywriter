<?php

require_once dirname(dirname(__file__)) . '/ew-load.php';

require_once APPROOT . '/libs/class-Blog.php';

class Profile
{
    public function __construct()
    {
    }

    public function load($filepath, &$blog)
    {
        $profile_array = parse_ini_file($filepath);

        $blog->setUsername($profile_array['username'])
            ->setPassword($profile_array['password'])
            ->setBaseurl($profile_array['baseurl'])
            ->setXmlrpcsuffix($profile_array['suffix']);
    }

    public function save($blog, $filepath)
    {
    }
}
