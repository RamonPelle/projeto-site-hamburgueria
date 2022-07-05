<?php

class dados
{
    public static function getConexao(): PDO
    {
        $conexao = new PDO("mysql:host=localhost;dbname=hamburgueriaVeggie", "root", "");
        return $conexao;
    }
}
