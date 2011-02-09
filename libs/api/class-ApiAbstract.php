<?php

abstract class ApiAbstract
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
     * Function: getCategories
     *
     * Params:
     *      blog
     *
     * Return:
     *      struct
     */
    public abstract function getCategories($blog);

    /*
     * Function: getRecentPosts
     *
     * Params:
     *      blog
     *      numberOfPosts
     *
     * Return:
     *      array of struct
     */
    public abstract function getRecentPosts($blog, $numberOfPosts);

    /*
     * Function: getPost
     *
     * Params:
     *      post
     *
     * Return:
     *      struct
     */
    public abstract function getPost($post);

    /*
     * Function: editPost
     *
     * Params:
     *      blog
     *      post
     *
     * Return:
     *      true
     */
    public abstract function editPost($blog, $post);

    /*
     * Function: newPost
     *
     * Params:
     *      blog
     *      post
     *
     * Return:
     *      string
     */
    public abstract function newPost($blog, $post);

}
