<!--
MENU DA PAGINA
-->
<nav>
	<ul id="slide-out" class="side-nav">
		<li><a class="waves-effect <?php echo ($this->uri->segment(1) == 'empregos' ? 'grey' : '');?> darken-2" href="<?=base_url('empregos')?>" >Empregos</a></li>
		<li><a class="waves-effect <?php echo ($this->uri->segment(1) == 'candidatos' ? 'grey' : '');?> darken-2" href="<?=base_url('candidatos')?>">Candidatos</a></li>
		<li><div class="divider"></div></li>
		<li><a class="waves-effect" id="servico" 	href="#LoginModal">Anunciar Serviço</a></li>
		<li><a class="waves-effect" id="vaga" 		href="#LoginModal">Anunciar Emprego</a></li>
		<li><div class="divider"></div></li>
		<li><a class="waves-effect"			 		href="#SearchModal">Busca</a></li>

	</ul>
	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>	
	<div class="nav-wrapper grey darken-4">
		<ul class="left hide-on-med-and-down">
			<li class="<?php echo ($this->uri->segment(1) == 'empregos' ? 'grey' : '');?> darken-2"><a href="<?=base_url('empregos')?>">Empregos</a></li>
			<li class="<?php echo ($this->uri->segment(1) == 'candidatos' ? 'grey' : '');?>"><a href="<?=base_url('candidatos')?>">Candidatos</a></li>
			<li><a href="#SearchModal" class="waves-effect waves-light btn cyan darken-3">Busca</a></li>
		</ul>
		<a href="<?=base_url()?>" class="brand-logo center">
			<img style="height: 50px; margin-top: 5px;" class="responsive-img" src="<?=base_url('assets/images/logo.png')?>" alt="">
		</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="#LoginModal" id="servico" class="waves-effect waves-light btn orange darken-3">Anunciar Serviço</a></li>
			<li><a href="#LoginModal" id="vaga" >Anunciar Emprego</a></li>
		</ul>
	</div>
</nav>
<!--
FINAL DO MENU DA PAGINA
-->	