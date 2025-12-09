
<div class="contact-form container">
    <form id="formContato">
        <div class="section-title">
            <h2>Fale Conosco</h2>
        </div>

        <div class="form-group">
            <label for="nome">Nome completo *</label>
            <input type="text" id="nome" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="email">E-mail *</label>
            <input type="email" id="email" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="assunto">Assunto</label>
            <select id="assunto" class="form-control">
                <option value="">Selecione um assunto</option>
                <option value="orcamento">Orçamento</option>
                <option value="duvida">Dúvida</option>
                <option value="suporte">Suporte</option>
                <option value="outro">Outro</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="mensagem">Mensagem *</label>
            <textarea id="mensagem" class="form-control" required></textarea>
        </div>
        
        <button type="submit" class="btn">Enviar Mensagem</button>
    </form>
</div>
</div>