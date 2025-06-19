<?php
// Não precisa iniciar a sessão, pois este arquivo vem pelo Index.php
namespace App\Controllers;

// Importa o Model para ser utilizado
use App\Models\Auth;

class AuthController
{

    public function login()
    {
        $usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = $_POST['senha'];

        $erros = [];
        if (empty($usuario)) {
            $erros[] = "O Campo de E-mail é Obrigatório!";
        }
        if (empty($senha)) {
            $erros[] = "O Campo de Senha é Obrigatório!";
        }

        if (!empty($erros)) {
            // Envia os erros para a página de cadastro
            $_SESSION['erros'] = $erros;
            // Envia os dados já informados para serem incluidos.
            $_SESSION['dados'] = $usuario;
            print_r($_SESSION);
            exit();
            // Retorna para a página de cadastro
            header('Location: /entrar');
        } else {
            if (Auth::login($usuario, $senha)) {
                header('Location: /dashboard');
            } else {
                $_SESSION['erros'] = ['Usuário e/ou Senha inválidos!'];
                header('Location: /entrar');
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        unset($_SESSION['usuario_tipo']);

        session_destroy(); // Apaga completamente a sessão
        session_start();

        header('Location: /entrar');
    }
}
