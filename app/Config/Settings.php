<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Settings extends BaseConfig
{
    /*
    * Recaptha Google
    *
    * See link below for setup and get key
    * http://www.google.com/recaptcha/admin
    */
    public $recaptcha_site_key = '';
    public $recaptcha_secret_key = '';
    public $recaptcha_lang = 'id';
}
