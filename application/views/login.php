<form method="post" id="loginForm"></form>
<div class="row" style="margin-top: 50px;">   
  <div class="col s12 m6 offset-l3 l6">
    <div class="card medium grey darken-3">
      <div class="card-content white-text">
          <div class="row">
            <div class="col s12 l12 center-align">
              <img src="assets/images/logo.png" style="height: 90px;">
            </div>
          </div>      
          <div class="row">
            <div class="input-field col s6">
                <input id="login" name="login" type="text" class="validate" form="loginForm">
                <label class="active" for="login">Login</label>
            </div>
            <div class="input-field col s6">
                <input id="pass" name="pass" type="password" class="validate" form="loginForm">
                <label class="active" for="pass">Senha</label>
            </div>
          </div>
      </div>
      <div class="card-action">
      <button class="waves-effect waves-light btn" type="submit" form="loginForm">Entrar<i class="material-icons right">send</i></button>
      </div>
    </div>          
  </div>    
</div>