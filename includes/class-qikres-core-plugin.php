<?php

class Qikres_Core_Plugin{
    protected $loader;
    protected $plugin_slug;
    protected $version;

    public function __construct(){
        $this->$plugin_slug = 'qikres-core-slug';
        $this->$version = '0.1.0';
    }

    private function load_dependencies(){

    }

    private function define_hooks(){

    }

    public function run(){

    }

    public function get_version(){
        return $this->$version;
    }
}

?>