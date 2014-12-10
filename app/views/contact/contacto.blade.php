<!-- Contact Section -->
<section id="contact">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 text-center">
     <h2>Contacto</h2>
     <hr class="star-primary">
   </div>
 </div>
 <div class="row">
  <div class="col-lg-8 col-lg-offset-2">
   <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
   <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
   <form action="{{URL::route('contact-post') }}" method="post" class="contact">
    <div class="row control-group">
     <div class="form-group col-xs-12 floating-label-form-group controls">
      <label>Nombre</label>
      <input type="text" class="form-control" placeholder="Nombre" name="name" required data-validation-required-message="Please enter your name.">
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="row control-group">
   <div class="form-group col-xs-12 floating-label-form-group controls">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Email" name="email" required data-validation-required-message="Please enter your email address.">
    <p class="help-block text-danger"></p>
  </div>
</div>
<div class="row control-group">
 <div class="form-group col-xs-12 floating-label-form-group controls">
  <label>Numero telefónico </label>
  <input type="tel" class="form-control" placeholder="Numero telefónico"  name="phone" required data-validation-required-message="Please enter your phone number.">
  <p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
 <div class="form-group col-xs-12 floating-label-form-group controls">
  <label>Mensaje</label>
  <textarea rows="5" class="form-control" placeholder="Mensaje"  name="message" required data-validation-required-message="Please enter a message."></textarea>
  <p class="help-block text-danger"></p>
</div>
</div>
<br>
<div id="success"></div>
<div class="row">
 <div class="form-group col-xs-12">
   <input type="submit" value="Enviar" class="btn btn-success">
    {{ Form::token() }}
</div>
</div>
</form>
</div>
</div>
</div>
</section>