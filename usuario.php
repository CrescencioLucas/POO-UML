<?php 
class Usuario {
    // Propriedade
    public $primeiroNome;
    // Metodo que diz Olá ao usuário $primeiroNome.
    public function hello(){
    echo "Olá, " . $this->primeiroNome;
    return $this;
    }
    public function registrar(){
    echo " >> registrado"; 
    return $this;   
    }
    public function mail(){
        echo " >> email enviado";    
    }       
}
    
    $usuario1 = new Usuario();
    $usuario1-> primeiroNome = "Jane";
    $usuario1->hello() ->registrar() ->mail();
?>

    
