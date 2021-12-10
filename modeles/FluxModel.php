<?php

class FluxModel
{
    private $gwFlux;

    public function __construct(){
        $this->gwFlux = new FluxGateway();
    }

    public function get_flux() :array{
        return $this->gwFlux->selectAll();
    }




}