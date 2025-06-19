<?php
// Não precisa iniciar a sessão, pois este arquivo vem pelo Index.php
namespace App\Controllers;

// Importa o Model para ser utilizado

use App\Models\Usuario;
use App\Models\Venda;

class VendaController
{

    // exibe a lista de vendas
    public function listar()
    {
        // Chama a Model de Usuário e executa a busca no BD
        $vendas = Venda::buscarTodos();

        // Exibe o arquivo PHP de lista enviando os usuários do BD para apresentação.
        render("vendas/listar-vendas.php", [
            'title' => 'Usuários - LivroTech',
            "vendas" => $vendas
        ]);
    }

    // Abre o formulário para criar um usuário
    public function novo()
    {
        $usuarios = Usuario::buscarTodos();
        render("vendas/form-venda.php", [
            'title' => 'Cadastrar Usuário - LivroTech',
            'usuarios' => $usuarios,
            // 'produtos' => $produtos
        ]);
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
            header('Location: /vendas/novo');
        } else {
            // Chama o Model passando os dados
            Venda::salvar($dados);
            $_SESSION['mensagem'] = "Usuário: " . $dados['nome'] . ", cadastrado com sucesso!";
            $_SESSION['tipo_mensagem'] = "success";
            header('Location: /vendas');
        }
    }

    public function editar($id)
    {
        $dados = Venda::buscarUm($id);

        render("vendas/form-venda.php", [
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
            header('Location: /vendas/' . $id . '/editar');
        } else {
            // Chama o Model passando os dados
            $dados['id_venda'] = $id;
            Venda::atualizar($dados);
            $_SESSION['mensagem'] = "Usuário: " . $dados['nome'] . ", alterado com sucesso!";
            $_SESSION['tipo_mensagem'] = "success";
            header('Location: /vendas');
        }
    }

    // Apenas coloca a data de exclusão no BD.
    public function deleteLogico($id)
    {
        Venda::deletarLogico($id);
        header('Location: /vendas');
    }

    // Exclui definitivamente o registro da tabela
    public function deleteFisico($id)
    {
        Venda::deletarFisico($id);
        header('Location: /vendas');
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
