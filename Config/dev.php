<?php

namespace Config;

function spot() {
    static $spot;
    if ($spot === null) {
        $cfg = new \Spot\Config();
        $cfg->addConnection('mysql', [
            'dbname' => 'blog_oc',
            'user' => 'root',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        ]);
        $spot = new \Spot\Locator($cfg);
    }
    return $spot;
}