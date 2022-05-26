function limpar2() {
  document.getElementById("email2").style.border = "2px solid gray";
  document.getElementById("email2").setAttribute("placeholder", '');
  document.getElementById("concluir2").setAttribute("disabled", true);
}

function checarEmail2() {
    var endereco = document.getElementById('email2').value;
    var re = '[a-zA-Z0-9_\\.-]+@((hotmail)|(yahoo)|(gmail)|(outlook)|(terra)|(uol))\\.((com)|(com.br))';

    if (endereco.match(re)){
      document.getElementById("email2").style.border = "2px solid #00ff00";
      document.getElementById("email2").setAttribute("placeholder", '');
      document.getElementById("concluir2").removeAttribute("disabled");
        return false;
    } else {
        document.getElementById("email2").style.border = "2px solid crimson";
        document.getElementById("email2").setAttribute("placeholder", 'Digite um email válido');
        document.getElementById("concluir2").setAttribute("disabled", true);
        return true;
    }  
}