<?php

require_once '../lib/class-MetaWeblog.php';
require_once '../lib/class-IXR.php';

/* Create xml rpc client */
$client = new IXR_client('http://127.0.0.1/wordpress/xmlrpc.php');

$metaweblog = new MetaWeblog($client);

$blogid = 1;
$username = 'wordpress';
$password = 'wordpress';


//var_dump($metaweblog->getUsersBlogs($username, $password));
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

//var_dump($metaweblog->setTemplate());
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

//var_dump($metaweblog->getTemplate());
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

//var_dump($metaweblog->deletePost());
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

//var_dump($metaweblog->newMediaObject());
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

var_dump($metaweblog->getCategories($blogid, $username, $password));
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

$numberOfPosts = 5;
var_dump($metaweblog->getRecentPosts($blogid, $username, $password, $numberOfPosts));
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

//var_dump($metaweblog->getPost($postid, $username, $password));
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

//var_dump($metaweblog->editPost());
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

//var_dump($metaweblog->newPost());
var_dump($metaweblog->getErrorCode());
var_dump($metaweblog->getErrorMessage());

