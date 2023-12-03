<div class="container p-2 my-3 border text-center mt-auto" style="width:450px">
  <img src="IMG/Ceti.webp" width="100" height="100" class="rounded-circle mt-3">
  <form action="/action_page.php" class="needs-validation mt-4" novalidate>
  <div class="form-group contenido-texto">
      <label for="uname">Usuario:</label>
      <input type="text" class="form-control" id="uname" placeholder="" name="uname" required>
      <div class="valid-feedback">Validado.</div>
      <div class="invalid-feedback">Por favor, escriba un usuario valido.</div>
    </div>
    <div class="form-group contenido-texto">
      <label for="correo">Email:</label>
      <input type="email" class="form-control" id="correo" placeholder="" name="correo" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,3}$">
      <div class="valid-feedback">Validado.</div>
      <div class="invalid-feedback">Por favor, escriba un correo valido.</div>
    </div>
    <div class="form-group contenido-texto">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="" name="pswd" required>
      <div class="valid-feedback">Validado.</div>
      <div class="invalid-feedback">Por favor, escriba una contraseña valida.</div>
    </div>
    <div class="form-group form-check contenido-texto">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required>Acepto los <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#Terminos">Términos y condiciones</button>
        <div class="valid-feedback">Validado.</div>
        <div class="invalid-feedback">Marque esta casilla para continuar.</div>
      </label>
    </div>
    <div class="form-group contenido-texto align-items-center">
      <p>¿Ya tienes una cuenta?
      <a class="nav-link" href="login.php?action=login">Inicia sesión</a>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="modal" id="Terminos">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">Términos y condiciones:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <p>Al utilizar esta página web para la elección de carreras, aceptas los siguientes términos y condiciones:</p>
            <ol>
               <li>La información proporcionada en la plataforma es solo para fines informativos y no garantiza la exactitud o integridad.</li>
               <li>El acceso y uso de la plataforma son gratuitos, pero la universidad se reserva el derecho de realizar cambios en cualquier momento.</li>
               <li>La universidad no se hace responsable de las decisiones tomadas con base en la información proporcionada en la plataforma.</li>
               <li>El usuario acepta respetar la propiedad intelectual de la universidad en relación con el contenido proporcionado.</li>
               <li>La universidad puede recopilar datos para mejorar la experiencia del usuario, conforme a su política de privacidad.</li>
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
        </div>
    </div>
</div>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>