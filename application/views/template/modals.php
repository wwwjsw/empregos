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
                    <div class="col s12 l4">
                        <p>
                            <input name="cargo" value="administrativo" form="anunciar" type="radio" id="t1" checked />
                            <label for="t1">administrativo</label>
                        </p>
                        <p>
                            <input name="cargo" value="advogado" form="anunciar" type="radio" id="t2" />
                            <label for="t2">advogado</label>
                        </p>
                        <p>
                            <input name="cargo" value="ajudante de cozinha" form="anunciar" type="radio" id="t3" />
                            <label for="t3">ajudante de cozinha</label>
                        </p>
                        <p>
                            <input name="cargo" value="ajudante geral" form="anunciar" type="radio" id="t4" />
                            <label for="t4">ajudante geral</label>
                        </p>
                        <p>
                            <input name="cargo" value="analista fiscal" form="anunciar" type="radio" id="t5" />
                            <label for="t5">analista fiscal</label>
                        </p>
                        <p>
                            <input name="cargo" value="assistente administrativo" form="anunciar" type="radio" id="t6" />
                            <label for="t6">assistente administrativo</label>
                        </p>
                        <p>
                            <input name="cargo" value="atendente" form="anunciar" type="radio" id="t7" />
                            <label for="t7">atendente</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar" form="anunciar" type="radio" id="t8" />
                            <label for="t8">auxiliar</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar administrativo" form="anunciar" type="radio" id="t9" />
                            <label for="t9">auxiliar administrativo</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar de enfermagem" form="anunciar" type="radio" id="t10" />
                            <label for="t10">auxiliar de enfermagem</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar de escritório" form="anunciar" type="radio" id="t11" />
                            <label for="t11">auxiliar de escritório</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar de limpeza" form="anunciar" type="radio" id="t12" />
                            <label for="t12">auxiliar de limpeza</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar de produção" form="anunciar" type="radio" id="t13" />
                            <label for="t13">auxiliar de produção</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar de serviços em geral" form="anunciar" type="radio" id="t14" />
                            <label for="t14">auxiliar de serviços em geral</label>
                        </p>
                        <p>
                            <input name="cargo" value="auxiliar de vendas" form="anunciar" type="radio" id="t15" />
                            <label for="t15">auxiliar de vendas</label>
                        </p>
                        <p>
                            <input name="cargo" value="baba" form="anunciar" type="radio" id="t16" />
                            <label for="t16">baba</label>
                        </p>
                        <p>
                            <input name="cargo" value="balconista" form="anunciar" type="radio" id="t17" />
                            <label for="t17">balconista</label>
                        </p>
                        <p>
                            <input name="cargo" value="bilingue" form="anunciar" type="radio" id="t18" />
                            <label for="t18">bilingue</label>
                        </p>
                        <p>
                            <input name="cargo" value="caixa" form="anunciar" type="radio" id="t19" />
                            <label for="t19">caixa</label>
                        </p>
                        <p>
                            <input name="cargo" value="cobrança" form="anunciar" type="radio" id="t20" />
                            <label for="t20">cobrança</label>
                        </p>
                        <p>
                            <input name="cargo" value="comercial" form="anunciar" type="radio" id="t21" />
                            <label for="t21">comercial</label>
                        </p>
                        <p>
                            <input name="cargo" value="comprador" form="anunciar" type="radio" id="t22" />
                            <label for="t22">comprador</label>
                        </p>
                        <p>
                            <input name="cargo" value="conferente" form="anunciar" type="radio" id="t23" />
                            <label for="t23">conferente</label>
                        </p>
                        <p>
                            <input name="cargo" value="contador" form="anunciar" type="radio" id="t24" />
                            <label for="t24">contador</label>
                        </p>
                        <p>
                            <input name="cargo" value="coordenador" form="anunciar" type="radio" id="t25" />
                            <label for="t25">coordenador</label>
                        </p>
                        <p>
                            <input name="cargo" value="copeira" form="anunciar" type="radio" id="t26" />
                            <label for="t26">copeira</label>
                        </p>
                        <p>
                            <input name="cargo" value="costureira" form="anunciar" type="radio" id="t27" />
                            <label for="t27">costureira</label>
                        </p>
                        <p>
                            <input name="cargo" value="cozinheiro" form="anunciar" type="radio" id="t28" />
                            <label for="t28">cozinheiro</label>
                        </p>
                        <p>
                            <input name="cargo" value="demonstradora" form="anunciar" type="radio" id="t29" />
                            <label for="t29">demonstradora</label>
                        </p>
                        <p>
                            <input name="cargo" value="departamento pessoal" form="anunciar" type="radio" id="t30" />
                            <label for="t30">departamento pessoal</label>
                        </p>
                        <p>
                            <input name="cargo" value="designer gráfico" form="anunciar" type="radio" id="t31" />
                            <label for="t31">designer gráfico</label>
                        </p>
                        <p>
                            <input name="cargo" value="diarista" form="anunciar" type="radio" id="t32" />
                            <label for="t32">diarista</label>
                        </p>
                        <p>
                            <input name="cargo" value="digitador" form="anunciar" type="radio" id="t33" />
                            <label for="t33">digitador</label>
                        </p>
                        <p>
                            <input name="cargo" value="doméstica" form="anunciar" type="radio" id="t34" />
                            <label for="t34">doméstica</label>
                        </p>
                        <p>
                            <input name="cargo" value="eletricista" form="anunciar" type="radio" id="t35" />
                            <label for="t35">eletricista</label>
                        </p>
                        <p>
                            <input name="cargo" value="encanador" form="anunciar" type="radio" id="t36" />
                            <label for="t36">encanador</label>
                        </p>
                        <p>
                            <input name="cargo" value="enfermeiro" form="anunciar" type="radio" id="t37" />
                            <label for="t37">enfermeiro</label>
                        </p>
                        <p>
                            <input name="cargo" value="estoquista" form="anunciar" type="radio" id="t38" />
                            <label for="t38">estoquista</label>
                        </p>
                        <p>
                            <input name="cargo" value="estágio" form="anunciar" type="radio" id="t39" />
                            <label for="t39">estágio</label>
                        </p>
                    </div>
                    <div class="col s12 l4">
                        <p>
                            <input name="cargo" value="farmácia" form="anunciar" type="radio" id="t40" />
                            <label for="t40">farmácia</label>
                        </p>
                        <p>
                            <input name="cargo" value="farmacêutico" form="anunciar" type="radio" id="t41" />
                            <label for="t41">farmacêutico</label>
                        </p>
                        <p>
                            <input name="cargo" value="faturamento" form="anunciar" type="radio" id="t42" />
                            <label for="t42">faturamento</label>
                        </p>
                        <p>
                            <input name="cargo" value="faturista" form="anunciar" type="radio" id="t43" />
                            <label for="t43">faturista</label>
                        </p>
                        <p>
                            <input name="cargo" value="financeiro" form="anunciar" type="radio" id="t44" />
                            <label for="t44">financeiro</label>
                        </p>
                        <p>
                            <input name="cargo" value="fiscal de loja" form="anunciar" type="radio" id="t45" />
                            <label for="t45">fiscal de loja</label>
                        </p>
                        <p>
                            <input name="cargo" value="fisioterapeuta" form="anunciar" type="radio" id="t46" />
                            <label for="t46">fisioterapeuta</label>
                        </p>
                        <p>
                            <input name="cargo" value="fonoaudíologo" form="anunciar" type="radio" id="t47" />
                            <label for="t47">fonoaudíologo</label>
                        </p>
                        <p>
                            <input name="cargo" value="freelancer" form="anunciar" type="radio" id="t48" />
                            <label for="t48">freelancer</label>
                        </p>
                        <p>
                            <input name="cargo" value="frentista" form="anunciar" type="radio" id="t49" />
                            <label for="t49">frentista</label>
                        </p>
                        <p>
                            <input name="cargo" value="garçom" form="anunciar" type="radio" id="t50" />
                            <label for="t50">garçom</label>
                        </p>
                        <p>
                            <input name="cargo" value="gerente" form="anunciar" type="radio" id="t51" />
                            <label for="t51">gerente</label>
                        </p>
                        <p>
                            <input name="cargo" value="gerente administrativo" form="anunciar" type="radio" id="t52" />
                            <label for="t52">gerente administrativo</label>
                        </p>
                        <p>
                            <input name="cargo" value="gerente comercial" form="anunciar" type="radio" id="t53" />
                            <label for="t53">gerente comercial</label>
                        </p>
                        <p>
                            <input name="cargo" value="gerente de loja" form="anunciar" type="radio" id="t54" />
                            <label for="t54">gerente de loja</label>
                        </p>
                        <p>
                            <input name="cargo" value="gerente de vendas" form="anunciar" type="radio" id="t55" />
                            <label for="t55">gerente de vendas</label>
                        </p>
                        <p>
                            <input name="cargo" value="gráfica" form="anunciar" type="radio" id="t56" />
                            <label for="t56">gráfica</label>
                        </p>
                        <p>
                            <input name="cargo" value="home office" form="anunciar" type="radio" id="t57" />
                            <label for="t57">home office</label>
                        </p>
                        <p>
                            <input name="cargo" value="hospitalar" form="anunciar" type="radio" id="t58" />
                            <label for="t58">hospitalar</label>
                        </p>
                        <p>
                            <input name="cargo" value="hotelaria" form="anunciar" type="radio" id="t59" />
                            <label for="t59">hotelaria</label>
                        </p>
                        <p>
                            <input name="cargo" value="hotelaria e turismo" form="anunciar" type="radio" id="t60" />
                            <label for="t60">hotelaria e turismo</label>
                        </p>
                        <p>
                            <input name="cargo" value="informática" form="anunciar" type="radio" id="t61" />
                            <label for="t61">informática</label>
                        </p>
                        <p>
                            <input name="cargo" value="informática ti telecomunicações" form="anunciar" type="radio" id="t62" />
                            <label for="t62">informática ti telecomunicações</label>
                        </p>
                        <p>
                            <input name="cargo" value="inspetor de alunos" form="anunciar" type="radio" id="t63" />
                            <label for="t63">inspetor de alunos</label>
                        </p>
                        <p>
                            <input name="cargo" value="inspetor de qualidade" form="anunciar" type="radio" id="t64" />
                            <label for="t64">inspetor de qualidade</label>
                        </p>
                        <p>
                            <input name="cargo" value="jornalista" form="anunciar" type="radio" id="t65" />
                            <label for="t65">jornalista</label>
                        </p>
                        <p>
                            <input name="cargo" value="jurídico" form="anunciar" type="radio" id="t66" />
                            <label for="t66">jurídico</label>
                        </p>
                        <p>
                            <input name="cargo" value="laboratório" form="anunciar" type="radio" id="t67" />
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
                    <div class="col s12 l4">
                        <p>
                            <input name="termo" value="administrativo" form="search" type="radio" id="ts1" checked />
                            <label for="ts1">administrativo</label>
                        </p>
                        <p>
                            <input name="termo" value="advogado" form="search" type="radio" id="ts2" />
                            <label for="ts2">advogado</label>
                        </p>
                        <p>
                            <input name="termo" value="ajudante de cozinha" form="search" type="radio" id="ts3" />
                            <label for="ts3">ajudante de cozinha</label>
                        </p>
                        <p>
                            <input name="termo" value="ajudante geral" form="search" type="radio" id="ts4" />
                            <label for="ts4">ajudante geral</label>
                        </p>
                        <p>
                            <input name="termo" value="analista fiscal" form="search" type="radio" id="ts5" />
                            <label for="ts5">analista fiscal</label>
                        </p>
                        <p>
                            <input name="termo" value="assistente administrativo" form="search" type="radio" id="ts6" />
                            <label for="ts6">assistente administrativo</label>
                        </p>
                        <p>
                            <input name="termo" value="atendente" form="search" type="radio" id="ts7" />
                            <label for="ts7">atendente</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar" form="search" type="radio" id="ts8" />
                            <label for="ts8">auxiliar</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar administrativo" form="search" type="radio" id="ts9" />
                            <label for="ts9">auxiliar administrativo</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar de enfermagem" form="search" type="radio" id="ts10" />
                            <label for="ts10">auxiliar de enfermagem</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar de escritório" form="search" type="radio" id="ts11" />
                            <label for="ts11">auxiliar de escritório</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar de limpeza" form="search" type="radio" id="ts12" />
                            <label for="ts12">auxiliar de limpeza</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar de produção" form="search" type="radio" id="ts13" />
                            <label for="ts13">auxiliar de produção</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar de serviços em geral" form="search" type="radio" id="ts14" />
                            <label for="ts14">auxiliar de serviços em geral</label>
                        </p>
                        <p>
                            <input name="termo" value="auxiliar de vendas" form="search" type="radio" id="ts15" />
                            <label for="ts15">auxiliar de vendas</label>
                        </p>
                        <p>
                            <input name="termo" value="baba" form="search" type="radio" id="ts16" />
                            <label for="ts16">baba</label>
                        </p>
                        <p>
                            <input name="termo" value="balconista" form="search" type="radio" id="ts17" />
                            <label for="ts17">balconista</label>
                        </p>
                        <p>
                            <input name="termo" value="bilingue" form="search" type="radio" id="ts18" />
                            <label for="ts18">bilingue</label>
                        </p>
                        <p>
                            <input name="termo" value="caixa" form="search" type="radio" id="ts19" />
                            <label for="ts19">caixa</label>
                        </p>
                        <p>
                            <input name="termo" value="cobrança" form="search" type="radio" id="ts20" />
                            <label for="ts20">cobrança</label>
                        </p>
                        <p>
                            <input name="termo" value="comercial" form="search" type="radio" id="ts21" />
                            <label for="ts21">comercial</label>
                        </p>
                        <p>
                            <input name="termo" value="comprador" form="search" type="radio" id="ts22" />
                            <label for="ts22">comprador</label>
                        </p>
                        <p>
                            <input name="termo" value="conferente" form="search" type="radio" id="ts23" />
                            <label for="ts23">conferente</label>
                        </p>
                        <p>
                            <input name="termo" value="contador" form="search" type="radio" id="ts24" />
                            <label for="ts24">contador</label>
                        </p>
                        <p>
                            <input name="termo" value="coordenador" form="search" type="radio" id="ts25" />
                            <label for="ts25">coordenador</label>
                        </p>
                        <p>
                            <input name="termo" value="copeira" form="search" type="radio" id="ts26" />
                            <label for="ts26">copeira</label>
                        </p>
                        <p>
                            <input name="termo" value="costureira" form="search" type="radio" id="ts27" />
                            <label for="ts27">costureira</label>
                        </p>
                        <p>
                            <input name="termo" value="cozinheiro" form="search" type="radio" id="ts28" />
                            <label for="ts28">cozinheiro</label>
                        </p>
                        <p>
                            <input name="termo" value="demonstradora" form="search" type="radio" id="ts29" />
                            <label for="ts29">demonstradora</label>
                        </p>
                        <p>
                            <input name="termo" value="departamento pessoal" form="search" type="radio" id="ts30" />
                            <label for="ts30">departamento pessoal</label>
                        </p>
                        <p>
                            <input name="termo" value="designer gráfico" form="search" type="radio" id="ts31" />
                            <label for="ts31">designer gráfico</label>
                        </p>
                        <p>
                            <input name="termo" value="diarista" form="search" type="radio" id="ts32" />
                            <label for="ts32">diarista</label>
                        </p>
                        <p>
                            <input name="termo" value="digitador" form="search" type="radio" id="ts33" />
                            <label for="ts33">digitador</label>
                        </p>
                        <p>
                            <input name="termo" value="doméstica" form="search" type="radio" id="ts34" />
                            <label for="ts34">doméstica</label>
                        </p>
                        <p>
                            <input name="termo" value="eletricista" form="search" type="radio" id="ts35" />
                            <label for="ts35">eletricista</label>
                        </p>
                        <p>
                            <input name="termo" value="encanador" form="search" type="radio" id="ts36" />
                            <label for="ts36">encanador</label>
                        </p>
                        <p>
                            <input name="termo" value="enfermeiro" form="search" type="radio" id="ts37" />
                            <label for="ts37">enfermeiro</label>
                        </p>
                        <p>
                            <input name="termo" value="estoquista" form="search" type="radio" id="ts38" />
                            <label for="ts38">estoquista</label>
                        </p>
                        <p>
                            <input name="termo" value="estágio" form="search" type="radio" id="ts39" />
                            <label for="ts39">estágio</label>
                        </p>
                    </div>
                    <div class="col s12 l4">
                        <p>
                            <input name="termo" value="farmácia" form="search" type="radio" id="ts40" />
                            <label for="ts40">farmácia</label>
                        </p>
                        <p>
                            <input name="termo" value="farmacêutico" form="search" type="radio" id="ts41" />
                            <label for="ts41">farmacêutico</label>
                        </p>
                        <p>
                            <input name="termo" value="faturamento" form="search" type="radio" id="ts42" />
                            <label for="ts42">faturamento</label>
                        </p>
                        <p>
                            <input name="termo" value="faturista" form="search" type="radio" id="ts43" />
                            <label for="ts43">faturista</label>
                        </p>
                        <p>
                            <input name="termo" value="financeiro" form="search" type="radio" id="ts44" />
                            <label for="ts44">financeiro</label>
                        </p>
                        <p>
                            <input name="termo" value="fiscal de loja" form="search" type="radio" id="ts45" />
                            <label for="ts45">fiscal de loja</label>
                        </p>
                        <p>
                            <input name="termo" value="fisioterapeuta" form="search" type="radio" id="ts46" />
                            <label for="ts46">fisioterapeuta</label>
                        </p>
                        <p>
                            <input name="termo" value="fonoaudíologo" form="search" type="radio" id="ts47" />
                            <label for="ts47">fonoaudíologo</label>
                        </p>
                        <p>
                            <input name="termo" value="freelancer" form="search" type="radio" id="ts48" />
                            <label for="ts48">freelancer</label>
                        </p>
                        <p>
                            <input name="termo" value="frentista" form="search" type="radio" id="ts49" />
                            <label for="ts49">frentista</label>
                        </p>
                        <p>
                            <input name="termo" value="garçom" form="search" type="radio" id="ts50" />
                            <label for="ts50">garçom</label>
                        </p>
                        <p>
                            <input name="termo" value="gerente" form="search" type="radio" id="ts51" />
                            <label for="ts51">gerente</label>
                        </p>
                        <p>
                            <input name="termo" value="gerente administrativo" form="search" type="radio" id="ts52" />
                            <label for="ts52">gerente administrativo</label>
                        </p>
                        <p>
                            <input name="termo" value="gerente comercial" form="search" type="radio" id="ts53" />
                            <label for="ts53">gerente comercial</label>
                        </p>
                        <p>
                            <input name="termo" value="gerente de loja" form="search" type="radio" id="ts54" />
                            <label for="ts54">gerente de loja</label>
                        </p>
                        <p>
                            <input name="termo" value="gerente de vendas" form="search" type="radio" id="ts55" />
                            <label for="ts55">gerente de vendas</label>
                        </p>
                        <p>
                            <input name="termo" value="gráfica" form="search" type="radio" id="ts56" />
                            <label for="ts56">gráfica</label>
                        </p>
                        <p>
                            <input name="termo" value="home office" form="search" type="radio" id="ts57" />
                            <label for="ts57">home office</label>
                        </p>
                        <p>
                            <input name="termo" value="hospitalar" form="search" type="radio" id="ts58" />
                            <label for="ts58">hospitalar</label>
                        </p>
                        <p>
                            <input name="termo" value="hotelaria" form="search" type="radio" id="ts59" />
                            <label for="ts59">hotelaria</label>
                        </p>
                        <p>
                            <input name="termo" value="hotelaria e turismo" form="search" type="radio" id="ts60" />
                            <label for="ts60">hotelaria e turismo</label>
                        </p>
                        <p>
                            <input name="termo" value="informática" form="search" type="radio" id="ts61" />
                            <label for="ts61">informática</label>
                        </p>
                        <p>
                            <input name="termo" value="informática ti telecomunicações" form="search" type="radio" id="ts62" />
                            <label for="ts62">informática ti telecomunicações</label>
                        </p>
                        <p>
                            <input name="termo" value="inspetor de alunos" form="search" type="radio" id="ts63" />
                            <label for="ts63">inspetor de alunos</label>
                        </p>
                        <p>
                            <input name="termo" value="inspetor de qualidade" form="search" type="radio" id="ts64" />
                            <label for="ts64">inspetor de qualidade</label>
                        </p>
                        <p>
                            <input name="termo" value="jornalista" form="search" type="radio" id="ts65" />
                            <label for="ts65">jornalista</label>
                        </p>
                        <p>
                            <input name="termo" value="jurídico" form="search" type="radio" id="ts66" />
                            <label for="ts66">jurídico</label>
                        </p>
                        <p>
                            <input name="termo" value="laboratório" form="search" type="radio" id="ts67" />
                            <label for="ts67">laboratório</label>
                        </p>
                        <p>
                            <input name="termo" value="limpeza" form="search" type="radio" id="ts68" />
                            <label for="ts68">limpeza</label>
                        </p>
                        <p>
                            <input name="termo" value="logística" form="search" type="radio" id="ts69" />
                            <label for="ts69">logística</label>
                        </p>
                        <p>
                            <input name="termo" value="manobrista" form="search" type="radio" id="ts70" />
                            <label for="ts70">manobrista</label>
                        </p>
                        <p>
                            <input name="termo" value="marketing" form="search" type="radio" id="ts71" />
                            <label for="ts71">marketing</label>
                        </p>
                        <p>
                            <input name="termo" value="mecânico" form="search" type="radio" id="ts72" />
                            <label for="ts72">mecânico</label>
                        </p>
                        <p>
                            <input name="termo" value="motoboy" form="search" type="radio" id="ts73" />
                            <label for="ts73">motoboy</label>
                        </p>
                        <p>
                            <input name="termo" value="motorista" form="search" type="radio" id="ts74" />
                            <label for="ts74">motorista</label>
                        </p>
                        <p>
                            <input name="termo" value="motorista hab b" form="search" type="radio" id="ts75" />
                            <label for="ts75">motorista hab b</label>
                        </p>
                        <p>
                            <input name="termo" value="motorista hab d" form="search" type="radio" id="ts76" />
                            <label for="ts76">motorista hab d</label>
                        </p>
                        <p>
                            <input name="termo" value="motorista particular" form="search" type="radio" id="ts77" />
                            <label for="ts77">motorista particular</label>
                        </p>
                        <p>
                            <input name="termo" value="nutricionista" form="search" type="radio" id="ts78" />
                            <label for="ts78">nutricionista</label>
                        </p>
                    </div>
                    <div class="col s12 l4">
                        <p>
                            <input name="termo" value="office boy" form="search" type="radio" id="ts79" />
                            <label for="ts79">office boy</label>
                        </p>
                        <p>
                            <input name="termo" value="operacional" form="search" type="radio" id="ts80" />
                            <label for="ts80">operacional</label>
                        </p>
                        <p>
                            <input name="termo" value="operador de caixa" form="search" type="radio" id="ts81" />
                            <label for="ts81">operador de caixa</label>
                        </p>
                        <p>
                            <input name="termo" value="operador de câmera" form="search" type="radio" id="ts82" />
                            <label for="ts82">operador de câmera</label>
                        </p>
                        <p>
                            <input name="termo" value="operador de empilhadeira" form="search" type="radio" id="ts83" />
                            <label for="ts83">operador de empilhadeira</label>
                        </p>
                        <p>
                            <input name="termo" value="operador de máquinas" form="search" type="radio" id="ts84" />
                            <label for="ts84">operador de máquinas</label>
                        </p>
                        <p>
                            <input name="termo" value="operador de produção" form="search" type="radio" id="ts85" />
                            <label for="ts85">operador de produção</label>
                        </p>
                        <p>
                            <input name="termo" value="operador de telemarketing" form="search" type="radio" id="ts86" />
                            <label for="ts86">operador de telemarketing</label>
                        </p>
                        <p>
                            <input name="termo" value="personal trainner" form="search" type="radio" id="ts87" />
                            <label for="ts87">personal trainner</label>
                        </p>
                        <p>
                            <input name="termo" value="pintor" form="search" type="radio" id="ts88" />
                            <label for="ts88">pintor</label>
                        </p>
                        <p>
                            <input name="termo" value="porteiro" form="search" type="radio" id="ts89" />
                            <label for="ts89">porteiro</label>
                        </p>
                        <p>
                            <input name="termo" value="professor" form="search" type="radio" id="ts90" />
                            <label for="ts90">professor</label>
                        </p>
                        <p>
                            <input name="termo" value="programador" form="search" type="radio" id="ts91" />
                            <label for="ts91">programador</label>
                        </p>
                        <p>
                            <input name="termo" value="promotor de vendas" form="search" type="radio" id="ts92" />
                            <label for="ts92">promotor de vendas</label>
                        </p>
                        <p>
                            <input name="termo" value="químico" form="search" type="radio" id="ts93" />
                            <label for="ts93">químico</label>
                        </p>
                        <p>
                            <input name="termo" value="recepcionista" form="search" type="radio" id="ts94" />
                            <label for="ts94">recepcionista</label>
                        </p>
                        <p>
                            <input name="termo" value="recepção" form="search" type="radio" id="ts95" />
                            <label for="ts95">recepção</label>
                        </p>
                        <p>
                            <input name="termo" value="recursos humanos" form="search" type="radio" id="ts96" />
                            <label for="ts96">recursos humanos</label>
                        </p>
                        <p>
                            <input name="termo" value="repositor" form="search" type="radio" id="ts97" />
                            <label for="ts97">repositor</label>
                        </p>
                        <p>
                            <input name="termo" value="representante comercial" form="search" type="radio" id="ts98" />
                            <label for="ts98">representante comercial</label>
                        </p>
                        <p>
                            <input name="termo" value="secretária" form="search" type="radio" id="ts99" />
                            <label for="ts99">secretária</label>
                        </p>
                        <p>
                            <input name="termo" value="segurança" form="search" type="radio" id="ts100" />
                            <label for="ts100">segurança</label>
                        </p>
                        <p>
                            <input name="termo" value="segurança do trabalho" form="search" type="radio" id="ts101" />
                            <label for="ts101">segurança do trabalho</label>
                        </p>
                        <p>
                            <input name="termo" value="supervisor" form="search" type="radio" id="ts102" />
                            <label for="ts102">supervisor</label>
                        </p>
                        <p>
                            <input name="termo" value="telefonista" form="search" type="radio" id="ts103" />
                            <label for="ts103">telefonista</label>
                        </p>
                        <p>
                            <input name="termo" value="telemarketing" form="search" type="radio" id="ts104" />
                            <label for="ts104">telemarketing</label>
                        </p>
                        <p>
                            <input name="termo" value="téc. em ar condicionado" form="search" type="radio" id="ts105" />
                            <label for="ts105">téc. em ar condicionado</label>
                        </p>
                        <p>
                            <input name="termo" value="téc. em eletrônica" form="search" type="radio" id="ts106" />
                            <label for="ts106">téc. em eletrônica</label>
                        </p>
                        <p>
                            <input name="termo" value="téc. em enfermagem" form="search" type="radio" id="ts107" />
                            <label for="ts107">téc. em enfermagem</label>
                        </p>
                        <p>
                            <input name="termo" value="téc. em informática" form="search" type="radio" id="ts108" />
                            <label for="ts108">téc. em informática</label>
                        </p>
                        <p>
                            <input name="termo" value="téc. em segurança do trabalho" form="search" type="radio" id="ts109" />
                            <label for="ts109">téc. em segurança do trabalho</label>
                        </p>
                        <p>
                            <input name="termo" value="usinagem" form="search" type="radio" id="ts110" />
                            <label for="ts110">usinagem</label>
                        </p>
                        <p>
                            <input name="termo" value="vendedor" form="search" type="radio" id="ts111" />
                            <label for="ts111">vendedor</label>
                        </p>
                        <p>
                            <input name="termo" value="vendedor de loja" form="search" type="radio" id="ts112" />
                            <label for="ts112">vendedor de loja</label>
                        </p>
                        <p>
                            <input name="termo" value="vendedor de veículos" form="search" type="radio" id="ts113" />
                            <label for="ts113">vendedor de veículos</label>
                        </p>
                        <p>
                            <input name="termo" value="vendedor externo" form="search" type="radio" id="ts114" />
                            <label for="ts114">vendedor externo</label>
                        </p>
                        <p>
                            <input name="termo" value="vendedora" form="search" type="radio" id="ts115" />
                            <label for="ts115">vendedora</label>
                        </p>
                        <p>
                            <input name="termo" value="vigilante" form="search" type="radio" id="ts116" />
                            <label for="ts116">vigilante</label>
                        </p>
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