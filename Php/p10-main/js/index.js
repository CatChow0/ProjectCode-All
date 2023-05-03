let profile_logout = document.querySelector(".profile-logout");
let logout_menu = document.querySelector(".logout-menu");
let close_menu = document.querySelector(".close-menu");
logout_menu.onclick = function () {
    profile_logout.classList.toggle("on");
};
close_menu.onclick = function () {
    profile_logout.classList.toggle("on");
};
