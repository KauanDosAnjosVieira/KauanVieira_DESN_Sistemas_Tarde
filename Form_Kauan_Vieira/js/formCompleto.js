function mascaraCPF(input) {
    input.value = input.value
    .replace(/\D/g, '')
    .replace(/(\d{3})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    }
    
    function mascaraRG(input) {
    input.value = input.value
    .replace(/\D/g, '')
    .replace(/(\d{2})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d{1})$/, '$1-$2');
    }
    
    function mascaraCEP(input) {
    input.value = input.value
    .replace(/\D/g, '')
    .replace(/^(\d{5})(\d{1,3})/, '$1-$2');
    }

    function mascaraEmail(input) {
        input.value = input.value
            .replace(/[^a-zA-Z0-9@._-]/g, ''); 
    }
    
    function apenasNumeros(input) {
    input.value = input.value.replace(/\D/g, '');
    }
    
    // Permitindo  somente  as letras
    function apenasLetras(input) {
    input.value = input.value.replace(/[^a-zA-Z áÁéÉíÍóÓúÚçÇ]/g, '');
    }
    
    
    window.onload = function () {
    const form = document.forms[0];
    
    ["nome", "sobrenome", "bairro", "cidade", "rua"].forEach(nome => {
    form[nome].addEventListener("input", () => apenasLetras(form[nome]));
    });
    
    form["cpf"].addEventListener("input", () => mascaraCPF(form["cpf"]));
    form["rg"].addEventListener("input", () => mascaraRG(form["rg"]));
    form["cep"].addEventListener("input", () => mascaraCEP(form["cep"]));
    form["numero"].addEventListener("input", () => apenasNumeros(form["numero"]));
    
    form.addEventListener("submit", validarFormulario);
    };