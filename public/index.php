<?php
// Importa o autoload do Composer para carregar as rotas
require __DIR__ . '/../vendor/autoload.php';

// Injeta o conteudo das páginas de rota dentro do template base.php
function render($view, $data = []) {
    extract($data);
    ob_start();
    // Carrega a página da rota
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    // Carrega o template base.php
    require __DIR__ . '/../app/Views/layouts/base.php';
}
// Obtem a URL da requisição da navegação
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($url == "/"){
    render('home.php', ['title' => 'Página Inicial - Vendas']);
} else if ($url == '/sobre'){
    render('sobre.php', ['title' => 'Sobre o Sistema - Vendas' ]);
} else if ($url == '/entrar'){
    render('login.php', ['title' => 'Entrar no Sistema - Vendas' ]);
}
// Outras rotas entram aqui...
else {
    http_response_code(404);
    echo '<h1>404 - Página não encontrada</h1>';
    // render('404.php', ['title' => 'Página não encontrada - Vendas']);
}