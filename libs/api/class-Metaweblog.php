<?php

require_once dirname(dirname(dirname(__file__))) . '/ew-load.php';

require_once APPROOT . '/libs/api/class-Api.php';

class Metaweblog extends Api
{
    /**
     * Function: newMediaObject
     *
     * Params:
     *      blogid
     *      username
     *      password
     *      struct
     *          element
     *
     * Return:
     *      struct
     */
    public function newMediaObject($blogid, $username, $password, $struct)
    {
        //TODO implements this method.

        return API_UNIMPLEMENT;

        /*
        if ($this->client->query('metaWeblog.newMediaObject', $blogid, $username, $password, $struct)) {

            return $this->client->getResponse();

        } else {

            $this->errCode = $this->client->getErrorCode();
            $this->errMsg = $this->client->getErrorMessage();

            return null;
        }
         */
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

            return null;
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

            return null;
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

            return null;
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

            return null;
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

            return null;
        }
    }
}
