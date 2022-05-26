function adicionarTicket(plano, qtd, valor, dias, data, posicao, local) {
    localStorage.setItem("plano" + posicao, plano);
    localStorage.setItem("qtd" + posicao, qtd);
    localStorage.setItem("dias" + posicao, dias);
    localStorage.setItem("data" + posicao, data);
    dias = (dias * 70) * qtd;
    valor = (valor * qtd) + dias;
    localStorage.setItem("valor" + posicao, valor);
    var code = Math.floor(Math.random() * 10000);
    localStorage.setItem("code" + posicao, code);
    localStorage.setItem("local" + posicao, local)
}
 
function meusTickets() {
    var total = 0;
    var i = 0;    
    var valor = 0;
    
    for (i=1; i<=99; i++) {
       var plano = localStorage.getItem("plano" + i + "");
       
 
       if (plano != null) {
          document.getElementById("ticket").innerHTML += "<div id=ticket-info" + i + " class='object2 ticket-info col'>";
          document.getElementById("ticket-info" + i).innerHTML += "<h3><span class=ttitle>Seu Ticket</span> <span class=code>Nº: " + localStorage.getItem("code" + i) + "</span></h3><br>";
          document.getElementById("ticket-info" + i).innerHTML += localStorage.getItem("qtd" + i) + " Ticket(s) do ";
          document.getElementById("ticket-info" + i).innerHTML += localStorage.getItem("plano" + i);
          document.getElementById("ticket-info" + i).innerHTML += "<br>";
          document.getElementById("ticket-info" + i).innerHTML += localStorage.getItem("local" + i);
          document.getElementById("ticket-info" + i).innerHTML += "<br> Por ";
          document.getElementById("ticket-info" + i).innerHTML += localStorage.getItem("dias" + i) + " dias cada";
          document.getElementById("ticket-info" + i).innerHTML += "<br>";
          document.getElementById("ticket-info" + i).innerHTML += "Começando na data: ";
          document.getElementById("ticket-info" + i).innerHTML += localStorage.getItem("data" + i);
          document.getElementById("ticket-info" + i).innerHTML += "<br>";
          document.getElementById("ticket-info" + i).innerHTML += "Valor total do(s) ticket(s): ";
          document.getElementById("ticket-info" + i).innerHTML += "R$: " + localStorage.getItem("valor" + i) + ",00 <hr>";
          document.getElementById("ticket-info" + i).innerHTML += "<input type=button class='btn btn-warning' onclick='apagar(" + i + ")' value='Cancelar reserva!'>";
          
            
          valor = parseFloat(localStorage.getItem("valor" + i));
          total = (total + valor);
       }
    }
    document.getElementById("total").innerHTML += (total).toLocaleString('pt-BR');
}

function apagar(plano) {
  if (plano == 1) {
    localStorage.removeItem("plano1");
  } else if (plano == 2) {
    localStorage.removeItem("plano2");
  } else if (plano == 3) {
    localStorage.removeItem("plano3");
  } else if (plano == 4) {
    localStorage.removeItem("plano4");
  } else if (plano == 5) {
    localStorage.removeItem("plano5");
  } else if (plano == 6) {
    localStorage.removeItem("plano6");
  } else if (plano == 7) {
    localStorage.removeItem("plano7");
  } else if (plano == 8) {
    localStorage.removeItem("plano8");
  } else if (plano == 9) {
    localStorage.removeItem("plano9");
  }
  location.reload();
}

function login() {
    location.href='login.php';
}

function desativarscroll() {
  
  var check = document.getElementsByName("itemCheck");
  var check2 = document.getElementsByName("itemCheck2");
  var check3 = document.getElementsByName("itemCheck3");

    for (var i=0;i<check.length;i++){ 
        if (check[i].checked == true || check2[i].checked == true || check3[i].checked == true){ 
          document.body.style.overflow = 'auto';
          
        }  else {
          document.body.style.overflow = 'hidden';
        }
    }
}

function createCookie(nome, valor, dias) { 
    var expira; 
      
    if (dias) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (dias * 24 * 60 * 60 * 1000)); 
        expira = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expira = ""; 
    } 
      
    document.cookie = escape(nome) + "=" +  
        escape(valor) + expira + "; path=/"; 
}



function limpar() {
  document.getElementById("email").style.border = "2px solid gray";
  document.getElementById("email").setAttribute("placeholder", '');
  document.getElementById("concluir").setAttribute("disabled", true);
}

function checarEmail() {
    var endereco = document.getElementById('email').value;
    var valida  = /^[\w_\.-]+@(hotmail|yahoo|gmail|outlook|terra|uol)\.(com$|com\.br$)/;

    if (valida.test(endereco)){
        document.getElementById("email").style.border = "2px solid #00ff00";
        document.getElementById("email").setAttribute("placeholder", '');
        document.getElementById("concluir").removeAttribute("disabled");
        return false;
    } else {
        document.getElementById("email").style.border = "2px solid crimson";
        document.getElementById("email").setAttribute("placeholder", 'Digite um email válido');
        document.getElementById("concluir").setAttribute("disabled", true);
        return true;
    }  
}


//  swal({
//    title: "Atenção!",
//    text: "Clique no botão para ser redirecionado!",
//    icon: "warning",
//    buttons: true,
//    }).then(function(result) {
//       if (result) {
//    
//       } else {
//    
//       }
//    });
//<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>