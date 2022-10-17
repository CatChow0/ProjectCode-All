function light() {
	var element = document.body;
	element.classList.add("dark-mode")

	console.log("yes")
}

function dark() {
	var element = document.body;
	element.classList.remove("dark-mode")

	console.log("no")
}

let champ = document.getElementById("app-champ");
let btn = document.getElementById("app-button");
let listobjet = document.getElementById("app-listItems")

btn.addEventListener("click", ()=> {

	let text = champ.value;
})