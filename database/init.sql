DROP TABLE IF EXISTS contato;
CREATE TABLE IF NOT EXISTS contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    telefone VARCHAR(20),
    assunto VARCHAR(255),
    descricao TEXT
);

DROP TABLE IF EXISTS servico;
CREATE TABLE IF NOT EXISTS servico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT
);

INSERT INTO servico (titulo, descricao) VALUES
('Desenvolvimento de Sistemas Web', 'Criamos sistemas web personalizados utilizando as melhores tecnologias do mercado: HTML5, CSS3, JavaScript, PHP e MySQL/MariaDB.'),
('E-commerce e Lojas Virtuais', 'Desenvolvimento de plataformas de comércio eletrônico completas, com integração de pagamentos, gestão de estoque e relatórios.'),
('Sistemas de Gestão Empresarial', 'Soluções personalizadas para gestão de processos empresariais como CRM, ERP, controle de estoque e folha de pagamento.'),
('Aplicativos Web Responsivos', 'Desenvolvemos aplicações que funcionam perfeitamente em todos os dispositivos: desktop, tablet e smartphone.'),
('Manutenção e Suporte', 'Oferecemos suporte técnico especializado e manutenção preventiva e corretiva para sistemas já implantados.'),
('Consultoria em Tecnologia', 'Análise e recomendações para melhorar a infraestrutura tecnológica da sua empresa e otimizar processos digitais.');

DROP TABLE IF EXISTS membro;
CREATE TABLE IF NOT EXISTS membro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cargo VARCHAR(255),
    descricao TEXT,
    linkedin VARCHAR(255),
    github VARCHAR(255)
);

INSERT INTO membro (nome, cargo, descricao, linkedin, github) VALUES
('Guilherme Nascimento', 'Desenvolvedor Full-Stack', 'Responsável pelo desenvolvimento de sistemas complexos e escaláveis. Especialista em PHP e React, com foco em arquitetura limpa e integração de serviços.','https://www.linkedin.com/in/guilherme-nascimento-dos-santos/', 'https://github.com/T0koua'),
('Michael Santos', 'Desenvolvedor Full-Stack', 'Responsável pelo desenvolvimento de APIs RESTful, sistemas SaaS e integrações robustas. Especialista em Laravel, React, Spring Boot e modelagem de bancos de dados relacionais.', 'https://www.linkedin.com/in/wazmike/', 'https://github.com/wazdmike'),
('Pedro Henrique Calisto', 'Scrum Master', 'Facilita a adoção e o aprimoramento de práticas ágeis na equipe de desenvolvimento. Garante a comunicação eficaz, remoção de impedimentos e entrega contínua de valor ao cliente, com foco em melhoria contínua e colaboração.', 'https://www.linkedin.com/in/pedro-calisto-86957a26b', 'https://github.com/DestinyFrog'),
('João Pedro Bezerra', 'Analista de Sistemas', 'Analisa as necessidades dos clientes e traduz requisitos de negócio em soluções técnicas viáveis. Atua como ponte entre o cliente e a equipe de desenvolvimento, garantindo que o produto final atenda às expectativas e processos do negócio.', 'https://www.linkedin.com/in/joão-pedro-bezerra-30b8762a3', '');
