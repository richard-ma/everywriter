<?php

require_once dirname(dirname(dirname(__file__))) . '/ew-load.php';

require_once APPROOT . '/libs/api/class-Api.php';

class Metaweblog extends Api
{
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
    public function getPost($postid, $username, $password)
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
    public function editPost($postid, $username, $password, $title, $content, $publish)
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
