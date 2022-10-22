function show() {
    var element = document.getElementById("showcase");
    var poutre = document.getElementById("blur");
    var neonname = document.getElementById("myname");
    var start = document.getElementById("starting");
    var pac = document.getElementById("pac");

    element.classList.toggle("active");
    poutre.classList.toggle("active");
    neonname.classList.toggle("active");

    start.classList.remove("phase2");
    pac.classList.remove("phase2")

}

function start() {
    var start = document.getElementById("starting");
    var pac = document.getElementById("pac")

    start.classList.add("phase2")
    pac.classList.add("phase2")
}