<?php

class UserDAO {
    
    private $debug;
    private $pdo;
    
    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }
    
    public function cadastrar(User $user)
    {
        try
        {
            $sql = "INSERT INTO user(nome)VALUES(:nome)";
            $param = array
            (
              ":nome" => $user->getNome() 
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        }  catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
}
