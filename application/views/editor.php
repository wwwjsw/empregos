<?php $r = $results[0]; ?>
<div class="container">
    <div class="row">
        <div class="center-align">
            <br>
            <input class="waves-effect waves-light btn" type="submit" form="anunciar" value="Salvar">
        </div>
        <form id="anunciar" method="post" action="<?=base_url('/enviar')?>" class="col s12">
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
                <div class="col s12 l4">
                    <p>
                        <input <?=($r->cargo=='administrativo'? 'checked': '')?> name="cargo" value="administrativo" form="anunciar" type="radio" id="t1"/>
                        <label for="t1">administrativo</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='advogado'? 'checked': '')?> name="cargo" value="advogado" form="anunciar" type="radio" id="t2" />
                        <label for="t2">advogado</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='ajudante de cozinha'? 'checked': '')?> name="cargo" value="ajudante de cozinha" form="anunciar" type="radio" id="t3" />
                        <label for="t3">ajudante de cozinha</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='ajudante geral'? 'checked': '')?> name="cargo" value="ajudante geral" form="anunciar" type="radio" id="t4" />
                        <label for="t4">ajudante geral</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='analista fiscal'? 'checked': '')?> name="cargo" value="analista fiscal" form="anunciar" type="radio" id="t5" />
                        <label for="t5">analista fiscal</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='assistente administrativo'? 'checked': '')?> name="cargo" value="assistente administrativo" form="anunciar" type="radio" id="t6" />
                        <label for="t6">assistente administrativo</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='atendente'? 'checked': '')?> name="cargo" value="atendente" form="anunciar" type="radio" id="t7" />
                        <label for="t7">atendente</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar'? 'checked': '')?> name="cargo" value="auxiliar" form="anunciar" type="radio" id="t8" />
                        <label for="t8">auxiliar</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar administrativo'? 'checked': '')?> name="cargo" value="auxiliar administrativo" form="anunciar" type="radio" id="t9" />
                        <label for="t9">auxiliar administrativo</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar de enfermagem'? 'checked': '')?> name="cargo" value="auxiliar de enfermagem" form="anunciar" type="radio" id="t10" />
                        <label for="t10">auxiliar de enfermagem</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar de escritório'? 'checked': '')?> name="cargo" value="auxiliar de escritório" form="anunciar" type="radio" id="t11" />
                        <label for="t11">auxiliar de escritório</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar de limpeza'? 'checked': '')?> name="cargo" value="auxiliar de limpeza" form="anunciar" type="radio" id="t12" />
                        <label for="t13">auxiliar de limpeza</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar de produção'? 'checked': '')?> name="cargo" value="auxiliar de produção" form="anunciar" type="radio" id="t13" />
                        <label for="t13">auxiliar de produção</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar de serviços em geral'? 'checked': '')?> name="cargo" value="auxiliar de serviços em geral" form="anunciar" type="radio" id="t14" />
                        <label for="t14">auxiliar de serviços em geral</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='auxiliar de vendas'? 'checked': '')?> name="cargo" value="auxiliar de vendas" form="anunciar" type="radio" id="t15" />
                        <label for="t15">auxiliar de vendas</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='baba'? 'checked': '')?> name="cargo" value="baba" form="anunciar" type="radio" id="t16" />
                        <label for="t16">baba</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='balconista'? 'checked': '')?> name="cargo" value="balconista" form="anunciar" type="radio" id="t17" />
                        <label for="t17">balconista</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='bilingue'? 'checked': '')?> name="cargo" value="bilingue" form="anunciar" type="radio" id="t18" />
                        <label for="t18">bilingue</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='caixa'? 'checked': '')?> name="cargo" value="caixa" form="anunciar" type="radio" id="t19" />
                        <label for="t19">caixa</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='cobrança'? 'checked': '')?> name="cargo" value="cobrança" form="anunciar" type="radio" id="t20" />
                        <label for="t20">cobrança</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='comercial'? 'checked': '')?> name="cargo" value="comercial" form="anunciar" type="radio" id="t21" />
                        <label for="t21">comercial</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='comprador'? 'checked': '')?> name="cargo" value="comprador" form="anunciar" type="radio" id="t22" />
                        <label for="t22">comprador</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='conferente'? 'checked': '')?> name="cargo" value="conferente" form="anunciar" type="radio" id="t23" />
                        <label for="t23">conferente</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='contador'? 'checked': '')?> name="cargo" value="contador" form="anunciar" type="radio" id="t24" />
                        <label for="t24">contador</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='coordenador'? 'checked': '')?> name="cargo" value="coordenador" form="anunciar" type="radio" id="t25" />
                        <label for="25">coordenador</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='copeira'? 'checked': '')?> name="cargo" value="copeira" form="anunciar" type="radio" id="t26" />
                        <label for="t26">copeira</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='costureira'? 'checked': '')?> name="cargo" value="costureira" form="anunciar" type="radio" id="t27" />
                        <label for="t27">costureira</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='cozinheiro'? 'checked': '')?> name="cargo" value="cozinheiro" form="anunciar" type="radio" id="t28" />
                        <label for="t28">cozinheiro</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='demonstradora'? 'checked': '')?> name="cargo" value="demonstradora" form="anunciar" type="radio" id="t29" />
                        <label for="t29">demonstradora</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='departamento pessoal'? 'checked': '')?> name="cargo" value="departamento pessoal" form="anunciar" type="radio" id="t30" />
                        <label for="t30">departamento pessoal</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='designer gráfico'? 'checked': '')?> name="cargo" value="designer gráfico" form="anunciar" type="radio" id="t31" />
                        <label for="t31">designer gráfico</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='diarista'? 'checked': '')?> name="cargo" value="diarista" form="anunciar" type="radio" id="t32" />
                        <label for="t32">diarista</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='digitador'? 'checked': '')?> name="cargo" value="digitador" form="anunciar" type="radio" id="t33" />
                        <label for="t33">digitador</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='doméstica'? 'checked': '')?> name="cargo" value="doméstica" form="anunciar" type="radio" id="t34" />
                        <label for="t34">doméstica</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='eletricista'? 'checked': '')?> name="cargo" value="eletricista" form="anunciar" type="radio" id="t35" />
                        <label for="t35">eletricista</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='encanador'? 'checked': '')?> name="cargo" value="encanador" form="anunciar" type="radio" id="t36" />
                        <label for="t36">encanador</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='enfermeiro'? 'checked': '')?> name="cargo" value="enfermeiro" form="anunciar" type="radio" id="t37" />
                        <label for="t37">enfermeiro</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='estoquista'? 'checked': '')?> name="cargo" value="estoquista" form="anunciar" type="radio" id="t38" />
                        <label for="t38">estoquista</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='estágio'? 'checked': '')?> name="cargo" value="estágio" form="anunciar" type="radio" id="t39" />
                        <label for="t39">estágio</label>
                    </p>
                </div>
                <div class="col s12 l4">
                    <p>
                        <input <?=($r->cargo=='farmácia'? 'checked': '')?> name="cargo" value="farmácia" form="anunciar" type="radio" id="t40" />
                        <label for="t40">farmácia</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='farmacêutico'? 'checked': '')?> name="cargo" value="farmacêutico" form="anunciar" type="radio" id="t41" />
                        <label for="t41">farmacêutico</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='faturamento'? 'checked': '')?> name="cargo" value="faturamento" form="anunciar" type="radio" id="t42" />
                        <label for="t42">faturamento</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='faturista'? 'checked': '')?> name="cargo" value="faturista" form="anunciar" type="radio" id="t43" />
                        <label for="t43">faturista</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='financeiro'? 'checked': '')?> name="cargo" value="financeiro" form="anunciar" type="radio" id="t44" />
                        <label for="t44">financeiro</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='fiscal de loja'? 'checked': '')?> name="cargo" value="fiscal de loja" form="anunciar" type="radio" id="t45" />
                        <label for="t45">fiscal de loja</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='fisioterapeuta'? 'checked': '')?> name="cargo" value="fisioterapeuta" form="anunciar" type="radio" id="t46" />
                        <label for="t46">fisioterapeuta</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='fonoaudíologo'? 'checked': '')?> name="cargo" value="fonoaudíologo" form="anunciar" type="radio" id="t47" />
                        <label for="t47">fonoaudíologo</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='freelancer'? 'checked': '')?> name="cargo" value="freelancer" form="anunciar" type="radio" id="t48" />
                        <label for="t48">freelancer</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='frentista'? 'checked': '')?> name="cargo" value="frentista" form="anunciar" type="radio" id="t49" />
                        <label for="t49">frentista</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='garçom'? 'checked': '')?> name="cargo" value="garçom" form="anunciar" type="radio" id="t50" />
                        <label for="t50">garçom</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='gerente'? 'checked': '')?> name="cargo" value="gerente" form="anunciar" type="radio" id="t51" />
                        <label for="t51">gerente</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='gerente administrativo'? 'checked': '')?> name="cargo" value="gerente administrativo" form="anunciar" type="radio" id="t52" />
                        <label for="t52">gerente administrativo</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='gerente comercial'? 'checked': '')?> name="cargo" value="gerente comercial" form="anunciar" type="radio" id="t53" />
                        <label for="t53">gerente comercial</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='gerente de loja'? 'checked': '')?> name="cargo" value="gerente de loja" form="anunciar" type="radio" id="t54" />
                        <label for="t54">gerente de loja</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='gerente de vendas'? 'checked': '')?> name="cargo" value="gerente de vendas" form="anunciar" type="radio" id="t55" />
                        <label for="t55">gerente de vendas</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='gráfica'? 'checked': '')?> name="cargo" value="gráfica" form="anunciar" type="radio" id="t56" />
                        <label for="t56">gráfica</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='home office'? 'checked': '')?> name="cargo" value="home office" form="anunciar" type="radio" id="t57" />
                        <label for="t57">home office</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='hospitalar'? 'checked': '')?> name="cargo" value="hospitalar" form="anunciar" type="radio" id="t58" />
                        <label for="t58">hospitalar</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='hotelaria'? 'checked': '')?> name="cargo" value="hotelaria" form="anunciar" type="radio" id="t59" />
                        <label for="t59">hotelaria</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='hotelaria e turismo'? 'checked': '')?> name="cargo" value="hotelaria e turismo" form="anunciar" type="radio" id="t60" />
                        <label for="t60">hotelaria e turismo</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='informática'? 'checked': '')?> name="cargo" value="informática" form="anunciar" type="radio" id="t61" />
                        <label for="t61">informática</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='informática ti telecomunicações'? 'checked': '')?> name="cargo" value="informática ti telecomunicações" form="anunciar" type="radio" id="t62" />
                        <label for="t62">informática ti telecomunicações</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='inspetor de alunos'? 'checked': '')?> name="cargo" value="inspetor de alunos" form="anunciar" type="radio" id="t63" />
                        <label for="t63">inspetor de alunos</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='inspetor de qualidade'? 'checked': '')?> name="cargo" value="inspetor de qualidade" form="anunciar" type="radio" id="t64" />
                        <label for="t64">inspetor de qualidade</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='jornalista'? 'checked': '')?> name="cargo" value="jornalista" form="anunciar" type="radio" id="t65" />
                        <label for="t65">jornalista</label>
                    </p>
                    <p>
                        <input <?=($r->cargo=='jurídico'? 'checked': '')?> name="cargo" value="jurídico" form="anunciar" type="radio" id="t66" />
                        <label for="t66">jurídico</label>
                    </p>
                    <p>
                        <input  <?=($r->cargo=='laboratório'? 'checked': '')?> name="cargo" value="laboratório" form="anunciar" type="radio" id="t67" />
                        <label for="t67">laboratório</label>
                    </p>
                    <p>
                        <input name="cargo" value="limpeza" form="anunciar" type="radio" id="t68" />
                        <label for="t68">limpeza</label>
                    </p>
                    <p>
                        <input name="cargo" value="logística" form="anunciar" type="radio" id="t69" />
                        <label for="t69">logística</label>
                    </p>
                    <p>
                        <input name="cargo" value="manobrista" form="anunciar" type="radio" id="t70" />
                        <label for="t70">manobrista</label>
                    </p>
                    <p>
                        <input name="cargo" value="marketing" form="anunciar" type="radio" id="t71" />
                        <label for="t71">marketing</label>
                    </p>
                    <p>
                        <input name="cargo" value="mecânico" form="anunciar" type="radio" id="t72" />
                        <label for="t72">mecânico</label>
                    </p>
                    <p>
                        <input name="cargo" value="motoboy" form="anunciar" type="radio" id="t73" />
                        <label for="t73">motoboy</label>
                    </p>
                    <p>
                        <input name="cargo" value="motorista" form="anunciar" type="radio" id="t74" />
                        <label for="t74">motorista</label>
                    </p>
                    <p>
                        <input name="cargo" value="motorista hab b" form="anunciar" type="radio" id="t75" />
                        <label for="t75">motorista hab b</label>
                    </p>
                    <p>
                        <input name="cargo" value="motorista hab d" form="anunciar" type="radio" id="t76" />
                        <label for="t76">motorista hab d</label>
                    </p>
                    <p>
                        <input name="cargo" value="motorista particular" form="anunciar" type="radio" id="t77" />
                        <label for="t77">motorista particular</label>
                    </p>
                    <p>
                        <input name="cargo" value="nutricionista" form="anunciar" type="radio" id="t78" />
                        <label for="t78">nutricionista</label>
                    </p>
                </div>
                <div class="col s12 l4">
                    <p>
                        <input name="cargo" value="office boy" form="anunciar" type="radio" id="t79" />
                        <label for="t79">office boy</label>
                    </p>
                    <p>
                        <input name="cargo" value="operacional" form="anunciar" type="radio" id="t80" />
                        <label for="t80">operacional</label>
                    </p>
                    <p>
                        <input name="cargo" value="operador de caixa" form="anunciar" type="radio" id="t81" />
                        <label for="t81">operador de caixa</label>
                    </p>
                    <p>
                        <input name="cargo" value="operador de câmera" form="anunciar" type="radio" id="t82" />
                        <label for="t82">operador de câmera</label>
                    </p>
                    <p>
                        <input name="cargo" value="operador de empilhadeira" form="anunciar" type="radio" id="t83" />
                        <label for="t83">operador de empilhadeira</label>
                    </p>
                    <p>
                        <input name="cargo" value="operador de máquinas" form="anunciar" type="radio" id="t84" />
                        <label for="t84">operador de máquinas</label>
                    </p>
                    <p>
                        <input name="cargo" value="operador de produção" form="anunciar" type="radio" id="t85" />
                        <label for="t85">operador de produção</label>
                    </p>
                    <p>
                        <input name="cargo" value="operador de telemarketing" form="anunciar" type="radio" id="t86" />
                        <label for="t86">operador de telemarketing</label>
                    </p>
                    <p>
                        <input name="cargo" value="personal trainner" form="anunciar" type="radio" id="t87" />
                        <label for="t87">personal trainner</label>
                    </p>
                    <p>
                        <input name="cargo" value="pintor" form="anunciar" type="radio" id="t88" />
                        <label for="t88">pintor</label>
                    </p>
                    <p>
                        <input name="cargo" value="porteiro" form="anunciar" type="radio" id="t89" />
                        <label for="t89">porteiro</label>
                    </p>
                    <p>
                        <input name="cargo" value="professor" form="anunciar" type="radio" id="t90" />
                        <label for="t90">professor</label>
                    </p>
                    <p>
                        <input name="cargo" value="programador" form="anunciar" type="radio" id="t91" />
                        <label for="t91">programador</label>
                    </p>
                    <p>
                        <input name="cargo" value="promotor de vendas" form="anunciar" type="radio" id="t92" />
                        <label for="t92">promotor de vendas</label>
                    </p>
                    <p>
                        <input name="cargo" value="químico" form="anunciar" type="radio" id="t93" />
                        <label for="t93">químico</label>
                    </p>
                    <p>
                        <input name="cargo" value="recepcionista" form="anunciar" type="radio" id="t94" />
                        <label for="t94">recepcionista</label>
                    </p>
                    <p>
                        <input name="cargo" value="recepção" form="anunciar" type="radio" id="t95" />
                        <label for="t95">recepção</label>
                    </p>
                    <p>
                        <input name="cargo" value="recursos humanos" form="anunciar" type="radio" id="t96" />
                        <label for="t96">recursos humanos</label>
                    </p>
                    <p>
                        <input name="cargo" value="repositor" form="anunciar" type="radio" id="t97" />
                        <label for="t97">repositor</label>
                    </p>
                    <p>
                        <input name="cargo" value="representante comercial" form="anunciar" type="radio" id="t98" />
                        <label for="t98">representante comercial</label>
                    </p>
                    <p>
                        <input name="cargo" value="secretária" form="anunciar" type="radio" id="t99" />
                        <label for="t99">secretária</label>
                    </p>
                    <p>
                        <input name="cargo" value="segurança" form="anunciar" type="radio" id="t100" />
                        <label for="t100">segurança</label>
                    </p>
                    <p>
                        <input name="cargo" value="segurança do trabalho" form="anunciar" type="radio" id="t101" />
                        <label for="t101">segurança do trabalho</label>
                    </p>
                    <p>
                        <input name="cargo" value="supervisor" form="anunciar" type="radio" id="t102" />
                        <label for="t102">supervisor</label>
                    </p>
                    <p>
                        <input name="cargo" value="telefonista" form="anunciar" type="radio" id="t103" />
                        <label for="t103">telefonista</label>
                    </p>
                    <p>
                        <input name="cargo" value="telemarketing" form="anunciar" type="radio" id="t104" />
                        <label for="t104">telemarketing</label>
                    </p>
                    <p>
                        <input name="cargo" value="téc. em ar condicionado" form="anunciar" type="radio" id="t105" />
                        <label for="t105">téc. em ar condicionado</label>
                    </p>
                    <p>
                        <input name="cargo" value="téc. em eletrônica" form="anunciar" type="radio" id="t106" />
                        <label for="t106">téc. em eletrônica</label>
                    </p>
                    <p>
                        <input name="cargo" value="téc. em enfermagem" form="anunciar" type="radio" id="t107" />
                        <label for="t107">téc. em enfermagem</label>
                    </p>
                    <p>
                        <input name="cargo" value="téc. em informática" form="anunciar" type="radio" id="t108" />
                        <label for="t108">téc. em informática</label>
                    </p>
                    <p>
                        <input name="cargo" value="téc. em segurança do trabalho" form="anunciar" type="radio" id="t109" />
                        <label for="t109">téc. em segurança do trabalho</label>
                    </p>
                    <p>
                        <input name="cargo" value="usinagem" form="anunciar" type="radio" id="t110" />
                        <label for="t110">usinagem</label>
                    </p>
                    <p>
                        <input name="cargo" value="vendedor" form="anunciar" type="radio" id="t111" />
                        <label for="t111">vendedor</label>
                    </p>
                    <p>
                        <input name="cargo" value="vendedor de loja" form="anunciar" type="radio" id="t112" />
                        <label for="t112">vendedor de loja</label>
                    </p>
                    <p>
                        <input name="cargo" value="vendedor de veículos" form="anunciar" type="radio" id="t113" />
                        <label for="t113">vendedor de veículos</label>
                    </p>
                    <p>
                        <input name="cargo" value="vendedor externo" form="anunciar" type="radio" id="t114" />
                        <label for="t114">vendedor externo</label>
                    </p>
                    <p>
                        <input name="cargo" value="vendedora" form="anunciar" type="radio" id="t115" />
                        <label for="t115">vendedora</label>
                    </p>
                    <p>
                        <input name="cargo" value="vigilante" form="anunciar" type="radio" id="t116" />
                        <label for="t116">vigilante</label>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
