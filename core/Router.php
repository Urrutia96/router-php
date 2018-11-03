<?php 

class Router{

    // Variable donde se guardaran las rutas
    protected $routes = [];

    /**
     * Recibe un array con las rutas 
     * 
     * @param array $routes
     * @return void
     */
    public function define($routes){
        $this->routes = $routes;
    }
    
    /**
     * Recibe la URI y la compara con las key del array de rutas,
     * si existe, retorna la ruta del controllador que se va a usar para esa URI.
     * 
     * @param String $uri
     * @return String 
     */
    public function redirect($uri){
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }

        throw new Exception('No se ha encontrado la pagina que estas buscando');
    }
}