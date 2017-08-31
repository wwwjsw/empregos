<?php $r = $results[0]; ?>
<div class="container">
    <div class="row">
        <div class="center-align">
            <br>
            <input class="waves-effect waves-light btn" type="submit" form="anunciar" value="Salvar">
        </div>
        <form id="anunciar" method="post" action="" class="col s12">
            <div class="row">
                <div class="col s12 l12">
                    <h5><span id="beneficios"></span></h5>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <p>
                        <input <?=($r->beneficios_clt == true ? 'checked':'')?> type="checkbox" id="clt" name="beneficios_clt" form="anunciar">
                        <label for="clt">C.L.T</label>
                    </p>
                    <p>
                        <input <?=($r->beneficios_diaria == true ? 'checked':'')?> type="checkbox" id="diaria" name="beneficios_diaria" form="anunciar">
                        <label for="diaria">Diaria</label>
                    </p>
                    <p>
                        <input <?=($r->beneficios_odonto == true ? 'checked':'')?> type="checkbox" id="odonto" name="beneficios_odonto" form="anunciar">
                        <label for="odonto">Plano odontológico</label>
                    </p>
                    <p>
                        <input <?=($r->beneficios_vida == true ? 'checked':'')?> type="checkbox" id="vida" name="beneficios_vida" form="anunciar">
                        <label for="vida">Seguro de vida</label>
                    </p>
                </div>
                <div class="col s12 l4">
                    <p>
                        <input <?=($r->beneficios_alimentacao == true ? 'checked':'')?> type="checkbox" id="alimentacao" name="beneficios_alimentacao" form="anunciar">
                        <label for="alimentacao">Vale alimentação</label>
                    </p>
                    <p>
                        <input <?=($r->beneficios_saude == true ? 'checked':'')?> type="checkbox" id="saude" name="beneficios_saude" form="anunciar">
                        <label for="saude">Plano de saúde</label>
                    </p>
                    <p>
                        <input <?=($r->beneficios_comissao == true ? 'checked':'')?> type="checkbox" id="comissao" name="beneficios_comissao" form="anunciar" >
                        <label for="comissao">Comissão</label>
                    </p>
                    <p>
                        <input <?=($r->beneficios_vt == true ? 'checked':'')?> type="checkbox" id="vt" name="beneficios_vt" form="anunciar">
                        <label for="vt">Vale transporte</label>
                    </p>
                </div>
                <div class="input-field col s12 l4">
                    <input placeholder="(00) 00000-0000" value="<?=$r->numero?>" id="contact_number" name="numero" form="anunciar" type="text" class="validate">
                    <label for="contact_number">Número de contato</label>
                </div>
                <div class="input-field col s12 l4">
                    <select class="icons" id="color" form="anunciar" name="cor">
                        <option value="grey">Escolha uma opção</option>
                        <option <?=($r->cor == 'red' ? 'selected': '')?> value="red" data-icon="<?=base_url('/assets/images/c62828.png')?>" class="left circle">Vermelho</option>
                        <option <?=($r->cor == 'pink' ? 'selected': '')?> value="pink" data-icon="<?=base_url('/assets/images/ad1457.png')?>" class="left circle">Rosa</option>
                        <option <?=($r->cor == 'purple' ? 'selected': '')?> value="purple" data-icon="<?=base_url('/assets/images/6a1b9a.png')?>" class="left circle">Roxo</option>
                        <option <?=($r->cor == 'deep-purple' ? 'selected': '')?> value="deep-purple" data-icon="<?=base_url('/assets/images/4527a0.png')?>" class="left circle">Roxo escuro</option>
                        <option <?=($r->cor == 'indigo' ? 'selected': '')?> value="indigo" data-icon="<?=base_url('/assets/images/283593.png')?>" class="left circle">Indigo</option>
                        <option <?=($r->cor == 'blue' ? 'selected': '')?> value="blue" data-icon="<?=base_url('/assets/images/1565c0.png')?>" class="left circle">Azul</option>
                        <option <?=($r->cor == 'light-blue' ? 'selected': '')?> value="light-blue" data-icon="<?=base_url('/assets/images/0277bd.png')?>" class="left circle">Azul claro</option>
                        <option <?=($r->cor == 'cyan' ? 'selected': '')?> value="cyan" data-icon="<?=base_url('/assets/images/00838f.png')?>" class="left circle">Ciano</option>
                        <option <?=($r->cor == 'teal' ? 'selected': '')?> value="teal" data-icon="<?=base_url('/assets/images/00695c.png')?>" class="left circle">Cerceta</option>
                        <option <?=($r->cor == 'green' ? 'selected': '')?> value="green" data-icon="<?=base_url('/assets/images/2e7d32.png')?>" class="left circle">Verde</option>
                        <option <?=($r->cor == 'light-green' ? 'selected': '')?> value="light-green" data-icon="<?=base_url('/assets/images/558b2f.png')?>" class="left circle">Verde claro</option>
                        <option <?=($r->cor == 'lime' ? 'selected': '')?> value="lime" data-icon="<?=base_url('/assets/images/9e9d24.png')?>" class="left circle">Lima</option>
                        <option <?=($r->cor == 'yellow' ? 'selected': '')?> value="yellow" data-icon="<?=base_url('/assets/images/f9a825.png')?>" class="left circle">Amarelo</option>
                        <option <?=($r->cor == 'amber' ? 'selected': '')?> value="amber" data-icon="<?=base_url('/assets/images/ff8f00.png')?>" class="left circle">Âmbar</option>
                        <option <?=($r->cor == 'orange' ? 'selected': '')?> value="orange" data-icon="<?=base_url('/assets/images/ef6c00.png')?>" class="left circle">Laranja</option>
                        <option <?=($r->cor == 'deep-orange' ? 'selected': '')?> value="deep-orange" data-icon="<?=base_url('/assets/images/d84315.png')?>" class="left circle">Laranja escuro</option>
                        <option <?=($r->cor == 'brown' ? 'selected': '')?> value="brown" data-icon="<?=base_url('/assets/images/4e342e.png')?>" class="left circle">Marron</option>
                        <option <?=($r->cor == 'grey' ? 'selected': '')?> value="grey" data-icon="<?=base_url('/assets/images/424242.png')?>" class="left circle">Cinza</option>
                        <option <?=($r->cor == 'blue-grey' ? 'selected': '')?> value="blue-grey" data-icon="<?=base_url('/assets/images/37474f.png')?>" class="left circle">Cinza azulado</option>
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
                    <select name="termo" required>
                        <?php if(!empty($emprego)){ foreach ($emprego as $key => $e ){ ?>
                            <option <?=($r->cargo == $e->nome_cargo ? 'selected' : '')?> value="<?=$e->nome_cargo?>"><?=$e->nome_cargo?></option>
                        <?php }}else{?>
                            <option disabled selected>Não existem empregos</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
