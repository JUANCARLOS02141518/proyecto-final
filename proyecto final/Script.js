// Animación de fade-in para las secciones principales
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('main section');

    sections.forEach((section) => {
        section.classList.add('fade-in');
    });
});

// Ocultar el formulario de contacto al enviarlo y mostrar un mensaje de éxito
const form = document.getElementById('contact-form');
const successMessage = document.getElementById('success-message');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(form);

    // Aquí puedes hacer la petición AJAX para enviar los datos del formulario a PHP y almacenarlos en la base de datos
    // Por simplicidad, aquí solo mostramos el mensaje de éxito
    form.style.display = 'none';
    successMessage.style.display = 'block';
});
