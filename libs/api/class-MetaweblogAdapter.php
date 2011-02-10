<?php

require_once dirname(dirname(dirname(__file__))) . '/ew-load.php';

require_once APPROOT . '/libs/api/class-MetaWeblog.php';
require_once APPROOT . '/libs/api/interface-ApiAdapter.php';

class MetaweblogAdapter extends MetaWeblog implements ApiAdapter 
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
        return parent::getCategories(
            $blog->getBlogid(), 
            $blog->getUsername(), 
            $blog->getPassword());
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
        return parent::getRecentPosts(
            $blog->getBlogid(),
            $blog->getUsername(),
            $blog->getPassword(),
            $numberOfPosts);
    }

    /*
     * Function: getPost
     *
     * Params:
     *      blog
     *      post
     *
     * Return:
     *      struct
     */
    public function getPost($blog, $post)
    {
        return parent::getPost(
            $post->getPostid(),
            $blog->getUsername(),
            $blog->getPassword());
    }

    /*
     * Function: editPost
     *
     * Params:
     *      blog
     *      post
     *      publish
     *
     * Return:
     *      true
     */
    public function editPost($blog, $post, $publish)
    {
        return parent::editPost(
            $post->getPostid(),
            $blog->getUsername(),
            $blog->getPassword(),
            $post->getTitle(),
            $post->getContent(),
            $publish);
    }

    /*
     * Function: newPost
     *
     * Params:
     *      blog
     *      post
     *      publish
     *
     * Return:
     *      string
     */
    public function newPost($blog, $post, $publish)
    {
        return parent::newPost(
            $blog->getBlogid(),
            $blog->getUsername(),
            $blog->getPassword(),
            $post->getTitle(),
            $post->getContent(),
            $publish);
    }

}
