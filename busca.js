function busca(){
    var pesquisa = document.getElementById("pesquisa").value;

    if(pesquisa == "html" || pesquisa == "CSS" || pesquisa =="js" || pesquisa=="javascript" || pesquisa =="java script"){
        alert("A e-Learn possui um curso muito completo sobre html, css e javascript! Acesse a aba de cursos para saber mais");
    }
    else if(pesquisa == "photoshop"){
        alert("A e-Learn possui um curso muito completo sobre Photoshop! Acesse a aba de cursos para saber mais");
    }
    else if(pesquisa == "office" || pesquisa == "excel" || pesquisa == "word" || pesquisa == "microsoft" || pesquisa == "pacote" || pesquisa == "pacote office" || pesquisa == "powerpoint"){
        alert("A e-Learn possui um curso muito completo sobre o Pacote Office! Acesse a aba de cursos para saber mais");
    }
    else if(pesquisa == "python"){
        alert("A e-Learn possui um curso muito completo sobre Python! Acesse a aba de cursos para saber mais");
    }
    else if(pesquisa == "power bi" || pesquisa == "powerbi"){
        alert("A e-Learn possui um curso muito completo sobre Python! Acesse a aba de cursos para saber mais");
    }
    else{
        alert("A e-Learn não possui nenhum curso com esse nome, tente novamente.");
    }

}

function cadastre(){
    alert("Você ainda não está cadastrado na e-Learn, cadastre-se antes!");
}
