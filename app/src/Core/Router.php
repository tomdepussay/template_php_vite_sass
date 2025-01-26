<?php

namespace App\Core;

class Router {
    /**
     * Trouver et exécuter la route correspondant à la requête HTTP.
     */
    public function dispatch(array $routes) {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        // Supprimer les paramètres GET de l'URL (si présents)
        $uri = strtok($uri, '?');

        if(isset($routes)){
            foreach($routes as $route){
                if($route['path'] === $uri && $route['method'] === $method){
                    $controller = "App\\Controllers\\" . $route['controller'];
                    $function = $route['function'];
                    $controller = new $controller();
                    $controller->$function();
                    return;
                }
            }
        }

        // Si aucune route ne correspond, afficher une erreur 404
        echo "404 - Route not found.";
    }
}
