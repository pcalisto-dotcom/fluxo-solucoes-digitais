<section id="contato">
    <div class="container">
        <div class="section-title">
            <h2>Contato e Fale Conosco</h2>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Entre em Contato</h3>
                <p>Tem um projeto em mente? Entre em contato conosco para uma consulta gratuita!</p>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4>Endereço</h4>
                        <p>Av. Paulista, 1000 - São Paulo, SP</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h4>Telefone</h4>
                        <p>(11) 99999-9999</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4>E-mail</h4>
                        <p>contato@fluxosolucoesdigitais.com.br</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h4>Horário de Atendimento</h4>
                        <p>Segunda a Sexta: 9h às 18h</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3>Envie uma Mensagem</h3>
                <form id="formContato" action="/api/add_contato.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome completo *</label>
                        <input type="text" id="nome" class="form-control" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" class="form-control" name="telefone">
                    </div>

                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <select id="assunto" class="form-control" name="assunto">
                            <option value="">Selecione um assunto</option>
                            <option value="orcamento">Orçamento</option>
                            <option value="duvida">Dúvida</option>
                            <option value="suporte">Suporte</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem *</label>
                        <textarea id="mensagem" class="form-control" required name="descricao"></textarea>
                    </div>

                    <button type="submit" class="btn">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>