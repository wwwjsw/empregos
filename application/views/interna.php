<?php $r = $results[0]; ?>
<div class="row">
    <div class="col s12 m6 l6 offset-l3 offset-m3">
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
</div>