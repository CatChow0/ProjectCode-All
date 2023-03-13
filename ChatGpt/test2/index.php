<!DOCTYPE html>
<html>
	<head>
		<title>Mon site web avec des onglets</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="tab">
			<button class="tablink active" id="tab1" onclick="openTab('tab1')">Onglet 1</button>
			<button class="tablink" id="tab2" onclick="openTab('tab2')">Onglet 2</button>
			<button class="tablink" id="tab3" onclick="openTab('tab3')">Onglet 3</button>
		</div>
		<div id="tab1" class="tabcontent">
			<img src="pikachu.gif" alt="Pikachu" class="animate">
			<div class="description">
				<h2>Pikachu</h2>
				<p>Le Pokémon souris. Pikachu envoie des décharges électriques puissantes pour se défendre. C'est l'un des Pokémon les plus populaires et emblématiques de la série.</p>
			</div>
		</div>
		<div id="tab2" class="tabcontent">
			<h2>Onglet 2</h2>
			<p>Contenu de l'onglet 2.</p>
		</div>
		<div id="tab3" class="tabcontent">
			<h2>Onglet 3</h2>
			<p>Contenu de l'onglet 3.</p>
		</div>
		<script src="script.js"></script>
	</body>
</html>
