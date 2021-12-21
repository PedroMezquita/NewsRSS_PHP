<?php

class AdminModel
{
    private $gwAdmin;

    public function __construct()
    {
        $this->gwAdmin = new AdminGateway();
    }

    public function get_admin(string $pseudo): Admin
    {
        return $this->gwAdmin->FindByPseudo($pseudo);

    }

    public function set_admin(string $pseudo, string $mdpHash){
        return $this->gwAdmin->insert(new Admin($pseudo, $mdpHash));
    }

}