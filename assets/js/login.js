var MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0px"; /* "0" significa q vai ser escondida */ 

function menucelular(){
    if(MenuItens.style.maxHeight == "0px"){
    MenuItens.style.maxHeight = "200px";
    }else{ 
        MenuItens.style.maxHeight = "0px";
    }
}

var EntrarPainel = document.getElementById("EntrarPainel");
var CadastroSite = document.getElementById("CadastroSite");
var indicador = document.getElementById("indicador");

function Cadastro()
{
    CadastroSite.style.transform = "translateX(0px)";
    EntrarPainel.style.transform = "translateX(0px)";
    indicador.style.transform = "translateX(100px)";
} 

function Entrar()
{
    CadastroSite.style.transform = "translateX(300px)";
    EntrarPainel.style.transform = "translateX(300px)";
    indicador.style.transform = "translateX(0px)";
} 