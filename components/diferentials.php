<?php
$diferenciais = [
    [
        "titulo" => "Equipe Técnica Multidisciplinar",
        "descricao" => "Time composto por desenvolvedores full-stack, analista de sistemas e Scrum Master, garantindo visão técnica, estratégica e organizacional em cada projeto."
    ],
    [
        "titulo" => "Soluções Sob Medida",
        "descricao" => "Cada sistema é desenvolvido de forma personalizada, respeitando os processos, objetivos e desafios específicos de cada cliente."
    ],
    [
        "titulo" => "Metodologias Ágeis",
        "descricao" => "Utilizamos práticas ágeis para garantir entregas rápidas, comunicação constante e adaptação às mudanças ao longo do projeto."
    ],
    [
        "titulo" => "Arquitetura Escalável e Segura",
        "descricao" => "Desenvolvimento focado em código limpo, boas práticas e arquiteturas preparadas para crescimento e evolução do negócio."
    ],
    [
        "titulo" => "Comunicação Clara e Transparente",
        "descricao" => "O cliente acompanha todas as etapas do projeto, com alinhamentos frequentes e total transparência nas decisões técnicas."
    ],
    [
        "titulo" => "Visão Estratégica de Negócio",
        "descricao" => "Não entregamos apenas software: analisamos o negócio para propor soluções tecnológicas que gerem valor real e resultados."
    ]
];
?>
<section id="diferenciais">
    <div class="container">
        <div class="section-title">
            <h2>Diferenciais</h2>
        </div>

        <div class="services-container">
            <?php foreach ($diferenciais as $d): ?>
                <div class="diferential-card">
                    <h3><?= $d["titulo"] ?></h3>
                    <p><?= $d["descricao"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>