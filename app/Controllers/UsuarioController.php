<?php
// Não precisa iniciar a sessão, pois este arquivo vem pelo Index.php
namespace App\Controllers;

// Importa o Model para ser utilizado
use App\Models\Usuario;

class UsuarioController
{

    // exibe a lista de usuarios
    public function listar()
    {
        // Chama a Model de Usuário e executa a busca no BD
        $usuarios = Usuario::buscarTodos();

        // Exibe o arquivo PHP de lista enviando os usuários do BD para apresentação.
        render("usuarios/listar-usuarios.php", [
            'title' => 'Usuários - LivroTech',
            "usuarios" => $usuarios
        ]);
    }

    // Abre o formulário para criar um usuário
    public function novo()
    {
        render("usuarios/form-usuario.php", ['title' => 'Cadastrar Usuário - LivroTech']);
    }

    // Salva um novo usuário no BD
    public function salvar()
    {
        // 1. Sanatização (Remove tudo que não for texto puro, evita golpes)
        $dados = [
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'cpf' => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
            'data_nascimento' => $_POST['data_nascimento'] ?? '',
            'celular' => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
            'rua' => filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS),
            'numero' => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS),
            'complemento' => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS),
            'bairro' => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade' => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'cep' => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
            'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
            'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
            'tipo' => filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS),
            'senha' => $_POST['senha'] ?? null,
            'confirmar_senha' => $_POST['confirmar_senha'] ?? null,
        ];
        // print_r($_POST); exit();
        // Aqui vamos fazer as validações
        $erros = $this->validar($dados);

        if (!empty($erros)) {
            // Envia os erros para a página de cadastro
            $_SESSION['erros'] = $erros;
            // Envia os dados já informados para serem incluidos.
            $_SESSION['dados'] = $dados;
            // Retorna para a página de cadastro
            header('Location: /usuarios/novo');
        } else {
            // Chama o Model passando os dados
            Usuario::salvar($dados);
            $_SESSION['mensagem'] = "Usuário: " . $dados['nome'] . ", cadastrado com sucesso!";
            $_SESSION['tipo_mensagem'] = "success";
            header('Location: /usuarios');
        }
    }

    public function editar($id)
    {
        $dados = Usuario::buscarUm($id);

        render("usuarios/form-usuario.php", [
            'title' => 'Alterar Usuário - LivroTech',
            "dados" => $dados
        ]);
    }

    public function atualizar($id)
    {
        // 1. Sanatização (Remove tudo que não for texto puro, evita golpes)
        $dados = [
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'cpf' => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
            'data_nascimento' => $_POST['data_nascimento'] ?? '',
            'celular' => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
            'rua' => filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS),
            'numero' => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS),
            'complemento' => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS),
            'bairro' => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade' => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'cep' => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
            'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
            'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
            'tipo' => filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS),
            'senha' => $_POST['senha'] ?? null,
            'confirmar_senha' => $_POST['confirmar_senha'] ?? null,
        ];
        // print_r($_POST); exit();
        // Aqui vamos fazer as validações
        $erros = $this->validar($dados);

        if (!empty($erros)) {
            // Envia os erros para a página de cadastro
            $_SESSION['erros'] = $erros;
            // Envia os dados já informados para serem incluidos.
            $_SESSION['dados'] = $dados;
            // Retorna para a página de cadastro
            //print_r($erros); exit();
            header('Location: /usuarios/' . $id . '/editar');
        } else {
            // Chama o Model passando os dados
            $dados['id_usuario'] = $id;
            Usuario::atualizar($dados);
            $_SESSION['mensagem'] = "Usuário: " . $dados['nome'] . ", alterado com sucesso!";
            $_SESSION['tipo_mensagem'] = "success";
            header('Location: /usuarios');
        }
    }

    // Apenas coloca a data de exclusão no BD.
    public function deleteLogico($id)
    {
        Usuario::deletarLogico($id);
        header('Location: /usuarios');
    }

    // Exclui definitivamente o registro da tabela
    public function deleteFisico($id)
    {
        Usuario::deletarFisico($id);
        header('Location: /usuarios');
    }

    // Implementa a validação e sanitização dos dados do form (limpeza de segurança)
    public function validar($dados)
    {
        $erros = [];

        // Validação do Nome
        if (empty($dados['nome'])) {
            $erros[] = "O Nome é Obrigatório!";
        } else if (strlen($dados['nome']) < 3) {
            $erros[] = "O nome deve ter pelo menos 3 caracteres.";
        }

        // Validação do Senha
        if (empty($dados['senha'])) {
            $erros[] = "A Senha é Obrigatório!";
        } else if (strlen($dados['senha']) < 6) {
            $erros[] = "A senha deve ter pelo menos 6 caracteres.";
        }

        // Validação do E-mail
        if (empty($dados['email'])) {
            $erros[] = "O E-mail é Obrigatório!";
        } else if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
            $erros[] = "E-mail informado é inválido!" . $dados['email'];
        }

        // Validação do Tipo
        if (empty($dados['tipo'])) {
            $erros[] = "O Tipo de Usuário é Obrigatório!";
        } else if (!in_array($dados['tipo'], ['Administrador', 'Funcionário', 'Cliente'])) {
            $erros[] = "O Tipo de Usuário é Inválido!";
        }

        // Outras validações
        // Validar o CPF informado se é valido de acordo com o calculo
        // Validar se o CPF já foi cadastrado (Busca no BD)
        // Validar se o e-mail já foi cadastrado (Busca no BD)

        // Validação da Senha se é igual a confirmação
        if (empty($dados['senha']) || empty($dados['confirmar_senha'])) {
            $erros[] = "A senha e confirmação de senha são Obrigatórias!";
        } else if ($dados['senha'] != $dados['confirmar_senha']) {
            $erros[] = "A senha e confirmação de senha devem ser iguais!";
        }

        return $erros;
    }
}
