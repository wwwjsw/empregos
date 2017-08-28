<!--
	COMEÇO DA LISTAGEM ADMINISTRATIVA
-->
<div class="container">
	<div class="row">
        <?php if(!empty($results)){ ?>
		<table class="highlight">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Serviço/Emprego</th>
					<th>Ações</th>
				</tr>
			</thead>

            <tbody>
			<?php foreach($results as $i => $r){ ?>
				<tr>
					<td><?=$r->fb_name?></td>
					<td><?=$r->cargo?> <div class="chip"><?=($r->tipo == 'servico'? 'Serviço' : 'Emprego')?></div></td>
					<td><a class='dropdown-button btn' href='<?=$r->id?>' data-activates='<?=$r->id?>'>Ações</a></td>
				</tr>
			<?php } ?>				
			</tbody>
		</table>
		<!--
			Dropdown Structure
		-->
		<?php foreach($results as $i => $r){ ?> 
			<ul id='<?=$r->id?>' class='dropdown-content'>
                <?php if($r->block == TRUE){ ?>
                    <li><a class="red-text" href="<?=base_url('administrativo/unblock/'.$r->id)?>"><i class="material-icons">check_circle</i>Desbloquear</a></li>
                <?php }else{?>
                    <li><a class="green-text" href="<?=base_url('administrativo/block/'.$r->id)?>"><i class="material-icons">block</i>Bloquear</a></li>
                <?php } ?>
				<li><a onclick="return deleteConfirmation(this)" href="<?=base_url('administrativo/delete/'.$r->id)?>"><i class="material-icons">delete</i>Excluir</a></li>
                <?php if($r->is_ad == TRUE){ ?>
                    <li><a class="red-text" href="<?=base_url('administrativo/disableAds/'.$r->id)?>"><i class="material-icons">money_off</i>Tirar patrocinio</a></li>
                <?php }else{?>
                    <li><a class="green-text" href="<?=base_url('administrativo/ads/'.$r->id)?>"><i class="material-icons">monetization_on</i>Patrocinado</a></li>
                <?php } ?>
                <li><a href="<?=base_url('administrativo/edit/'.$r->id)?>"><i class="material-icons">edit</i>Editar</a></li>
			</ul>
        <?php } ?>
        <?php }else{ ?>
            <h2>Não há nada aqui. Tente mais tarde!</h2>
        <?php } ?>
  		<!--
			End Of Dropdown Structure
  		-->
	</div>
	<div class="row">
		<div class="container">
			<?php echo $links; ?>
		</div>
	</div>
</div>
<!--
	FIM DA LISTAGEM ADMINISTRATIVA
-->