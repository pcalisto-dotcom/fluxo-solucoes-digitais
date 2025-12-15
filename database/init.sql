DROP TABLE IF EXISTS servico;
CREATE TABLE IF NOT EXISTS servico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT
);

DROP TABLE IF EXISTS membro;
CREATE TABLE IF NOT EXISTS membro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cargo VARCHAR(255),
    descricao TEXT
);

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

INSERT INTO membro (nome, cargo, descricao) VALUES
('Guilherme Nascimento', 'Desenvolvedora Full-Stack', 'Responsável no desenvolvimento de sistemas complexos. Especialista em PHP e React.'),
('Michael Santos', 'Desenvolvedor Full-Stack', 'Responsável no desenvolvimento de APIs RESTful e SaaS. Especialista em Laravel, React e Springboot e banco de dados relacionais.'),
('Pedro Henrique Calisto', 'Desenvolvedor Front-End', 'Cria interfaces intuitivas e responsivas com HTML, CSS e JavaScript. Especialista em experiência do usuário (UX).'),
('João Pedro Bezerra', 'Analista de Sistemas', 'Analisa necessidades dos clientes e traduz em requisitos técnicos para a equipe de desenvolvimento.');