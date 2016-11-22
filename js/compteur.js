function nb_clic () {	
	document.getElementById('like').style.display='none' ;
	document.getElementById('compt').style.display= 'block' ;
}



window.onload = function(){
	var bouton_compteur = document.getElementById('like');
	var compteur_clique = parseInt(document.getElementById('compteur_clique').textContent); 
	
	
	bouton_compteur.onclick = function(){
		compteur_clique += 1;
		document.getElementById('compteur_clique').textContent = compteur_clique;
		var temps = document.getElementById('timer').value
		setTimeout (nb_clic, temps*1000); 
		
		
	}
}





document.getElementById('compt').onclick = function () {
	location.reload();
}