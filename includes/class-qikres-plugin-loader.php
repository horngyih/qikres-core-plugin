<?php
abstract class Qikres_Plugin_Loader{
    protected $actions;
    protected $filters;
    protected $custom_types;

    public function __construct(){

    }

    public function add_action( $hook, $component, $callback ){
        $this->actions = $this->add( $this->actions, $hook, $component, $callback );
    }

    public function add_filter( $hook, $component, $callback ){
        $this->filters = $this->add( $this->filters, $hook, $component, $callback );
    }

    public function add_custom_type( $hook, $component, $callback ){
        $this->custom_types = $this->add( $this->custom_types, $hook, $compoennt, $callback );
    }

    private function add( $hooks, $hook, $component, $callback ){
        $hooks[] = array(
            'hook'      => $hook,
            'component' => $component,
            'callback'  => $callback
        );
        return $hooks;
    }

    public function run(){
        foreach( $this->filters as $hook ){
            add_filter( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
        }

        foreach( $this->actions as $hook ){
            add_action( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
        }

        foreach( $this->custom_types as $hook ){
            add_custom_type( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
        }
    }
}
?>