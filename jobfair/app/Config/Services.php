<?php
namespace Config;

use CodeIgniter\Config\BaseService;
use CodeIgniter\Shield\Services\Auth as ShieldAuth;

class Services extends BaseService
{
    /**
     * @return \CodeIgniter\Shield\Services\Auth
     */
    public static function auth(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('auth');
        }

        return new ShieldAuth();
    }
}
