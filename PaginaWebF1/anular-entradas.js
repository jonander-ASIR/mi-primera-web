const logoLink = document.getElementById('logo-link');
const logoImg = document.getElementById('logo-img');

if (logoLink && logoImg) {
    logoLink.addEventListener('mouseover', () => {
        logoImg.style.transform = 'scale(1.1)';
    });
    logoLink.addEventListener('mouseout', () => {
        logoImg.style.transform = 'scale(1.0)';
    });
}
//menú desplegable
$(document).ready(function() {
    $('nav ul li ul').hide();

    $('nav > ul > li').hover(
        function() {
            $(this).find('ul:first').stop(true, true).slideDown(200);
        },
        function() {
            $(this).find('ul:first').stop(true, true).slideUp(200);
        }
    );
});

//Validación SIMPLE para borrar (DNI + contraseña)
$(document).ready(function() {

    $('#form-entradas').on('submit', function(e) {

        const dni = $('#dni').val().trim();
        const pass = $('#contrasena').val().trim();

        if (dni === '' || pass === '') {
            e.preventDefault();
            alert('Debes introducir DNI y contraseña.');
            return false;
        }

        // NO preventDefault aquí
        // deja que el formulario se envíe
    });

});