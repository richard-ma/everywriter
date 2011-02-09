<?php

class MetaWeblog
{
    protected $client = null;

    protected $errCode = null;
    protected $errMsg = null;

    public function __construct($client)
    {
        $this->client = $client;

        $this->errCode = null;
        $this->errMsg = null;
    }

    public function __destruct()
    {
    }

    /*
     * Function: getErrorCode
     *
     * Params:
     *      None
     *
     * Return:
     *      error code
     *      null - no error occurd
     */
    public function getErrorCode()
    {
        return $this->errCode;
    }

    /*
     * Function: getErrorMessage
     *
     * Params:
     *      None
     *
     * Return:
     *      error message
     *      null - no error occurd
     */
    public function getErrorMessage()
    {
        return $this->errMsg;
    }

    /*
     * Function: newMediaObject
     *
     * Params:
     *      blogid
     *      username
     *      password
     *      struct
     *          title
     *          content
     *
     * Return:
     *      struct
     */
    public function newMediaObject()
    {
    }

    /*
     * Function: getCategories
     *
     * Params:
     *      blogid
     *      username
     *      password
     *
     * Return:
     *      struct
     */
    public function getCategories($blogid, $username, $password)
    {
        if ($this->client->query('metaWeblog.getCategories', $blogid, $username, $password)) {

            return $this->client->getResponse();

        } else {

            $this->errCode = $this->client->getErrorCode();
            $this->errMsg = $this->client->getErrorMessage();

            return false;
        }
    }

    /*
     * Function: getRecentPosts
     *
     * Params:
     *      blogid
     *      username
     *      password
     *      numberOfPosts
     *
     * Return:
     *      array of struct
     */
    public function getRecentPosts($blogid, $username, $password, $numberOfPosts = 5)
    {
        if ($this->client->query('metaWeblog.getRecentPosts', $blogid, $username, $password, $numberOfPosts)) {

            return $this->client->getResponse();

        } else {

            $this->errCode = $this->client->getErrorCode();
            $this->errMsg = $this->client->getErrorMessage();

            return false;
        }
    }

    /*
     * Function: getPost
     *
     * Params:
     *      postid
     *      username
     *      password
     *
     * Return:
     *      struct
     */
    public function getPost()
    {
        if ($this->client->query('metaWeblog.getPost', $postid, $username, $password)) {

            return $this->client->getResponse();

        } else {

            $this->errCode = $this->client->getErrorCode();
            $this->errMsg = $this->client->getErrorMessage();

            return false;
        }
    }

    /*
     * Function: editPost
     *
     * Params:
     *      postid
     *      username
     *      password
     *      struct
     *          title
     *          content
     *      publish
     *
     * Return:
     *      true
     */
    public function editPost()
    {
        $struct = array(
            'title' => $title, 
            'description' => $content
            );

        if ($this->client->query('metaWeblog.editPost', $postid, $username, $password, $struct, $publish)) {

            return $this->client->getResponse();

        } else {

            $this->errCode = $this->client->getErrorCode();
            $this->errMsg = $this->client->getErrorMessage();

            return false;
        }
    }

    /*
     * Function: newPost
     *
     * Params:
     *      blogid
     *      username
     *      password
     *      struct
     *          title
     *          content
     *      publish
     *
     * Return:
     *      string
     */
    public function newPost($blogid, $username, $password, $title, $content, $publish=false)
    {
        $struct = array(
            'title' => $title,
            'description' => $content
            );

        if ($this->client->query('metaWeblog.newPost', $blogid, $username, $password, $struct, $publish)) {

            return $this->client->getResponse();

        } else {

            $this->errCode = $this->client->getErrorCode();
            $this->errMsg = $this->client->getErrorMessage();

            return false;
        }
    }

}
