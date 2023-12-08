<?php


class Usuario {
    public function addUsuario($email,$nome,$senha){
        try{
            $sql  = "INSERT INTO usuario VALUES( ?, ?, ?, ?)";
            $stmt = Conexao::getConexao()->prepare($sql);
          //  $stmt -> bindValue (1,$id);
            $stmt -> bindValue (3,$nome);
            $stmt -> bindValue (1,$email);
            $stmt -> bindValue (4,$senha);
            $stmt -> bindValue (2,  md5($email));
            $stmt-> execute();
            
            return 'Usuario Cadastrado com Sucesso!';
        } catch (Exception $ex) {
            if($ex->errorInfo[1]==1062){
                return 'Usuario já Cadastrado!';
            }else{
                return 'Erro ao Cadastrar Usuario!';
            }

        }
    }
    
    public function validarUsuario($email,$senha){
        
        try{
            
            $sql = "SELECT * FROM usuario WHERE email=? AND senha=?";
            $stmt =  Conexao::getConexao()->prepare($sql);
            $stmt -> bindValue(1,$email);
            $stmt -> bindValue(2,$senha);
            $stmt -> execute();
            $result = $stmt ->rowCount();
            return $result;
        } catch (Exception $ex) {
            
            return false;

        }
    }
    
    public function recebeUsuario($email){
        
        try{
            
            $sql ="SELECT * FROM usuario where email='$email'";
            $stmt =  Conexao::getConexao()->prepare($sql);
            $stmt -> bindValue(1,$email);
            $stmt -> execute();
            if($stmt ->rowCount()>0){
                $result = $stmt ->fetch(PDO::FETCH_BOTH);
                return $result;
            }
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }
        
    
}
