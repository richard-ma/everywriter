<?php

require_once dirname(dirname(dirname(__file__))) . '/ew-load.php';

require_once APPROOT . './libs/api/class-ApiAbstract.php';
require_once APPROOT . './libs/api/metaweblog/class-MetaWeblog.php';

class MetaweblogAdapter extends ApiAbstract
{
    /*
     * Function: getCategories
     *
     * Params:
     *      blog
     *
     * Return:
     *      struct
     */
    public function getCategories($blog)
    {
    }

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
    public function getRecentPosts($blog, $numberOfPosts)
    {
    }

    /*
     * Function: getPost
     *
     * Params:
     *      post
     *
     * Return:
     *      struct
     */
    public function getPost($post)
    {
    }

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
    public function editPost($blog, $post)
    {
    }

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
    public function newPost($blog, $post)
    {
    }

    /*
     * Function: _newMediaObject
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
    public function _newMediaObject()
    {
    }

    /*
     * Function: _getCategories
     *
     * Params:
     *      blogid
     *      username
     *      password
     *
     * Return:
     *      struct
     */
    public function _getCategories($blogid, $username, $password)
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
     * Function: _getRecentPosts
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
    public function _getRecentPosts($blogid, $username, $password, $numberOfPosts = 5)
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
     * Function: _getPost
     *
     * Params:
     *      postid
     *      username
     *      password
     *
     * Return:
     *      struct
     */
    public function _getPost()
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
     * Function: _editPost
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
    public function _editPost()
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
     * Function: _newPost
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
    public function _newPost($blogid, $username, $password, $title, $content, $publish=false)
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
