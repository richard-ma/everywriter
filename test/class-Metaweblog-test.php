<?php

require_once dirname(dirname(__file__)) . '/ew-load.php';
require_once APPROOT . '/libs/api/class-Metaweblog.php';
require_once APPROOT . '/libs/api/class-IXR.php';

/* Create xml rpc client */
$client = new IXR_client('http://127.0.0.1/wordpress/xmlrpc.php');

$metaweblog = new MetaWeblog($client);

$blogid = 1;
$username = 'wordpress';
$password = 'wordpress';

print "metaweblog::newMediaObject: ";
$media = null;
$result = $metaweblog->newMediaObject($blogid, $username, $password, $media);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblog->getErrorCode();
    print "ErrorMessage: " . $metaweblog->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblog::getCategories: ";
$result = $metaweblog->getCategories($blogid, $username, $password);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblog->getErrorCode();
    print "ErrorMessage: " . $metaweblog->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblog::getRecentPosts: ";
$numberOfPosts = 1;
$result = $metaweblog->getRecentPosts($blogid, $username, $password, $numberOfPosts);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblog->getErrorCode();
    print "ErrorMessage: " . $metaweblog->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblog::newPost: ";
$title = 'newPost title';
$content = 'newPost content';
$publish = false;
$result = $metaweblog->newPost($blogid, $username, $password, $title, $content, $publish);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblog->getErrorCode();
    print "ErrorMessage: " . $metaweblog->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblog::editPost: ";
$postid = $result;
$title = 'editPost title';
$content = 'editPost content';
$publish = false;
$result = $metaweblog->editPost($postid, $username, $password, $title, $content, $publish);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblog->getErrorCode();
    print "ErrorMessage: " . $metaweblog->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblog::getPost: ";
$result = $metaweblog->getPost($postid, $username, $password);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblog->getErrorCode();
    print "ErrorMessage: " . $metaweblog->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";
