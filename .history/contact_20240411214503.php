<?php

require_once('header.php');


?>
   
   <?php
// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	// Validate email adress
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// Make sure the form fields are not empty
	if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$responses[] = 'Please complete all fields!';
	} 
	// If there are no errors
	if (!$responses) {
		// Where to send the mail? It should be your email address
		$to      = 'contact@example.com';
		// Send mail from which email address?
		$from = 'noreply@example.com';
		// Mail subject
		$subject = $_POST['subject'];
		// Mail message
		$message = $_POST['msg'];
		// Mail headers
		$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		// Try to send the mail
		if (mail($to, $subject, $message, $headers)) {
			// Success
			$responses[] = 'Message sent!';		
		} else {
			// Fail
			$responses[] = 'Message could not be sent! Please check your mail server settings!';
		}
	}
}
?>




<div class="parallax">

<main class="main-content h-100 top-40">







<div class="container-fluid col-4 justify-content-center h-50 position-relative mx-auto top-40">

<form class="contact" method="post" action="mailing/reception_contact.php">
<h1 class="mt-8">
  <i class="neon-red">Formulaire</i>
  <i class="neon-blue">Contact</i>
</h1>
			<div class="fields-register form ">
				<label for="email">
					<i class="fa fa-envelope"></i>
					<input id="email" type="email" name="email" placeholder="Votre Email" autocomplete="$_COOKIE" required>
				</label>
				<label for="name">
					<i class="fas fa-user"></i>
					<input id="name" type="text" name="name" placeholder="Votre Nom" autocomplete="$_COOKIE" required>
				<label>
				<input id="subject" type="text" name="subject" placeholder="Sujet" required>
				<textarea name="msg" placeholder="Message" required></textarea>
			</div>
      <div class="reg m-2 d-flex justify-content-center ">
              <h5 >Vous n'avez pas de compte :</h5>
         <h4><a href="register.html"> Inscrivez-vous </a></h4>
          </div>

			<input type="submit">

      <?php if ($responses): ?>
<p class="responses"><?php echo implode('<br>', $responses); ?></p>
<?php endif; ?>
		
    <div class="reg d-block justify-content-center align-items-middle my-auto">
                Par la création d'un compte vous agrée à:<a
                  href="/gp/help/customer/display.html/ref=ap_register_notification_condition_of_use?ie=UTF8&amp;nodeId=643006">Conditions
                  of Use</a> and <a
                  href="/gp/help/customer/display.html/ref=ap_register_notification_privacy_notice?ie=UTF8&amp;nodeId=643000">Privacy
                  Notice</a>.
              </div>
              </form>
              </div>
     
    </main>

     
 <!--<form method="POST"  name="inscription" id="validationCustom" class="inscription needs-validation " novalidate>
  <div class="input-group has-validation">
  <div class="valid-feedback">Semble correcte!</div>
       <span>   <label for="validationCustom01" class="form-label">Prénom</label></span>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Jean" required>
      </div>       
          
      <div class="input-group has-validation">
          <div class="valid-feedback">Semble correcte!</div>
          <span> <label for="validationCustom" class="form-label">Nom</label></span>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Durand" required>
      </div>  
   
     
           <div class="input-group has-validation">

          <span><label for="validationCustomUsername" class="form-label">Username</label></span>
       
            <input type="text" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend"
              required>
            <div class="valid-feedback">Semble correcte!</div>
            <div class="invalid-feedback">Choisissez un nom d'utilisateur entre 8 et 12 caractères.</div>
  </div>  
         
            <div class="input-group has-validation">

          <div class="valid-feedback">Semble correcte!</div>
          <label for="validationCustom" class="form-label">Ville</label>
          <input type="text" class="form-control" id="validationCustom01" required>
          <div class="invalid-feedback">Chosissez un nom de ville correcte.</div>
      </div>  
      
      <div class="input-group has-validation">

        <div class="valid-feedback">Semble correcte!</div>
          <label for="validationCustom" class="form-label">Email</label>

          <input type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelpId"
            placeholder="abc@mail.com" required>
     
        <div class="invalid-feedback">L'adresse doit contenir un "@". </div>
        
        </div>  
     
    

          <label for="validationCustom" class="form-label">Sujets</label>
          <select class="form-select" id="validationCustom01" required>
            <option selected disabled value="">Choisir un sujet...</option> 
            <option value="produit">Question sur un produit</option>
            <option value="reclamation">Réclamation</option>
            <option value="autres">Autres</option>        
  
        </select>     
        <div class="invalid-feedback">* Choisir un sujet.</div>

 
            <div class="input-group has-validation">

          <label for="validationCustom" class="form-label"></label>
          <label class="form-label">Votre question:</label><br>
          <textarea class="form-input  " name="question" id="question" maxlength="50" placeholder="* Maximum 50 caractères"
            required></textarea>

   <div class="invalid-feedback">* Remplir le champ question.</div>
   </div>   

      <div class="input-group has-validation">

        <div class="form-check ">     
          <input class="form-check-input" type="checkbox" value="accepter" id="traitement" name="traitement" required>
       

          <label class=" row form-check-label" for="traitement">&nbsp&nbsp  * J'accepte le traitement informatique de ce
            formulaire.</label>
          <div class="invalid-feedback">Vous devez valider!.</div>
        </div>
      </div>   

        <div>
          <button class="btn btn-primary" type="submit" value="Envoyer">Envoyer</button>
          <button class="btn btn-danger" type="reset" value="Annuler">Annuler</button>
        </div>

     
      </form>


       <div class="d-flex justify-content-center a-iconlign-items-middle ">
                By creating an account, you agree to <a
                  href="/gp/help/customer/display.html/ref=ap_register_notification_condition_of_use?ie=UTF8&amp;nodeId=643006">Conditions
                  of Use</a> and <a
                  href="/gp/help/customer/display.html/ref=ap_register_notification_privacy_notice?ie=UTF8&amp;nodeId=643000">Privacy
                  Notice</a>.
              </div>
           
         

      </fieldset>



 <div class="a-box a-spacing-extra-large">
    <div class="a-box-inner">
      <form id="a-page" class="ap_register_form" name="register" method="post" action="MailHandler-sub.php" novalidate>


        <h1 class="a-spacing-small">
          Create account
        </h1>




        <div class="a-row a-spacing-base">





          <label for="ap_customer_name" class="a-form-label">
            Your name
          </label>


          <input type="text" maxlength="50" id="ap_customer_name" autocomplete="name" placeholder="First and last name"
            name="customerName" tabindex="1"
            class="a-input-text a-span12 auth-autofocus auth-required-field a-form-error">





          <div id="auth-customerName-missing-alert"
            class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert"
            style="display: block;">
            <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
              <div class="a-alert-content">
                Enter your name
              </div>
            </div>
          </div>



          <div id="auth-inline-customerName-success-checklist" class="a-section auth-inline-success-checklist">
            <div id="auth-customerName-success-check-item-1"
              class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
              aria-live="polite" aria-atomic="true">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Use at least 1 character
                </div>
              </div>
            </div>


          </div>


        </div>



        <label for="ap_email" class="a-form-label">
          Mobile number or email
        </label>


        <input type="email" maxlength="64" id="ap_email" autocomplete="email" name="email" tabindex="3"
          class="a-input-text a-span12 a-spacing-micro auth-required-field auth-require-claim-validation"
          data-validation-id="email">






        <div id="auth-email-missing-alert"
          class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert">
          <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
            <div class="a-alert-content">
              Enter your email or mobile phone number
            </div>
          </div>
        </div>





        <div id="auth-email-invalid-claim-alert"
          class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert">
          <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
            <div class="a-alert-content">
              Enter a valid email address or phone number
            </div>
          </div>
        </div>





        <div id="auth-inline-email-success-checklist" class="a-section auth-inline-success-checklist">
          <div id="auth-email-success-check-item-1"
            class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
            aria-live="polite" aria-atomic="true">
            <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
              <div class="a-alert-content">
                Use half-width characters
              </div>
            </div>
          </div>


          <div id="auth-email-success-check-item-2"
            class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
            aria-live="polite" aria-atomic="true">
            <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
              <div class="a-alert-content">
                Use a valid e-mail or mobile number
              </div>
            </div>
          </div>

        </div>



        <div class="auth-require-fields-match-group">


          <div class="a-row a-spacing-base">


            <label for="ap_password" class="a-form-label">
              Password
            </label>


            <input type="password" maxlength="1024" id="ap_password" autocomplete="off"
              placeholder="At least 6 characters" name="password" tabindex="5"
              class="a-input-text a-span12 auth-required-field auth-require-fields-match auth-require-password-validation">






            <div class="a-box a-alert-inline a-alert-inline-info auth-inlined-information-message a-spacing-top-mini"
              aria-live="polite" aria-atomic="true">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Passwords must be at least 6 characters.
                </div>
              </div>
            </div>




            <div id="auth-password-missing-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Enter at least 6 half-width characters
                </div>
              </div>
            </div>





            <div id="auth-password-invalid-password-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Enter at least 6 half-width characters
                </div>
              </div>
            </div>




            <div id="auth-inline-password-success-checklist" class="a-section auth-inline-success-checklist">
              <div id="auth-password-success-check-item-1"
                class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
                aria-live="polite" aria-atomic="true">
                <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                  <div class="a-alert-content">
                    Use half-width characters
                  </div>
                </div>
              </div>


              <div id="auth-password-success-check-item-2"
                class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
                aria-live="polite" aria-atomic="true">
                <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                  <div class="a-alert-content">
                    Use at least 6 characters
                  </div>
                </div>
              </div>

            </div>


       




          <div class="a-row a-spacing-base">



            <label for="ap_password_check" class="a-form-label">
              Re-enter password
            </label>


            <input type="password" maxlength="1024" id="ap_password_check" autocomplete="off" name="passwordCheck"
              tabindex="6" class="a-input-text a-span12 auth-required-field auth-require-fields-match">




            <div id="auth-passwordCheck-missing-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Type your password again
                </div>
              </div>
            </div>


            <div id="auth-password-mismatch-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Passwords must match
                </div>
              </div>
            </div>





            <div id="mobileClaimDisclosureMessage"
              class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden">
              By enrolling a mobile phone number, you consent to receive automated
              security notifications via text message from Amazon. Remove your number
              in
              Login &amp; Security to cancel. For more information reply HELP. Message
              and
              data rates may apply. Message frequency varies.
            </div>
            <div id="mobileClaimDisclosureMessageRelaxed"
              class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden">
              To verify your number, we will send you a text message with a temporary
              code. Message and data rates may apply.
            </div>



            <div class="a-section a-spacing-extra-large">
              <span id="auth-continue"
                class="a-button a-button-span12 a-button-primary auth-requires-verify-modal"><span
                  class="a-button-inner"><input id="continue" tabindex="8" class="a-button-input" type="submit"
                    aria-labelledby="auth-continue-announce"><span id="auth-continue-announce" class="a-button-text"
                    aria-hidden="true">
                    <span class="default-text">Continue</span>
                    <span class="phone-text aok-hidden">Verify mobile
                      number</span>
                    <span class="email-text aok-hidden">Verify email</span>
                  </span></span></span>
            </div>-->


        
<?php

require_once('footer.php');
            
?>

