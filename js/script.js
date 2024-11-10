
let body = document.getElementById("body");
let div = document.getElementById("div1"); 

let cont = 0;

function mostraDiv(){
   
    div.style.display = "block";
}

function nascondiDiv(){
   
    div.style.display = "none";
}

function aggiungiPersona(){

    let biglietti = document.getElementById("biglietti");
    let valAttuale = parseInt(biglietti.value);

   if (valAttuale < 4){
    biglietti.value = valAttuale + 1;

       let nuovoInput = document.createElement("input");
        nuovoInput.type = "text";
        nuovoInput.name = "cfAggiuntivo"; // Nome per il nuovo input
        nuovoInput.placeholder = "Inserisci Codice Fiscale";
        nuovoInput.style.color = "white";
        nuovoInput.style.backgroundColor = "rgb(94, 94, 94)";

        div.appendChild(nuovoInput);
    }

   }





function rimuoviPersona(){
    let numbiglietti = document.getElementById("biglietti");
    let valAttuale = parseInt(numbiglietti.value);
    
    
    
    if (valAttuale > 1 ){
    numbiglietti.value = valAttuale - 1;

    div.removeChild(div.lastChild);


    }

 }