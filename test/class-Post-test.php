<?php

require_once dirname(dirname(__file__)) . '/ew-load.php';
require_once APPROOT . '/libs/class-Post.php';

$title = 'title';
$link = 'link';
$description = 'description';
$author = 'author';
$category = 'category';
$comments = 'comments';
$enclosure = 'enclosure';
$guid = 'guid';
$pubdate = 'pubdate';
$source = 'source';

$post = new Post();
$post->setTitle($title)
    ->setLink($link)
    ->setDescription($description)
    ->setAuthor($author)
    ->setCategory($category)
    ->setComments($comments)
    ->setEnclosure($enclosure)
    ->setGuid($guid)
    ->setPubdate($pubdate)
    ->setSource($source);

print "Post::getTitle: ";
if ($post->getTitle() === $title) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getLink: ";
if ($post->getLink() === $link) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getDescription: ";
if ($post->getDescription() === $description) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getAuthor: ";
if ($post->getAuthor() === $author) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getCategory: ";
if ($post->getCategory() === $category) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getComments: ";
if ($post->getComments() === $comments) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getEnclosure: ";
if ($post->getEnclosure() === $enclosure) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getGuid: ";
if ($post->getGuid() === $guid) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getPubdate: ";
if ($post->getPubdate() === $pubdate) {
    print "OK";
} else {
    print "Error";
}
print "\n";

print "Post::getSource: ";
if ($post->getSource() === $source) {
    print "OK";
} else {
    print "Error";
}
print "\n";

