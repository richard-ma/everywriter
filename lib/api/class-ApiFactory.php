<?php

require_once dirname(dirname(dirname(__file__))) . '/ew-load.php';

require_once APPROOT . '/libs/api/class-MetaweblogAdapter.php';

class ApiFactory
{
    public static function getApiAdapter($type, $client)
    {
        switch ($type) {
        case 'metaweblog':
            return new MetaweblogAdapter($client);
            break;

        default:
            return null;
        }
    }
}
