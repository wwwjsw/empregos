<!--
	COMEÇO DO FOOTER
-->
<footer class="page-footer blue-grey darken-1">
	<div class="container">
		<div class="row">
			<div class="col l12 s12">
                <img style="height: 50px;" class="responsive-img" src="<?=base_url('assets/images/logo.png')?>" alt="">
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2017 CGN - Central Gazeta de Noticias.
			<a class="grey-text text-lighten-4 right" href="#!">Termos de Uso.</a>
		</div>
	</div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?=base_url('materialize/js/materialize.min.js')?>"></script>
<script>
	$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
	//modal de login
	$('.modal').modal({
		ready: function(modal, trigger) {
        	if (trigger[0].id === 'vaga') 		{
				document.getElementById('oferecido').innerText = 'Vaga Oferecida';
				document.getElementById('beneficios').innerText = 'Benefícios Oferecidos';
				document.getElementById('tipo').value = 'vaga';
        	}
        	if (trigger[0].id === 'servico') 	{
				document.getElementById('oferecido').innerText = 'Serviço Oferecido';
				document.getElementById('beneficios').innerText = 'Benefícios Necessários';
				document.getElementById('tipo').value = 'servico';
        	}
      	}
	});
	//menu mobile
	$(".button-collapse").sideNav();
	//inicializa o campo select para as cores do card
	$('select').material_select();
});
</script>
<?php if(validation_errors()){ ?>
	<script>
		//toasts com aviso
		Materialize.toast('<?=form_error('fb_id')?>', 4000);
		Materialize.toast('<?=form_error('fb_name')?>', 5000);
		Materialize.toast('<?=form_error('tipo')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_clt')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_diaria')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_odonto')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_vida')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_alimentacao')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_saude')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_comissao')?>', 5000);
		Materialize.toast('<?=form_error('beneficios_vt')?>', 5000);
		Materialize.toast('<?=form_error('numero')?>', 5000);
		Materialize.toast('<?=form_error('cor')?>', 5000);
		Materialize.toast('<?=form_error('cargo')?>', 5000);
	</script>
<?php } ?>
</body>
</html>
<!--
	FIM DO FOOTER
-->