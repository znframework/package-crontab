<?php namespace ZN\Crontab;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

/**
 * Default Crontab Configuration
 * 
 * Enabled when the configuration file can not be accessed.
 */
class CrontabDefaultConfiguration
{
    /*
    |--------------------------------------------------------------------------
    | Crontab
    |--------------------------------------------------------------------------
    |
    | The current PHP path. Especially necessary for crontab.
    |
    */

    public $path = '/usr/bin/php';
}
