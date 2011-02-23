<?php

interface ApiAdapter
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
    public function getCategories($blog);

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
    public function getRecentPosts($blog, $numberOfPosts);

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
    public function getPost($blog, $post);

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
    public function editPost($blog, $post, $publish);

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
    public function newPost($blog, $post, $publish);

}
