<?php


class Controller {
   
    
    public $cadastroindex = false;
    public $loginindex    = false;
    
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
            if(isset($_POST['cadastrar'])){
                $email = $_POST['email'];
                $nome  = $_POST['nome'];
                $senha = $_POST['senha'];
                
                $usuario = new Usuario();
                $this->cadastroindex = $usuario->addUsuario($email,$nome,$senha);
               }
               
               if(isset($_POST['login'])){
                   
                   $email = $_POST['email'];
                   $senha = $_POST['senha'];
                   $login = new Usuario();
                   
                   if($login->validarUsuario($email,$senha)>0){
                       header('Location:home.php');
                       exit;
                       
                   }else{
                       $this->loginindex = "Dados Invalidos";
                   }
               }
        }
    }
    
    
          
}
