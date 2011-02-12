<?php

require_once dirname(dirname(__file__)) . '/ew-load.php';
require_once APPROOT . '/libs/class-Blog.php';

$blogid = 1;
$username = 'wordpress';
$password = 'wordpress';
$baseurl = 'http://127.0.0.1/wordpress';
$xmlrpcsuffix = '/xmlrpc.php';

$blog = new Blog();
$blog->setBlogid($blogid)
    ->setUsername($username)
    ->setPassword($password)
    ->setBaseurl($baseurl)
    ->setXmlrpcsuffix($xmlrpcsuffix);

print "Blog::getBlogid: ";
if ($blog->getBlogid() === $blogid) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Blog::getUsername: ";
if ($blog->getUsername() === $username) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Blog::getPassword: ";
if ($blog->getPassword() === $password) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Blog::getBaseurl: ";
if ($blog->getBaseurl() === $baseurl) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Blog::getXmlrpcsuffix: ";
if ($blog->getXmlrpcsuffix() === $xmlrpcsuffix) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Blog::getXmlrpcUrl: ";
if ($blog->getXmlrpcUrl() === $baseurl.$xmlrpcsuffix) {
    print "OK";
} else {
    print "Error";
}
print "\n";

