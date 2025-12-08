// Validação básica do formulário
document.getElementById('formContato').addEventListener('submit', function (e) {
    e.preventDefault();

    // Validação simples
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const mensagem = document.getElementById('mensagem').value;

    if (nome.trim() === '' || email.trim() === '' || mensagem.trim() === '') {
        alert('Por favor, preencha todos os campos obrigatórios.');
        return;
    }

    // Simulação de envio (em um projeto real, aqui seria uma requisição AJAX para PHP)
    alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
    document.getElementById('formContato').reset();
});

// Rolagem suave para âncoras
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Adiciona classe de animação quando elementos entram na viewport
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
}, observerOptions);

// Observar todos os elementos com a classe section-title, mv-card, team-member, etc.
document.querySelectorAll('.section-title, .mv-card, .team-member, .service-card, .diferential-item').forEach(el => {
    observer.observe(el);
});