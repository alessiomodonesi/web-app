let btn = null;
$(document).ready(function () {
    console.log("Pronto");
    btn = document.getElementById("login");
    btn.addEventListener('click', login);
});


function login() {
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost/food-api/API/user/login.php");
    req.send();
}