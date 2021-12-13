<?php

class Admin
{
    private $pseudo;
    private $mdp;

    public function __construct(string $pseudo, string $mdp){
        $this->mdp = $mdp;
        $this->pseudo = $pseudo;
    }

    public function login(){

    }

}