<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CGN Empregos</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?=base_url('materialize/css/materialize.min.css')?>"  media="screen,projection"/>
	<!--Import home page Css-->
	<link rel="stylesheet" href="<?=base_url('assets/css/home.css')?>"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	
</head>
<body>
<!--
	FACEBOOK SDK - IMPORTAR DADOS
-->
<script>
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      testAPI();
<?php if($this->input->get('share')){ ?>
    //shareLINK('<?=base_url('anuncio/'.$this->input->get('share'))?>');
    shareLINK('https://wwwjsw.github.io/empregos/facebook_share.html');
<?php }?>
    } else {
      console.log('Por favor logue no applicativo.');
      document.getElementById('anunciar').classList.add('hide');
      document.getElementById('modal-foo').classList.add('hide');
      document.getElementById('LoginModal').style.height = '160px';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '2379364772289597',
    cookie     : true,   
    xfbml      : true,  
    version    : 'v2.9' 
  });


  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  function testAPI() {
    console.log('Bem vindo... buscando informação... ');
    FB.api('/me?fields=id,name,email', function(response) {
      console.log('Successful login for: ' + response.name);
      console.log(response);
      //form #anunciar remove classe para ocultar
      document.getElementById('anunciar').classList.remove('hide');
      //.modal-footer & #modal-foo remove classe para ocultar
      document.getElementById('modal-foo').classList.remove('hide');
      // #LoginModal volta para o valor padrão
      document.getElementById('LoginModal').style.height = '';
      // #fb_id & #fb_name insert values
      document.getElementById('fb_id').value = response.id;
      document.getElementById('fb_name').value = response.name;



    });
  }
function shareLINK(link){
	FB.ui({
    	method: 'share',
    	display: 'iframe',
    	href: link,
  	}, function(response){});
}

</script>
<!--
	FACEBOOK SDK - IMPORTAR DADOS
-->