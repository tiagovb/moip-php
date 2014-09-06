<?php

class Moip_Environment
{

    const ENVIRONMENT_DEV = 'development';
    const ENVIRONMENT_PROD = 'production';

    public static $environmentArgs = [
        self::ENVIRONMENT_DEV => [
            'name' => 'Sandbox',
            'base_url' => 'https://desenvolvedor.moip.com.br/sandbox',
        ],
        self::ENVIRONMENT_PROD => [
            'name' => 'Produção',
            'base_url' => 'https://www.moip.com.br',
        ],
    ];
    public $base_url;
    public $name;

    function __construct($base_url = '', $name = '')
    {
        $this->base_url = $base_url;
        $this->name = $name;
    }

}
