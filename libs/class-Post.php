<?php

class Post
{
    protected $_title;
    protected $_link;
    protected $_description;
    protected $_author;
    protected $_category;
    protected $_comments;
    protected $_enclosure;
    protected $_guid;
    protected $_pubdate;
    protected $_source;

    public function __construct()
    {
        $_postid        = null;
        $_title         = null;
        $_link          = null;
        $_description   = null;
        $_author        = null;
        $_category      = null;
        $_comments      = null;
        $_enclosure     = null;
        $_guid          = null;
        $_pubdate       = null;
        $_source        = null;
    }
    
    public function setPostid($postid)
    {
        $this->_postid= $postid;
        return $this;
    }
    public function getPostid()
    {
        return $this->_postid;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
        return $this;
    }
    public function getTitle()
    {
        return $this->_title;
    }

    public function setLink($link)
    {
        $this->_link = $link;
        return $this;
    }
    public function getLink()
    {
        return $this->_link;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
        return $this;
    }
    public function getDescription()
    {
        return $this->_description;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
        return $this;
    }
    public function getAuthor()
    {
        return $this->_author;
    }

    public function setCategory($category)
    {
        $this->_category = $category;
        return $this;
    }
    public function getCategory()
    {
        return $this->_category;
    }

    public function setComments($comments)
    {
        $this->_comments = $comments;
        return $this;
    }
    public function getComments()
    {
        return $this->_comments;
    }

    public function setEnclosure($enclosure)
    {
        $this->_enclosure = $enclosure;
        return $this;
    }
    public function getEnclosure()
    {
        return $this->_enclosure;
    }

    public function setGuid($guid)
    {
        $this->_guid = $guid;
        return $this;
    }
    public function getGuid()
    {
        return $this->_guid;
    }

    public function setPubdate($pubdate)
    {
        $this->_pubdate = $pubdate;
        return $this;
    }
    public function getPubdate()
    {
        return $this->_pubdate;
    }

    public function setSource($source)
    {
        $this->_source = $source;
        return $this;
    }
    public function getSource()
    {
        return $this->_source;
    }


}

