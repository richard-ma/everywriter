<?php

require_once '../lib/class-MetaWeblog.php';
require_once '../lib/class-IXR.php';

/* Create xml rpc client */
$client = new IXR_client('http://127.0.0.1/wordpress/xmlrpc.php');

$metaweblog = new MetaWeblog($client);

$blogid = 1;
$username = 'wordpress';
$password = 'wordpress';


//print_r($metaweblog->newMediaObject());
//print_r($metaweblog->getErrorCode());
//print_r($metaweblog->getErrorMessage());
//print "===========================================\n";

//print_r($metaweblog->getCategories($blogid, $username, $password));
//print_r($metaweblog->getErrorCode());
//print_r($metaweblog->getErrorMessage());
//print "===========================================\n";

$numberOfPosts = 1;
//print_r($metaweblog->getRecentPosts($blogid, $username, $password, $numberOfPosts));
//print_r($metaweblog->getErrorCode());
//print_r($metaweblog->getErrorMessage());
//print "===========================================\n";

//print_r($metaweblog->getPost($postid, $username, $password));
//print_r($metaweblog->getErrorCode());
//print_r($metaweblog->getErrorMessage());
//print "===========================================\n";

//print_r($metaweblog->editPost());
//print_r($metaweblog->getErrorCode());
//print_r($metaweblog->getErrorMessage());
//print "===========================================\n";

//print_r($metaweblog->newPost());
//print_r($metaweblog->getErrorCode());
//print_r($metaweblog->getErrorMessage());
//print "===========================================\n";
