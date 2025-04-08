//EXECUTA

//DEFINE O OBJETO E CHAMA A FUNCAO
function mascara(o, f) {
    objeto=o
    funcao=f
    setTimeout("executaMascara()",1)
}

function executaMascara() {
    objeto.value = funcao(objeto.value)
}

//MASCARA DO TELEFONE

function telefone(variavel){
    v = objeto.value.replace(/\D/g,""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca a primeira parte do telefone entre parênteses
    v = v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca a segunda parte do telefone com o traço
    return variavel
}

//MASCARA DO RG E CPF
function RGeCP(variavel){
    variavel=variavel.replace (/\D/g,""); //Remove tudo o que não é numero

    //Coloca um ponto entre o Terceiro e o quarto dígito
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2");


    //Coloca um ponto entre o Sexto e o SETIMO dígito
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2");


    //COLOCA O HIFEM após o SETIMO digito e permite apenas 2 digitos apos o hifem
    variavel=variavel.replace (/(\d{3})(\d{1,2})$/,"$1-$2");



}


//MASCARA DO CEP

function cep(variavel){
    variavel=variavel.replace(/\D/g,""); //Remove tudo o que não é numero



    variavel=variavel.replace(/(\d{2})(\d)/,"$1.$2"); //Coloca o traço entre o quinto e o sexto dígito

    variavel=variavel.replace(/(\d{3})(\d{1,3})$/,"$1-$2");
    return variavel
}

//MASCARA DATA

function data(variavel){
    variavel=variavel.replace(/\D/g,""); //Remove tudo o que não é numero

    //Coloca uma barra entre o segundo e o terceiro dígito
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2");

    //Coloca uma barra entre o quarto e o quinto dígito
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2");

    return variavel
}
