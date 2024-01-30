<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Adiciona os estilos do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Adiciona um arquivo de estilos personalizado (styles.css) -->
  <link rel="stylesheet" href="styles.css">
  <title>Cadastro</title>
</head>
<body>

  <!-- Container principal utilizando Bootstrap -->
  <div class="container mt-5">
    <!-- Formulário de cadastro -->
    <form id="cadastroForm">
      <!-- Campo para o nome -->
      <div class="form-group">
        <label for="inputNome">Nome:</label>
        <input type="text" class="form-control" id="inputNome" required>
      </div>

      <!-- Campo para o CPF -->
      <div class="form-group">
        <label for="inputCPF">CPF:</label>
        <input type="text" class="form-control" id="inputCPF" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF válido (xxx.xxx.xxx-xx)">
      </div>

      <!-- Campo para o Estado -->
      <div class="form-group">
        <label for="selectEstado">Estado:</label>
        <select class="form-control" id="selectEstado" required>
          <option value="" disabled selected>Selecione o Estado</option>
        </select>
      </div>

      <!-- Campo para a Cidade -->
      <div class="form-group">
        <label for="selectCidade">Cidade:</label>
        <select class="form-control" id="selectCidade" required disabled>
          <option value="" disabled selected>Selecione o Estado primeiro</option>
        </select>
      </div>

      <!-- Campo para a Data de Nascimento -->
      <div class="form-group">
        <label for="inputNascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="inputNascimento" required>
      </div>

      <!-- Campo para como conheceu o evento -->
      <div class="form-group">
        <label for="selectComoConheceu">Como conheceu o evento?</label>
        <select class="form-control" id="selectComoConheceu" required>
          <option value="" disabled selected>Selecione uma opção</option>
          <option value="redes_sociais">Redes Sociais</option>
          <option value="amigos_parentes">Amigos/Parentes</option>
          <option value="meios_comunicacao_prefeitura">Meios de Comunicação da Prefeitura</option>
        </select>
      </div>

      <!-- Botão de envio do formulário -->
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

  <!-- Scripts necessários (jQuery, Popper.js, Bootstrap JS, Axios, script personalizado) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
