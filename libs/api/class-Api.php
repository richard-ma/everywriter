<?php

class Api
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

}
