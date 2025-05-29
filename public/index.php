<?php
/* `session_start();` is a PHP function that initializes a new session or resumes the existing session
based on a session identifier passed via a GET or POST request, or a cookie. Sessions are a way to
store information (variables) to be used across multiple pages. By calling `session_start();`, you
are starting a new session or resuming an existing one, allowing you to store and access session
variables throughout your application. */
session_start();
// Importa o autoload do Composer para carregar as rotas
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;
// Instancia o controller de Usuário para ser utilizado (Cria o Objeto)
$usuarioCtrl = new UsuarioController();

// Injeta o conteudo das páginas de rota dentro do template base.php
function render($view, $data = [])
{
    extract($data);
    ob_start();
    // Carrega a página da rota
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    // Carrega o template base.php
    require __DIR__ . '/../app/Views/layouts/base.php';
}

function render_sem_login($view, $data = [])
{
    extract($data);
    ob_start();
    $content = ob_get_clean();
    // Carrega a página da rota
    require __DIR__ . '/../app/Views/' . $view;
}
// Obtem a URL da requisição da navegação /
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($url == "/") {
    // render('home.php', ['title' => 'Página Inicial - LivroTech']);
    header('Location: /entrar');
} else if ($url == '/sobre') {
    render_sem_login('sobre.php', ['title' => 'Sobre o Sistema - LivroTech']);
} else if ($url == '/entrar') {
    render_sem_login('auth/login.php', ['title' => 'Entrar no Sistema - LivroTech']);
} else if ($url == "/dashboard") {
    render('dashboard.php', ['title' => 'Dashboard - LivroTech']);
} else if ($url == "/usuarios") {
    $usuarios = $usuarioCtrl->listar();

} else if ($url == "/usuarios/novo") {
    $usuarios = $usuarioCtrl->novo();
} 
// Verifica também se veio por POST a rota
else if ($url == "/usuarios/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuarios = $usuarioCtrl->salvar();
}
// preg_match utiliza uma expressão regular para extrair um valor de uma string
else if (preg_match('#^/usuarios/(\d+)/editar$#', $url, $num)){
    $usuarioCtrl->editar($num[1]);
}
else if (preg_match('#^/usuarios/(\d+)/atualizar$#', $url, $num) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuarioCtrl->atualizar($num[1]);
}

else if (preg_match('#^/usuarios/(\d+)/del-fisico$#', $url, $num)){
    $usuarioCtrl->deleteFisico($num[1]);
}

else if (preg_match('#^/usuarios/(\d+)/del-logico$#', $url, $num)){
    $usuarioCtrl->deleteLogico($num[1]);
}


// Outras rotas entram aqui...
else {
    http_response_code(404);
    echo '<h1>404 - Página não encontrada</h1>';
    // render('404.php', ['title' => 'Página não encontrada - LivroTech']);
}
