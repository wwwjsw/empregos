<!--
	MODAL DE LOGIN
-->
<div id="LoginModal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            <div class="center-align">
                <div class="fb-login-button"
                     data-auto-logout-link="true"
                     data-max-rows="1"
                     data-size="medium"
                     data-button-type="continue_with"
                     data-show-faces="false"
                     onlogin="checkLoginState();"
                     data-auto-logout-link="true"
                     data-button-type="continue_with"
                     data-use-continue-as="true"></div>
            </div>
            <form id="anunciar" method="post" action="<?=base_url('/enviar')?>" class="col s12">
                <input type="hidden" form="anunciar" id="fb_id" name="fb_id" value="">
                <input type="hidden" form="anunciar" id="fb_name" name="fb_name" value="">
                <input type="hidden" form="anunciar" id="tipo" name="tipo" value="">
                <div class="row">
                    <div class="col s12 l12">
                        <h5><span id="beneficios"></span></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l4">
                        <p>
                            <input type="checkbox" id="clt" name="beneficios_clt" form="anunciar">
                            <label for="clt">C.L.T</label>
                        </p>
                        <p>
                            <input type="checkbox" id="diaria" name="beneficios_diaria" form="anunciar">
                            <label for="diaria">Diaria</label>
                        </p>
                        <p>
                            <input type="checkbox" id="odonto" name="beneficios_odonto" form="anunciar">
                            <label for="odonto">Plano odontológico</label>
                        </p>
                        <p>
                            <input type="checkbox" id="vida" name="beneficios_vida" form="anunciar">
                            <label for="vida">Seguro de vida</label>
                        </p>
                    </div>
                    <div class="col s12 l4">
                        <p>
                            <input type="checkbox" id="alimentacao" name="beneficios_alimentacao" form="anunciar">
                            <label for="alimentacao">Vale alimentação</label>
                        </p>
                        <p>
                            <input type="checkbox" id="saude" name="beneficios_saude" form="anunciar">
                            <label for="saude">Plano de saúde</label>
                        </p>
                        <p>
                            <input type="checkbox" id="comissao" name="beneficios_comissao" form="anunciar" >
                            <label for="comissao">Comissão</label>
                        </p>
                        <p>
                            <input type="checkbox" id="vt" name="beneficios_vt" form="anunciar">
                            <label for="vt">Vale transporte</label>
                        </p>
                    </div>
                    <div class="input-field col s12 l4">
                        <input placeholder="(00) 00000-0000" id="contact_number" name="numero" form="anunciar" type="text" class="validate">
                        <label for="contact_number">Número de contato</label>
                    </div>
                    <div class="input-field col s12 l4">
                        <select class="icons" id="color" form="anunciar" name="cor">
                            <option value="grey" selected>Escolha uma opção</option>
                            <option value="red" data-icon="<?=base_url('/assets/images/c62828.png')?>" class="left circle">Vermelho</option>
                            <option value="pink" data-icon="<?=base_url('/assets/images/ad1457.png')?>" class="left circle">Rosa</option>
                            <option value="purple" data-icon="<?=base_url('/assets/images/6a1b9a.png')?>" class="left circle">Roxo</option>
                            <option value="deep-purple" data-icon="<?=base_url('/assets/images/4527a0.png')?>" class="left circle">Roxo escuro</option>
                            <option value="indigo" data-icon="<?=base_url('/assets/images/283593.png')?>" class="left circle">Indigo</option>
                            <option value="blue" data-icon="<?=base_url('/assets/images/1565c0.png')?>" class="left circle">Azul</option>
                            <option value="light-blue" data-icon="<?=base_url('/assets/images/0277bd.png')?>" class="left circle">Azul claro</option>
                            <option value="cyan" data-icon="<?=base_url('/assets/images/00838f.png')?>" class="left circle">Ciano</option>
                            <option value="teal" data-icon="<?=base_url('/assets/images/00695c.png')?>" class="left circle">Cerceta</option>
                            <option value="green" data-icon="<?=base_url('/assets/images/2e7d32.png')?>" class="left circle">Verde</option>
                            <option value="light-green" data-icon="<?=base_url('/assets/images/558b2f.png')?>" class="left circle">Verde claro</option>
                            <option value="lime" data-icon="<?=base_url('/assets/images/9e9d24.png')?>" class="left circle">Lima</option>
                            <option value="yellow" data-icon="<?=base_url('/assets/images/f9a825.png')?>" class="left circle">Amarelo</option>
                            <option value="amber" data-icon="<?=base_url('/assets/images/ff8f00.png')?>" class="left circle">Âmbar</option>
                            <option value="orange" data-icon="<?=base_url('/assets/images/ef6c00.png')?>" class="left circle">Laranja</option>
                            <option value="deep-orange" data-icon="<?=base_url('/assets/images/d84315.png')?>" class="left circle">Laranja escuro</option>
                            <option value="brown" data-icon="<?=base_url('/assets/images/4e342e.png')?>" class="left circle">Marron</option>
                            <option value="grey" data-icon="<?=base_url('/assets/images/424242.png')?>" class="left circle">Cinza</option>
                            <option value="blue-grey" data-icon="<?=base_url('/assets/images/37474f.png')?>" class="left circle">Cinza azulado</option>
                        </select>
                        <label for="color">Cor do Card</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l12">
                        <h5><span id="oferecido"></span></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="cargo" required>
                            <?php if(!empty($emprego)){ foreach ($emprego as $key => $e ){ ?>                            
                                <option value="<?=$e->nome_cargo?>"><?=$e->nome_cargo?></option>
                            <?php }}else{?>
                                <option disabled selected>Não existem empregos</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-foo" class="modal-footer">
        <button class="waves-green btn-flat" form="anunciar" type="submit">Cadastrar</button>
    </div>
</div>
<!--
	FINAL DO MODAL DE LOGIN
-->
<!--
	COMEÇO DO MODAL DE PESQUISA
-->
<div id="SearchModal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            <form id="search" method="post" action="<?=base_url('/pesquisa')?>" class="col s12">
                <div class="row">
                    <div class="col s12 l12">
                        <h5>Categorias</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="termo" required>
                            <?php if(!empty($emprego)){ foreach ($emprego as $key => $e ){ ?>
                                <option value="<?=$e->nome_cargo?>"><?=$e->nome_cargo?></option>
                            <?php }}else{?>
                                <option disabled selected>Não existem empregos</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-foo" class="modal-footer">
        <button class="waves-green btn-flat" form="search" type="submit">Buscar</button>
    </div>
</div>
<!--
	FIM DO MODAL DE PESQUISA
-->