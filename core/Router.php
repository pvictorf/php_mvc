<?php
namespace core;

use \core\RouterBase;

class Router extends RouterBase {
    public $routes;
    
    /**
     * get
     *
     * @param  mixed $endpoint
     * @param  mixed $trigger
     * @return void
     */
    public function get($endpoint, $trigger) {
        $this->routes['get'][$endpoint] = $trigger;
    }
    
    /**
     * post
     *
     * @param  mixed $endpoint
     * @param  mixed $trigger
     * @return void
     */
    public function post($endpoint, $trigger) {
        $this->routes['post'][$endpoint] = $trigger;
    }
    
    /**
     * put
     *
     * @param  mixed $endpoint
     * @param  mixed $trigger
     * @return void
     */
    public function put($endpoint, $trigger) {
        $this->routes['put'][$endpoint] = $trigger;
    }
    
    /**
     * delete
     *
     * @param  mixed $endpoint
     * @param  mixed $trigger
     * @return void
     */
    public function delete($endpoint, $trigger) {
        $this->routes['delete'][$endpoint] = $trigger;
    }

}