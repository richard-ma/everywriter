<?php

require_once dirname(dirname(__file__)) . '/ew-load.php';
require_once APPROOT . '/libs/api/class-MetaweblogAdapter.php';
require_once APPROOT . '/libs/api/class-IXR.php';
require_once APPROOT . '/libs/class-Blog.php';
require_once APPROOT . '/libs/class-Post.php';

$blog = new Blog();
$blog->setBlogid(1)
    ->setUsername('wordpress')
    ->setPassword('wordpress')
    ->setBaseurl('http://127.0.0.1/wordpress')
    ->setXmlrpcsuffix('/xmlrpc.php');

print "XmlRPC url: " . $blog->getXmlrpcUrl() . "\n";

/* Create xml rpc client */
$client = new IXR_client($blog->getXmlrpcUrl());

$metaweblogAdapter = new MetaweblogAdapter($client);

print "metaweblogAdapter::newMediaObject: ";
$media = null;
$result = $metaweblogAdapter->newMediaObject($blog, $media);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblogAdapter->getErrorCode();
    print "ErrorMessage: " . $metaweblogAdapter->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblogAdapter::getCategories: ";
$result = $metaweblogAdapter->getCategories($blog);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblogAdapter->getErrorCode();
    print "ErrorMessage: " . $metaweblogAdapter->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblogAdapter::getRecentPosts: ";
$numberOfPosts = 1;
$result = $metaweblogAdapter->getRecentPosts($blog, $numberOfPosts);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblogAdapter->getErrorCode();
    print "ErrorMessage: " . $metaweblogAdapter->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblogAdapter::newPost: ";
$post = new Post();
$post->setTitle('newPost title')
    ->setDescription('newPost content');
$publish = false;
$result = $metaweblogAdapter->newPost($blog, $post, $publish);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblogAdapter->getErrorCode();
    print "ErrorMessage: " . $metaweblogAdapter->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblogAdapter::editPost: ";
$post = new Post();
$post->setPostid($result)
    ->setTitle('editPost title')
    ->setDescription('editPost content');
$publish = false;
$result = $metaweblogAdapter->editPost($blog, $post, $publish);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblogAdapter->getErrorCode();
    print "ErrorMessage: " . $metaweblogAdapter->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";

print "metaweblogAdapter::getPost: ";
$post = new Post();
$post->setPostid($result);
$result = $metaweblogAdapter->getPost($blog, $post);
if ($result === null) {
    print "\n";
    print "ErrorCode: " . $metaweblogAdapter->getErrorCode();
    print "ErrorMessage: " . $metaweblogAdapter->getErrorMessage();
} elseif ($result === API_UNIMPLEMENT) {
    print API_UNIMPLEMENT;
} else {
    print "Ok";
}
print "\n";
