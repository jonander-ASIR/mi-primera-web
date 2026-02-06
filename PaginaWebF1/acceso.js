const logoLink = document.getElementById('logo-link');
const logoImg = document.getElementById('logo-img');

    if (logoLink && logoImg) {
        // Agrandar la imagen al pasar el raton
        logoLink.addEventListener('mouseover', () => {
            logoImg.style.transform = 'scale(1.1)'; // Aumenta 10%
        });

        // Volver al tamaño original al quitar el raton
        logoLink.addEventListener('mouseout', () => {
            logoImg.style.transform = 'scale(1.0)';
    });
}

$(document).ready(function() {
    // Oculta todos los submenús al cargar la página (si no está en CSS)
    $('nav ul li ul').hide(); 

    // Al pasar el ratón sobre un elemento de menú principal (li)
    $('nav > ul > li').hover(
        function() {
            // Despliega el primer submenú (ul) encontrado dentro del li
            $(this).find('ul:first').stop(true, true).slideDown(200);
        },
        function() {
            // Pliega el submenú al quitar el ratón
            $(this).find('ul:first').stop(true, true).slideUp(200);
        }
    );
});




$(document).ready(function() {
    const formAcceso = $('#form-acceso');
    const inputUsuario = $('#usuario');
    const inputPassword = $('#password');
    const togglePassword = $('#toggle-password');

    // 1. Funcionalidad de Mostrar/Ocultar Contraseña (Toggle)
    togglePassword.on('click', function() {
        // Obtiene el tipo actual del campo (text o password)
        const type = inputPassword.attr('type') === 'password' ? 'text' : 'password';
        
        // Cambia el tipo del campo
        inputPassword.attr('type', type);
        
        // Opcional: Cambia el icono para reflejar el estado (👁️ visible, 🙈 oculto)
        if (type === 'text') {
            $(this).text('🙈').attr('title', 'Ocultar contraseña');
        } else {
            $(this).text('👁️').attr('title', 'Mostrar contraseña');
        }
    });

    // 2. Validación ligera en cliente: sólo evitamos envío con AMBOS campos vacíos.
    // El resto de la verificación la hace `accessoDatos.php` en servidor.
    formAcceso.on('submit', function(event) {
        const usuario = inputUsuario.val().trim();
        const password = inputPassword.val().trim();

        if (usuario === '' && password === '') {
            alert('ERROR: El formulario no puede ser enviado con ambos campos (Usuario y Contraseña) vacíos.');
            inputUsuario.focus();
            event.preventDefault();
            return;
        }
        // Si pasa la comprobación ligera, dejamos que el formulario se envíe al servidor.
    });
});