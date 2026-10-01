<?php
// 1. Carrega o cabeçalho compartilhado do layout
include_once('../includes/header.php');

// 2. Sanitização do parâmetro recebido via URL
$acao = filter_var($_GET['acao'] ?? 'bemvindo', FILTER_SANITIZE_STRING);

// 3. Relação das rotas disponíveis
$paginas = [
    'bemvindo'  => '../paginas/conteudo/cadastro_contato.php',
    'editar'    => '../paginas/conteudo/update_contato.php',
    'perfil'    => '../paginas/conteudo/perfil.php',
    'relatorio' => '../paginas/conteudo/relatorio.php'
];

// 4. Seleciona a rota informada ou mantém a página inicial
$pagina_incluir = isset($paginas[$acao]) ? $paginas[$acao] : $paginas['bemvindo'];

// 5. Inclusão da página de conteúdo correspondente
include_once($pagina_incluir);

// 6. Inclui o rodapé do layout
include_once('../includes/footer.php');
?>
