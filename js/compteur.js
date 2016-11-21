

window.onload = function(){
	var bouton_compteur = document.getElementById('like');
	var compteur_clique = parseInt(document.getElementById('compteur_clique').textContent); 
	
	
	bouton_compteur.onclick = function(){
		compteur_clique += 1;
		document.getElementById('compteur_clique').textContent = compteur_clique; 
		
	}
}

function nb_clic () {
	alert ('Vous avez cliqué : ' + document.getElementById('compteur_clique').textContent + ' fois en 5 secondes');

	document.getElementById('like').style.display='none'
	document.getElementById('compteur_clique').style.display='none'
	document.getElementById('compt').innerHTML='Recommencer'
}


setTimeout (nb_clic, 5000);

document.getElementById('compt').onclick = function () {
	location.reload();
}