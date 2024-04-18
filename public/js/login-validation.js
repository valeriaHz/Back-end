document.getElementById('login-form').addEventListener('submit', function(event) {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    if (email.trim() === "" || password.trim() === "") {
        alert("Por favor, completa todos los campos.");
        event.preventDefault(); 
    }
});
