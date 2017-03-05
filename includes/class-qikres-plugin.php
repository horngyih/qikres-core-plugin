<?php

abstract class Qikres_Plugin{
    protected $loader;
    protected $plugin_slug;
    protected $version;

    public function __construct(){

    }

    private function load_dependencies(){
        if( isset( $this->loader ) ){
            if( method_exists( $this->loader, 'run' ) ){
                $this->loader->run();
            }
        }
    }

    private function define_hooks(){

    }

    public function run(){
        $this->load_dependencies();
        $this->define_hooks();
    }

    public function get_version(){
        return $this->$version;
    }
}

?>