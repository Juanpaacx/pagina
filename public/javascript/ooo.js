const loginForm = document.querySelector(".login_form");

const loginFormm = document.querySelector(".login_form");


const loginn = loginForm.querySelectorAll(".social_login .facebook");
const close = loginForm.querySelector(".close");
const closes = loginForm.querySelector(".closes");

function openForm(){
    loginForm.classList.remove("is_closed");
    loginFormm.classList.remove("is_closed");
}

function cerrar() {
    div = document.getElementById('flotante');
    div.style.display = 'none';
}

function closeForm(){
    loginForm.classList.add("is_closed");
    loginFormm.classList.add("is_closed");
}

login.forEach(loginItem => loginItem.addEventListener("click", openForm));
loginn.forEach(loginItem => loginItem.addEventListener("click", openForm));
close.addEventListener("click", closeForm);