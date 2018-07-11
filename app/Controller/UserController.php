<?php

class UserController {
    
    private $userDAO;
    
    public function __construct() {
        $this->userDAO = new UserDAO();
    }
    
    public function cadastrar(User $user)
    {
        return $this->userDAO->cadastrar($user);
    }        
    
}
