<?php

require_once dirname(dirname(__file__)) . '/ew-load.php';
require_once APPROOT . '/libs/class-Category.php';

$categoryid = 'categoryid';
$parentid = 'parentid';
$description = 'description';
$categoryname = 'categoryname';
$htmlurl = 'htmlurl';
$rssurl = 'rssurl';
$categorydescription = 'categorydescription';

$category = new Category();
$category->setCategoryid($categoryid)
    ->setParentid($parentid)
    ->setDescription($description)
    ->setCategoryname($categoryname)
    ->setHtmlurl($htmlurl)
    ->setRssurl($rssurl)
    ->setCategorydescription($categorydescription);

print "Category::getCategoryid: ";
if ($category->getCategoryid() === $categoryid) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Category::getParentid: ";
if ($category->getParentid() === $parentid) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Category::getDescription: ";
if ($category->getDescription() === $description) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Category::getCategoryname: ";
if ($category->getCategoryname() === $categoryname) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Category::getHtmlurl: ";
if ($category->getHtmlurl() === $htmlurl) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Category::getRssurl: ";
if ($category->getRssurl() === $rssurl) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Category::getCategorydescription: ";
if ($category->getCategorydescription() === $categorydescription) {
    print "OK";
} else {
    print "Error";
}
print "\n";

