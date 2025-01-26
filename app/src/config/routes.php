<?php

namespace App\Config;

class Routes {
    public static array $routes = [
        [
            "path" => "/",
            "method" => "GET",
            "controller" => "HomeController",
            "function" => "index"
        ],
        [
            "path" => "/users",
            "method" => "GET",
            "controller" => "UserController",
            "function" => "index"
        ]
    ];
}