function openTab(tabName) {
	// cache tous les éléments avec la classe "tabcontent"
	var tabcontent = document.getElementsByClassName("tabcontent");
	for (var i = 0; i < tabcontent.length; i++) {
	  	tabcontent[i].style.display = "none";
	}
  
	// supprime la classe "active" de tous les boutons
	var tablinks = document.getElementsByClassName("tablink");
	for (var i = 0; i < tablinks.length; i++) {
	  	tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
  
	// affiche l'onglet correspondant et ajoute la classe "active" au bouton
	document.getElementById(tabName).style.display = "block";
	event.currentTarget.className += " active";
}

	// active le premier onglet par défaut
document.getElementById("tab1").style.display = "block";
document.getElementById("tab1").classList.add("active");
  