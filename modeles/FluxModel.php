<<<<<<< HEAD
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

    public function set_flux(string $titre, string $description, string $link, string $date, string $lang) :int{
        return $this->gwFlux->insert($titre, $description, $link, $date, $lang);
    }




=======
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




>>>>>>> 4c9000e10aaa2385e2dfaf0b8615525c4838226c
}