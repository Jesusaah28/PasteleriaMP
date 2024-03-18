// login.js
function mostrarMensajeError() {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Usuario o contraseña incorrectos',
        confirmButtonText: 'OK'
    }).then(() => {
        window.location.href = 'login.html';
    });
}
