<?php
    require_once dirname(__DIR__) . '/lib/auth.php';
    include dirname(__DIR__) . '/includes/head.php';
?>

<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <div class="logo-img">WDS</div>
                <div class="logo-text">
                    <h1>WebDev Solutions</h1>
                    <p>Desenvolvimento de Sistemas para Internet</p>
                </div>
            </div>

            <nav>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#equipe">Equipe</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>

            <?php if (is_logged_in()):
                $usuario = get_usuario(); ?>
                <div>Olá <?= $usuario['nome'] ?></div>
            <?php else: ?>
                <nav>
                    <a href="/login.php">Login</a>
                    <a href="/cadastro.php">Crie uma conta</a>
                </nav>
            <?php endif ?>
        </div>
    </header>