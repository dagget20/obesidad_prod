<form id="ajax-contact" method="post" action="contact_form2.php">
  <fieldset>
    <div id="name" class="field"><i class="fa fa-user"></i><input type="text" class="form-input" name="name" placeholder="Nombre Completo" required></input></div>
    <div id="phone"  class="field"><i class="fa fa-phone"></i><input type="tel" class="form-input" name="phone" placeholder="Número de teléfono" required></input></div>
    <div id="email"  class="field"><i class="fa fa-envelope"></i><input type="email" class="form-input" name="email" placeholder="E-mail" required></input></div>
    <div id="message"  class="field"><i class="fa fa-align-left"></i><textarea rows="4" class="form-input" name="message" placeholder="Déjanos tu mensaje" required></textarea></div>
  </fieldset>
  <input class="form-submit" type="submit" value="Enviar"></input>
  <div id="form-messages"></div>
</form>
