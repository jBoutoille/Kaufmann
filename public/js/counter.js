
var n1 =  document.getElementById("numberOne"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
var n2 =  document.getElementById("numberTwo"); 

var numberOne = n1.textContent; // Récuprer le contenu de l'ID
var numberTwo = n2.textContent;

var final1 = parseInt(numberOne,10); //convertir un text en entier
var final2 = parseInt(numberTwo,10);

n1.innerHTML = 0;
n2.innerHTML = 0;




var duree = 2; // Durée en seconde pendant laquel le compteur ira de 0 à 15
 
var animation = false;



window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 1150 || document.documentElement.scrollTop > 1150) {
		var cpt1 = 0; // Initialisation du compteur
    	var delta1 = (duree * 2000) / final1;
		var cpt2 = 0;
		var delta2 = (duree * 2000) / final2;
    	async function countdown1() {
  			n1.innerHTML = ++cpt1;
  			if( cpt1 < final1) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     			setTimeout(countdown1, delta1);
  			}
		}
		async function countdown2() {
			
			
  			n2.innerHTML = ++cpt2;
  			if( cpt2 < final2 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     			setTimeout(countdown2, delta2);
  			}
		}

		if(animation == false){
			setTimeout(countdown1, delta1);
			setTimeout(countdown2, delta2);
			animation = true;
		}

 	}
}

