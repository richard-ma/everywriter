<?php

class Blog
{
    protected $_blogid;
    protected $_username;
    protected $_password;
    protected $_baseurl;
    protected $_xmlrpcsuffix;

    public function __construct()
    {
         $_blogid       = null;
         $_username     = null;
         $_password     = null;
         $_baseurl      = null;
         $_xmlrpcsuffix = null;
    }

    public function setBlogid($blogid)
    {
        $this->_blogid = $blogid;
        return $this
    }
    public function getBlogid()
    {
        return $this->_blogid;
    }

    public function setUsername($username)
    {
        $this->_username = $username;
        return $this
    }
    public function getUsername()
    {
        return $this->_username;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
        return $this
    }
    public function getPassword()
    {
        return $this->_password;
    }

    public function setBaseurl($baseurl)
    {
        $this->_baseurl = $baseurl;
        return $this
    }
    public function getBaseurl()
    {
        return $this->_baseurl;
    }

    public function setXmlrpcsuffix($xmlrpcsuffix)
    {
        $this->_xmlrpcsuffix = $xmlrpcsuffix;
        return $this
    }
    public function getXmlrpcsuffix()
    {
        return $this->_xmlrpcsuffix;
    }

    public function getXmlrpcUrl()
    {
        return $this->_baseurl . $this->_xmlrpcsuffix;
    }


}

