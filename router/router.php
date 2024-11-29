<?php 
namespace router;
    class router {
        public $routes = [];
        public function add($method, $role, $path, $handle) {
            $this->routes[] = [
                'method' => $method,
                'role' => $role,
                'path' => $path,
                'handle' => $handle
            ];
        }

        public function solve($role) {
            $requestMethod = $_SERVER['REQUEST_METHOD'];
            $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $requestPath = str_replace(BASE_URL, "", $requestPath);

            foreach ($this->routes as $route) {
                if ($route['method'] == $requestMethod && $route['path'] == $requestPath && $route['role'] == $role) {
                    
                    list($controller, $method) = explode("@", $route['handle']);
                    $controller = "controllers\\$role\\$controller";
                    //debug($controller);
                    call_user_func([new $controller, $method], []);
                }
            }
        }
    }
?>