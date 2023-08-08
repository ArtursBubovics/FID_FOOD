<?php
include('header.php');
?>

<body>
  <div class="hero">
    <div class="registrations-container">
      <section class="login_sign-up">
        <div class="login">
          <div class="login_title">
            <div class="title_name">
              <h2>PIESLĒGTIES</h2>
            </div>
          </div>
          <div>
            <form class="login-sign_up_content">
              <input type="email" name="signin_gmail" placeholder="E-pasts" class="auth-input padding_left">
              <input type="password" name="signin_password" placeholder="Parole" class="js-password-input auth-input padding_left">
              <p class="msg-login none">Проверьте правильность полей</p>
              <div class="login-sign_up_button">
                <button type="submit" class="btn login-button">PIESLĒGTIES</button>
              </div>
            </form>
          </div>

        </div>
        <div class="sign-up">
          <div class="sign-up_title">
            <div class="title_name">
              <h2>REĢISTRĒTIES</h2>
            </div>
          </div>
          <div>
            <form class="login-sign_up_content">
              <input type="fname" name="login" placeholder="Vārds" class="auth-input padding_left">
              <input type="email" name="gmail" placeholder="E-pasts" class="auth-input padding_left">
              <input type="password" name="password" placeholder="Parole" class="js-password-input auth-input padding_left">
              <input type="password" name="password_confirmation" placeholder="Apstipriniet paroli" class="js-password-input auth-input padding_left">
              <p class="msg none">Проверьте правильность полей</p>
              <div class="login-sign_up_button">
                <button type="submit" class="btn registration-button">REĢISTRĒTIES</button>
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </div>

  <script src="../../../js1/login-sign_up/sign_up-check.js"></script>
  <script src="../../../js1/login-sign_up/login-check.js"></script>

</body>