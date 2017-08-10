<!--
PAGINA INICIAL
-->	
<div class="row">
<?php
	if(!empty($results))
	{
		foreach($results as $i => $r)
		{ 
?>
	<div class="col s12 m6 l3">
		<div class="card medium <?=$r->cor?> darken-3">
			<div class="card-content white-text">
				<span class="card-title">
					<a href="" class="white-text emprego_desc center-align">
						<?php if($r->tipo == 'vaga'){ ?>
							Contrata-se:
						<?php }else{ ?>
							Procuro serviço de:
						<?php } ?>
					</a>
					<a class="white-text" href="<?=base_url('/anuncio/'.$r->id)?>"><?=$r->cargo?></a>
				</span>
				<div class="row">
					<div class="col l6 s6 lateral-text">
						<?php if($r->beneficios_clt == TRUE){ ?><p>C.L.T</p><?php } ?>
						<?php if($r->beneficios_diaria == TRUE){ ?><p>Diaria</p><?php } ?>
						<?php if($r->beneficios_vida == TRUE){ ?><p>Seguro de vida</p><?php } ?>
						<?php if($r->beneficios_odonto == TRUE){ ?><p>Plano odontológico</p><?php } ?>
					</div>
					<div class="col l6 s6 lateral-text">
						<?php if($r->beneficios_alimentacao == TRUE){ ?><p>Vale alimentação</p><?php } ?>
						<?php if($r->beneficios_saude == TRUE){ ?><p>Plano de saúde</p><?php } ?>
						<?php if($r->beneficios_comissao == TRUE){ ?><p>Comissão</p><?php } ?>
						<?php if($r->beneficios_vt == TRUE){ ?><p>Vale transporte</p><?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col s12 l12 center-align">
					<a href="https://www.facebook.com/dialog/share?app_id=1927915467451509&display=page&href=https://wwwjsw.github.io/empregos/facebook_share.html&redirect_uri=<?=base_url()?>" target="_blank"><img src="<?=base_url('assets/images/facebook.png')?>" alt=""></a>
					<a href="https://twitter.com/intent/tweet?text=eu&url=https://wwwjsw.github.io/empregos/facebook_share.html" target="_blank"><img src="<?=base_url('assets/images/twitter.png')?>" alt=""></a>
					<a href="https://plus.google.com/share?url=https://wwwjsw.github.io/empregos/facebook_share.html" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><img src="<?=base_url('assets/images/g_plus.png')?>" alt=""></a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://wwwjsw.github.io/empregos/facebook_share.html&title=<?=$r->cargo?>&summary=<?php ?>&source=LinkedIn" target="_blank"><img src="<?=base_url('assets/images/linkedin.png')?>" alt=""></a>
					</div>
				</div>
			</div>
			<div class="card-action">
				<div class="row">
					<div class="col s12 l12 center-align margin-number">
						<a href="#" class="white-text"><?=$r->numero?></a>						
					</div>
						<a href="http://fb.com/<?=$r->fb_id?>" target="_blank">
					<div class="col s12 l12 center-align">
							<div class="chip ">
								<img src="http://graph.facebook.com/<?=$r->fb_id?>/picture?type=square" alt="Contact Person">
								<?=$r->fb_name?>
							</div>
					</div>
						</a>
				</div>
				<?php if($r->is_ad){ ?>
					<div class="left-align white-text patrocinado-text"><p>Anúncio patrocinado</p></div>
					<?php } ?>
			</div>
		</div>	    		
	</div>	
<?php 
		}
	}else
	{
?>
	<div class="col s12 m12 l12">
        <br><br><br><br><br><br>
		<h2 class="center-align">Não há nada aqui. Tente mais tarde!</h2>
        <br><br><br><br><br><br><br>
    </div>
<?php
	} 
?>
<!-- 	
	<div class="col s12 m6 l3">
		<div class="card medium grey darken-3">
			<div class="card-content white-text">
				<span class="card-title"><a class="white-text" href="<?=base_url('/anuncio/teste')?>">Diarista</a></span>
				<div class="row">
					<div class="col l6 s6 lateral-text">
						<p>C.L.T</p>
						<p>Diaria</p>
						<p>Seguro de vida</p>
						<p>Plano odontológico</p>
					</div>
					<div class="col l6 s6 lateral-text">
						<p>Vale alimentação</p>
						<p>Plano de saúde</p>
						<p>Comissão</p>
						<p>Vale transporte</p>						
					</div>
				</div>
				<div class="row">
					<div class="col s12 l12 center-align">
					<a href=""><img src="assets/images/facebook.png" alt=""></a>
					<a href=""><img src="assets/images/twitter.png" alt=""></a>
					<a href=""><img src="assets/images/g_plus.png" alt=""></a>
					<a href=""><img src="assets/images/linkedin.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="card-action">
				<div class="row">
					<div class="col s12 l12 center-align margin-number">
						<a href="#" class="white-text">(00) 00000-0000</a>						
					</div>
					<div class="col s12 l12 center-align">
						<div class="chip "><img src="http://placehold.it/50x50/000000" alt="Contact Person">Guilherme Henrique</div>
					</div>
				</div>
				<div class="left-align white-text patrocinado-text"><p>Anúncio patrocinado</p></div>
			</div>
		</div>	    		
	</div>
	<div class="col s12 m6 l6">
		<div class="card medium orange darken-3">
			<div class="card-content white-text">
				<span class="card-title">Aux. de escritorio(LINK DIRETO)</span>
				<div class="row">
					<div class="col s6 l6">
						<p>C.L.T</p>
						<p>Beneficios</p>
						<p>Plano de saúde</p>
						<p>Plano odontológico</p>
					</div>
					<div class="col s6 l6">
						<p>C.L.T</p>
						<p>Beneficios</p>
						<p>Plano de saúde</p>
						<p>Plano odontológico</p>						
					</div>
				</div>
				<div class="row">
					<div class="col s12 l12 center-align">
					<a href=""><img src="assets/images/facebook.png" alt=""></a>
					<a href=""><img src="assets/images/twitter.png" alt=""></a>
					<a href=""><img src="assets/images/g_plus.png" alt=""></a>
					<a href=""><img src="assets/images/linkedin.png" alt=""></a>
					</div>
				</div>				
			</div>
			<div class="card-action">
				<div class="row">
					<div class="col s12 l12 center-align margin-number">
						<a href="#" class="white-text">(00) 00000-0000</a>						
					</div>
					<div class="col s12 l12 center-align">
						<div class="chip "><img src="http://placehold.it/50x50/000000" alt="Contact Person">Guilherme Henrique</div>
					</div>
				</div>
				<div class="left-align white-text patrocinado-text"><p>Anúncio patrocinado</p></div>
			</div>
		</div>	    		
	</div>
	<div class="col s12 m6 l3">
		<div class="card medium red darken-3">
			<div class="card-content white-text">
				<span class="card-title">Diarista</span>
				<div class="row">
					<div class="col l6 s6 lateral-text">
						<p>C.L.T</p>
						<p>Beneficios</p>
						<p>Plano de saúde</p>
						<p>Plano odontológico</p>
					</div>
					<div class="col l6 s6 lateral-text">
						<p>C.L.T</p>
						<p>Beneficios</p>
						<p>Plano de saúde</p>
						<p>Plano odontológico</p>						
					</div>
				</div>
				<div class="row">
					<div class="col s12 l12 center-align">
					<a href=""><img src="assets/images/facebook.png" alt=""></a>
					<a href=""><img src="assets/images/twitter.png" alt=""></a>
					<a href=""><img src="assets/images/g_plus.png" alt=""></a>
					<a href=""><img src="assets/images/linkedin.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="card-action">
				<div class="row">
					<div class="col s12 l12 center-align margin-number">
						<a href="#" class="white-text">(00) 00000-0000</a>						
					</div>
					<div class="col s12 l12 center-align">
						<div class="chip "><img src="http://placehold.it/50x50/000000" alt="Contact Person">Guilherme Henrique</div>
					</div>
				</div>
				<div class="left-align white-text patrocinado-text"><p>Anúncio patrocinado</p></div>
			</div>
		</div>	    		
	</div>
-->
</div>
<!--
FINAL PAGINA INICIAL
-->
<!-- 
	INICIO DA PAGINAÇÃO
-->
<div class="row">
	<div class="container">
		<?php echo $links; ?>
	</div>
</div>
<!--
	FIM DA PAGINAÇÃO
-->