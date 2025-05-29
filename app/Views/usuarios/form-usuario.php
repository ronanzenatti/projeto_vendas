<?php
if (isset($_SESSION['dados'])) {
    $dados = $_SESSION['dados'];
    unset($_SESSION['dados']);
}

if (isset($dados['id_usuario'])) {
    $rota = "/usuarios/" . $dados['id_usuario'] . "/atualizar";
} else {
    $rota = "/usuarios/salvar";
}

if (isset($_SESSION['erros'])):
    $erros = $_SESSION['erros'];
?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Erro ao cadastrar!</h4>
        <p>Verifique os itens abaixo em seu formulário antes de tentar novamente!</p>
        <ul>
            <?php foreach ($erros as $e): ?>
                <li><?= $e ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif;
unset($_SESSION['erros']); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Usuários</li>
    </ol>
</nav>

<form action="<?= $rota ?>" method="POST">
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
                        <input type="text" class="form-control"
                            value="<?= isset($dados['nome']) ? htmlspecialchars($dados['nome']) : '' ?>"
                            id="nomeCompleto" name="nome" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="cpf" 
                                value="<?= isset($dados['cpf']) ? htmlspecialchars($dados['cpf']) : '' ?>"
                                placeholder="123.456.789-00" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" class="form-control" id="dataNascimento" 
                                value="<?= isset($dados['data_nascimento']) ? htmlspecialchars($dados['data_nascimento']) : '' ?>"
                                required>
                        </div>
                    </div>
                    <div class="">
                        <label for="telefone" class="form-label">Celular</label>
                        <input type="tel" name="celular" class="form-control" id="telefone" 
                            value="<?= isset($dados['celular']) ? htmlspecialchars($dados['celular']) : '' ?>"
                            placeholder="(00) 00000-0000" required>
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
                        <input type="email" name="email" class="form-control" id="email"
                            value="<?= isset($dados['email']) ? htmlspecialchars($dados['email']) : '' ?>"
                            required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
                            <input type="password" name="confirmar_senha" class="form-control" id="confirmarSenha" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="tipoUsuario" class="form-label">Tipo de Usuário</label>
                        <select class="form-select" id="tipoUsuario" required name="tipo">
                            <option disabled value="">Selecione...</option>
                            
                            <option <?= isset($dados['tipo']) && $dados['tipo'] == "Cliente" ? "selected" : "" ?> 
                                value="Cliente">Cliente</option>

                            <option <?= isset($dados['tipo']) && $dados['tipo'] == "Funcionário" ? "selected" : "" ?>
                                value="Funcionário">Funcionário</option>
                            
                            <option <?= isset($dados['tipo']) && $dados['tipo'] == "Administrador" ? "selected" : "" ?>
                                value="Administrador">Administrador</option>
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
                            <input type="text" name="cep" class="form-control" id="cep" 
                                value="<?= isset($dados['cep']) ? htmlspecialchars($dados['cep']) : '' ?>"
                                placeholder="00000-000" required>
                        </div>
                        <div class="col-md-9 mb-3">
                            <label for="rua" class="form-label">Rua</label>
                            <input type="text" name="rua" class="form-control" id="rua"
                                value="<?= isset($dados['rua']) ? htmlspecialchars($dados['rua']) : '' ?>"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" name="numero" class="form-control" id="numero"
                                value="<?= isset($dados['numero']) ? htmlspecialchars($dados['numero']) : '' ?>"
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="complemento"
                                value="<?= isset($dados['complemento']) ? htmlspecialchars($dados['complemento']) : '' ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="bairro"
                                value="<?= isset($dados['bairro']) ? htmlspecialchars($dados['bairro']) : '' ?>"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" name="cidade" class="form-control" id="cidade"
                                value="<?= isset($dados['cidade']) ? htmlspecialchars($dados['cidade']) : '' ?>"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" class="form-select" id="estado" required>
                                <option selected disabled value="">Selecione...</option>
                                <option value="AC" <?= isset($dados['estado']) && $dados['estado'] == "AC" ? "selected" : "" ?>>Acre</option>
                                <option value="AL" <?= isset($dados['estado']) && $dados['estado'] == "AL" ? "selected" : "" ?>>Alagoas</option>
                                <option value="AP" <?= isset($dados['estado']) && $dados['estado'] == "AP" ? "selected" : "" ?>>Amapá</option>
                                <option value="AM" <?= isset($dados['estado']) && $dados['estado'] == "AM" ? "selected" : "" ?>>Amazonas</option>
                                <option value="BA" <?= isset($dados['estado']) && $dados['estado'] == "BA" ? "selected" : "" ?>>Bahia</option>
                                <option value="CE" <?= isset($dados['estado']) && $dados['estado'] == "CE" ? "selected" : "" ?>>Ceará</option>
                                <option value="DF" <?= isset($dados['estado']) && $dados['estado'] == "DF" ? "selected" : "" ?>>Distrito Federal</option>
                                <option value="ES" <?= isset($dados['estado']) && $dados['estado'] == "ES" ? "selected" : "" ?>>Espírito Santo</option>
                                <option value="GO" <?= isset($dados['estado']) && $dados['estado'] == "GO" ? "selected" : "" ?>>Goiás</option>
                                <option value="MA" <?= isset($dados['estado']) && $dados['estado'] == "MA" ? "selected" : "" ?>>Maranhão</option>
                                <option value="MT" <?= isset($dados['estado']) && $dados['estado'] == "MT" ? "selected" : "" ?>>Mato Grosso</option>
                                <option value="MS" <?= isset($dados['estado']) && $dados['estado'] == "MS" ? "selected" : "" ?>>Mato Grosso do Sul</option>
                                <option value="MG" <?= isset($dados['estado']) && $dados['estado'] == "MG" ? "selected" : "" ?>>Minas Gerais</option>
                                <option value="PA" <?= isset($dados['estado']) && $dados['estado'] == "PA" ? "selected" : "" ?>>Pará</option>
                                <option value="PB" <?= isset($dados['estado']) && $dados['estado'] == "PB" ? "selected" : "" ?>>Paraíba</option>
                                <option value="PR" <?= isset($dados['estado']) && $dados['estado'] == "PR" ? "selected" : "" ?>>Paraná</option>
                                <option value="PE" <?= isset($dados['estado']) && $dados['estado'] == "PE" ? "selected" : "" ?>>Pernambuco</option>
                                <option value="PI" <?= isset($dados['estado']) && $dados['estado'] == "PI" ? "selected" : "" ?>>Piauí</option>
                                <option value="RJ" <?= isset($dados['estado']) && $dados['estado'] == "RJ" ? "selected" : "" ?>>Rio de Janeiro</option>
                                <option value="RN" <?= isset($dados['estado']) && $dados['estado'] == "RN" ? "selected" : "" ?>>Rio Grande do Norte</option>
                                <option value="RS" <?= isset($dados['estado']) && $dados['estado'] == "RS" ? "selected" : "" ?>>Rio Grande do Sul</option>
                                <option value="RO" <?= isset($dados['estado']) && $dados['estado'] == "RO" ? "selected" : "" ?>>Rondônia</option>
                                <option value="RR" <?= isset($dados['estado']) && $dados['estado'] == "RR" ? "selected" : "" ?>>Roraima</option>
                                <option value="SC" <?= isset($dados['estado']) && $dados['estado'] == "SC" ? "selected" : "" ?>>Santa Catarina</option>
                                <option value="SP" <?= isset($dados['estado']) && $dados['estado'] == "SP" ? "selected" : "" ?>>São Paulo</option>
                                <option value="SE" <?= isset($dados['estado']) && $dados['estado'] == "SE" ? "selected" : "" ?>>Sergipe</option>
                                <option value="TO" <?= isset($dados['estado']) && $dados['estado'] == "TO" ? "selected" : "" ?>>Tocantins</option>
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