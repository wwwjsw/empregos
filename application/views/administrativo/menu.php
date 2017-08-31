<!--
	COMEÇO DO MENU ADMINISTRATIVO
-->
	<nav>
		<div class="nav-wrapper grey darken-4">
            <a href="<?=base_url('administrativo')?>"><img src="<?=base_url('assets/images/logo.png')?>" class="responsive-img" style="height: 50px; margin-top: 5px;"></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?=base_url('administrativo')?>">Publicações</a></li>
                <li><a href="<?=base_url('administrativo/empregos')?>">Empregos</a></li>
				<li><a href="#">Pessoas</a></li>
				<li><a href="#">Configurações</a></li>
				<li><a href="<?=base_url('administrativo/logout')?>">Sair</a></li>
			</ul>
		</div>
	</nav>
<!--
	FIM DO MENU ADMINISTRATIVO
-->