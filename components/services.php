<?php

require_once dirname(__DIR__) . "/lib/database.php";

$conn = get_conn();
$stmt = $conn->query("SELECT titulo, descricao FROM servico");
$servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section id="servicos">
    <div class="container">
        <div class="section-title">
            <h2>Serviços Prestados</h2>
        </div>

        <div class="services-container">
            <?php foreach ($servicos as $s): ?>
                <div class="service-card">
                    <h3><?= $s["titulo"] ?></h3>
                    <p><?= $s["descricao"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
