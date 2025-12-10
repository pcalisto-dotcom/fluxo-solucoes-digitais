DROP TABLE IF EXISTS servico;
CREATE TABLE IF NOT EXISTS servico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT
);

DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    cargo VARCHAR(255),
    senha VARCHAR(255),
    bio TEXT,
    admin INTEGER DEFAULT FALSE,
    membro INTEGER DEFAULT FALSE
);

CREATE VIEW membro AS
SELECT *
FROM usuario
WHERE membro = TRUE;

DROP TABLE IF EXISTS contato;
CREATE TABLE IF NOT EXISTS contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    telefone VARCHAR(20),
    assunto VARCHAR(255),
    descricao TEXT
);

INSERT INTO servico (titulo, descricao) VALUES
('Desenvolvimento de Sistemas Web', 'Criamos sistemas web personalizados utilizando as melhores tecnologias do mercado: HTML5, CSS3, JavaScript, PHP e MySQL/MariaDB.'),
('E-commerce e Lojas Virtuais', 'Desenvolvimento de plataformas de comércio eletrônico completas, com integração de pagamentos, gestão de estoque e relatórios.'),
('Sistemas de Gestão Empresarial', 'Soluções personalizadas para gestão de processos empresariais como CRM, ERP, controle de estoque e folha de pagamento.'),
('Aplicativos Web Responsivos', 'Desenvolvemos aplicações que funcionam perfeitamente em todos os dispositivos: desktop, tablet e smartphone.'),
('Manutenção e Suporte', 'Oferecemos suporte técnico especializado e manutenção preventiva e corretiva para sistemas já implantados.'),
('Consultoria em Tecnologia', 'Análise e recomendações para melhorar a infraestrutura tecnológica da sua empresa e otimizar processos digitais.');
