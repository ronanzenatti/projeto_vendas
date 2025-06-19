<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="lista-vendas.html">Vendas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registrar Venda</li>
    </ol>
</nav>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-shopping-cart me-2"></i>Registrar Venda</h1>
</div>

<div class="card border-0 shadow-sm mb-4">
    <div class="card-body p-4">
        <form>
            <div class="row g-3">
                <!-- Informações do Cliente -->
                <div class="col-md-12 mb-3">
                    <h5 class="border-bottom pb-2">Informações do Cliente</h5>
                </div>

                <div class="col-md-8 mb-3">
                    <label for="clienteNome" class="form-label">Cliente</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="clienteNome" placeholder="Nome do cliente" required>
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="clienteCpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="clienteCpf" placeholder="000.000.000-00" required>
                </div>

                <!-- Informações do Produto -->
                <div class="col-md-12 mb-3">
                    <h5 class="border-bottom pb-2">Informações do Produto</h5>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="produtoSelect" class="form-label">Produto</label>
                    <select class="form-select" id="produto_id" name="produto_id" required>
                        <option selected disabled value="">Selecione um produto...</option>
                        <?php foreach ($produtos as $prod): ?>
                            <option
                                <?= isset($dados['produto_id']) && $dados['produto_id'] == $prod['id_produto'] ? 'selected' : null ?>
                                value="<?= $prod['id_produto'] ?>">
                                <?= $prod['nome'] ?> - (R$ <?= $prod['valor'] ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" placeholder="1" min="1" value="1" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="preco" class="form-label">Preço Unitário</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="text" class="form-control" id="preco" placeholder="0.00" readonly>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <button type="button" class="btn btn-secondary mt-4">
                        <i class="fas fa-plus me-1"></i> Adicionar Produto
                    </button>
                </div>


                <!-- Informações da Venda -->
                <div class="col-md-12 mb-3">
                    <h5 class="border-bottom pb-2">Informações da Venda</h5>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="dataVenda" class="form-label">Data da Venda</label>
                    <input type="date" class="form-control" id="dataVenda" value="2025-04-17" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="formaPagamento" class="form-label">Forma de Pagamento</label>
                    <select class="form-select" id="formaPagamento" required>
                        <option selected disabled value="">Selecione...</option>
                        <option value="dinheiro">Dinheiro</option>
                        <option value="cartao">Cartão de Crédito/Débito</option>
                        <option value="pix">PIX</option>
                        <option value="boleto">Boleto Bancário</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="observacoes" class="form-label">Observações</label>
                    <textarea class="form-control" id="observacoes" rows="3"></textarea>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="lista-vendas.html" class="btn btn-secondary">Voltar</a>
                <button type="reset" class="btn btn-warning">Limpar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</div>