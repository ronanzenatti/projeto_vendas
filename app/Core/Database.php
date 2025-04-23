<?php

namespace App\Core;

// Importa a classe do PDO (Gestão de BD com OO)
use PDO;
// Importa a classe do PDO para tratamento de erros
use PDOException;

class Database
{
    public static function conectar()
    {
        $host = 'localhost'; // Endereço do servidor de BD
        $porta = '3306'; // Porta do servidor de BD
        $banco = 'sistema_vendas'; // Nome do banco de dados
        $usuario = 'root'; // Usuário padrão do XAMPP
        $senha = ''; // Senha padrão do XAMPP (vazia)

        // Cria a string de conexão com o banco de dados
        $dsn = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4";

        // tenta executar um determinado código
        try {
            return new PDO($dsn, $usuario, $senha, [
                // Ativa o modo de erro do PDO
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                // Define o modo de busca padrão como associativo
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            // Se ocorrer um erro, exibe uma mensagem de erro
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }
}
