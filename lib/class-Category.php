<?php

class Category
{
    protected $_categoryid;
    protected $_parentid;
    protected $_description;
    protected $_categoryname;
    protected $_htmlurl;
    protected $_rssurl;
    protected $_categorydescription;

    public function __construct()
    {
         $_categoryid           = null;
         $_parentid             = null;
         $_description          = null;
         $_categoryname         = null;
         $_htmlurl              = null;
         $_rssurl               = null;
         $_categorydescription  = null;
    }

    public function setCategoryid($categoryid)
    {
        $this->_categoryid = $categoryid;
        return $this;
    }
    public function getCategoryid()
    {
        return $this->_categoryid;
    }

    public function setParentid($parentid)
    {
        $this->_parentid = $parentid;
        return $this;
    }
    public function getParentid()
    {
        return $this->_parentid;
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

    public function setCategoryname($categoryname)
    {
        $this->_categoryname = $categoryname;
        return $this;
    }
    public function getCategoryname()
    {
        return $this->_categoryname;
    }

    public function setHtmlurl($htmlurl)
    {
        $this->_htmlurl = $htmlurl;
        return $this;
    }
    public function getHtmlurl()
    {
        return $this->_htmlurl;
    }

    public function setRssurl($rssurl)
    {
        $this->_rssurl = $rssurl;
        return $this;
    }
    public function getRssurl()
    {
        return $this->_rssurl;
    }

    public function setCategorydescription($categorydescription)
    {
        $this->_categorydescription = $categorydescription;
        return $this;
    }
    public function getCategorydescription()
    {
        return $this->_categorydescription;
    }


}

