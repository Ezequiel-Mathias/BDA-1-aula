<?php
/***************************************************************
 * Objetivo:  Arquivo para criar a conexão com o BD Mysql
 * Autor: Ezequiel
 * Data: 25/02/2022
 * Versão: 1.0
 ***************************************************************/

 //constantes para estabelecer a conexao com o BD (local do BD, usuario, senha e database)
 const SERVER = 'localhost';
 const USER = 'root';
 const PASSWORD = 'bcd127';
 const DATABASE = 'dbcontatos';

 
$teste = conexaoMysql();
echo ('<pre>');
var_dump($teste);
echo ('<pre>');
 //Abre a conexao com o banco Mysql
 function conexaoMysql(){
     $conexao = array();

    //Se a conexão for estabelecida  com o BD, iremos ter um array de dados sobre a conexão 
   $conexao = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

   //Validação para verificar se a conexão foi realizada com sucesso
   if($conexao){
       return $conexao;
   }else{
       return false;
   }
    

 }


 /*
    Existem 3 formas de criar a conexao com o BD Mysql

        mysql_connect() - versão antiga do PHP de fazer a conexão com BD (Não oferece perfomace e segurança)
        mysqli_connect() - versão mais atualizada do PHP de fazer a conexão com BD (ela permite ser utilizada para programação estruturada e POO)
        PDO() - é a mais completa e eficiente para conexão com BD (é indicada pela segurança e POO)   


 */



?>