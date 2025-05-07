<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Usuários</li>
    </ol>
</nav>

<form>
    <div class="row g-4">
        <!-- Informações Pessoais -->
        <div class="col-lg-6">
            <div class="form-card card h-100">
                <div class="card-header bg-white">
                    <i class="fas fa-user text-primary"></i> Informações Pessoais
                </div>
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="nomeCompleto" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nomeCompleto" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="123.456.789-00" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="dataNascimento" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="telefone" class="form-label">Celular</label>
                        <input type="tel" class="form-control" id="telefone" placeholder="(00) 00000-0000" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informações de Acesso -->
        <div class="col-lg-6">
            <div class="form-card card h-100">
                <div class="card-header bg-white">
                    <i class="fas fa-lock text-primary"></i> Informações de Acesso
                </div>
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirmarSenha" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="tipoUsuario" class="form-label">Tipo de Usuário</label>
                        <select class="form-select" id="tipoUsuario" required>
                            <option selected disabled value="">Selecione...</option>
                            <option value="cliente">Cliente</option>
                            <option value="funcionario">Funcionário</option>
                            <option value="administrador">Administrador</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Endereço -->
        <div class="col-12">
            <div class="form-card card">
                <div class="card-header bg-white">
                    <i class="fas fa-map-marker-alt text-primary"></i> Endereço
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="00000-000" required>
                        </div>
                        <div class="col-md-9 mb-3">
                            <label for="rua" class="form-label">Rua</label>
                            <input type="text" class="form-control" id="rua" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" class="form-control" id="numero" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="complemento">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" required>
                        </div>
                        <div class="col-md-6">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" id="estado" required>
                                <option selected disabled value="">Selecione...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botões -->
        <div class="col-12">
            <div class="form-card card">
                <div class="card-body p-4 d-flex justify-content-between gap-3">
                    <a href="lista-usuarios.html" class="btn btn-outline-secondary">Voltar</a>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>
