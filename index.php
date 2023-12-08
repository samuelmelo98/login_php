<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="validarlogin.js"></script>
            
    </head>
    <body>
        <div>
          <!--  <form id="login" action="index.php" method="POST">
            <input type="text"     id="email"   name="email" "Digite seu Email">
            <input type="password" id="senha"   name="senha" "Digite sua Senha">
            <input type="submit"   id="enviar"  name="enviar" value="Enviar">
            </form>
        </div>-->
        <?php
     include './model/Conexao.php';
     include './model/Usuario.php';
      echo "teste";
     //var_dump(Conexao::getConexao());
     $u =new Usuario();
   echo $u->addUsuario('samuel', 'anderson', 'ok');
   
   //  echo $u->validarUsuario('samuel', '123456')
    // print_r($u->recebeUsuario('samuel'));
    
        ?>
    </body>
</html>
