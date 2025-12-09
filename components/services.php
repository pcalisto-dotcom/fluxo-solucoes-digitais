<?php
$servicos = [
    [
        "titulo" => "Desenvolvimento de Sistemas Web",
        "descricao" => "Criamos sistemas web personalizados utilizando as melhores tecnologias do mercado: HTML5, CSS3, JavaScript, PHP e MySQL/MariaDB."
    ],
    [
        "titulo" => "E-commerce e Lojas Virtuais",
        "descricao" => "Desenvolvimento de plataformas de comércio eletrônico completas, com integração de pagamentos, gestão de estoque e relatórios."
    ],
    [
        "titulo" => "Sistemas de Gestão Empresarial",
        "descricao" => "Soluções personalizadas para gestão de processos empresariais como CRM, ERP, controle de estoque e folha de pagamento."
    ],
    [
        "titulo" => "Aplicativos Web Responsivos",
        "descricao" => "Desenvolvemos aplicações que funcionam perfeitamente em todos os dispositivos: desktop, tablet e smartphone."
    ],
    [
        "titulo" => "Manutenção e Suporte",
        "descricao" => "Oferecemos suporte técnico especializado e manutenção preventiva e corretiva para sistemas já implantados."
    ],
    [
        "titulo" => "Consultoria em Tecnologia",
        "descricao" => "Análise e recomendações para melhorar a infraestrutura tecnológica da sua empresa e otimizar processos digitais."
    ]
];
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
