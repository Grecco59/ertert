document.getElementById('inputCPF').addEventListener('input', function(event) {
    let cpfInput = event.target;
    let cpf = cpfInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
  
    if (cpf.length > 11) {
      cpf = cpf.substring(0, 11); // Limita a 11 caracteres (considerando apenas os números)
    }
  
    cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4'); // Adiciona a pontuação
  
    cpfInput.value = cpf;
  });
  
  document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    let cpfInput = document.getElementById('inputCPF');
    let cpf = cpfInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
  
    if (!validarCPF(cpf)) {
      alert('CPF inválido. Por favor, insira um CPF válido.');
      event.preventDefault();
    }
  
    // Adicione aqui o código para processar o formulário, se necessário
  });
  
  function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g,'');
    
    if (cpf.length !== 11 ||
        cpf === '00000000000' ||
        cpf === '11111111111' ||
        cpf === '22222222222' ||
        cpf === '33333333333' ||
        cpf === '44444444444' ||
        cpf === '55555555555' ||
        cpf === '66666666666' ||
        cpf === '77777777777' ||
        cpf === '88888888888' ||
        cpf === '99999999999') {
      return false;
    }
  
    let soma = 0;
    let resto;
  
    for (let i = 1; i <= 9; i++) {
      soma += parseInt(cpf.substring(i-1, i)) * (11 - i);
    }
  
    resto = (soma * 10) % 11;
  
    if (resto === 10 || resto === 11) {
      resto = 0;
    }
  
    if (resto !== parseInt(cpf.substring(9, 10))) {
      return false;
    }
  
    soma = 0;
  
    for (let i = 1; i <= 10; i++) {
      soma += parseInt(cpf.substring(i-1, i)) * (12 - i);
    }
  
    resto = (soma * 10) % 11;
  
    if (resto === 10 || resto === 11) {
      resto = 0;
    }
  
    if (resto !== parseInt(cpf.substring(10, 11))) {
      return false;
    }
  
    return true;
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    // Carrega os estados ao carregar a página
    carregarEstados();
  
    // Adiciona evento de mudança no selectEstado
    document.getElementById('selectEstado').addEventListener('change', function() {
      const estado = this.value;
      const selectCidade = document.getElementById('selectCidade');
  
      // Resetando e desabilitando a caixa de seleção de cidades
      selectCidade.innerHTML = '<option value="" disabled selected>Selecione o Estado primeiro</option>';
      selectCidade.disabled = true;
  
      // Se um estado foi selecionado, carrega as cidades
      if (estado) {
        carregarCidades(estado);
      }
    });
  });
  
  function carregarEstados() {
    const selectEstado = document.getElementById('selectEstado');
  
    axios.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
      .then(function(response) {
        const estados = response.data;
        estados.forEach(function(estado) {
          const option = document.createElement('option');
          option.value = estado.sigla.toLowerCase();
          option.textContent = estado.nome;
          selectEstado.appendChild(option);
        });
      })
      .catch(function(error) {
        console.error('Erro ao carregar estados:', error);
      });
  }
  
  function carregarCidades(estado) {
    const selectCidade = document.getElementById('selectCidade');
  
    axios.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado}/municipios`)
      .then(function(response) {
        const cidades = response.data;
        habilitarCidades(selectCidade, cidades);
      })
      .catch(function(error) {
        console.error('Erro ao carregar cidades:', error);
      });
  }
  
  function habilitarCidades(selectCidade, cidades) {
    // Habilitando a caixa de seleção de cidades
    selectCidade.disabled = false;
  
    // Adicionando as opções de cidade
    cidades.forEach(cidade => {
      const option = document.createElement('option');
      option.value = cidade.nome.toLowerCase().replace(/\s/g, '_');
      option.textContent = cidade.nome;
      selectCidade.appendChild(option);
    });
  }
  