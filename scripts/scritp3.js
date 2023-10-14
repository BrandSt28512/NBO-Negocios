const mostrarContraseñaCheckbox = document.getElementById('mostrar_contraseña');
const contraseñaInput = document.getElementById('contraseña');

mostrarContraseñaCheckbox.addEventListener('change', function () {
  contraseñaInput.type = this.checked ? 'text' : 'password';
});

const nombreInput = document.getElementById('nombre-usuario-input');
const actualizarNombreButton = document.getElementById('actualizar-nombre');
const nombreElement = document.querySelector('.nombre h3');

actualizarNombreButton.addEventListener('click', function () {
  const nuevoNombre = nombreInput.value;
  if (nuevoNombre) {
    nombreElement.textContent = nuevoNombre;
  } else {
    alert("Por favor, ingrese un nombre válido.");
  }
});