<!--
	COMEÇO DA LISTAGEM ADMINISTRATIVA
-->
<div class="container">
	<div class="row">
		<table class="highlight">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Emprego/Serviço</th>
					<th>Ações</th>
				</tr>
			</thead>

			<tbody>
			<?php foreach($results as $i => $r){ ?>
				<tr>
					<td><?=$r->fb_name?></td>
					<td><?=$r->cargo?> <div class="chip"><?=($r->tipo == 'servico'? 'serviço' : 'emprego')?></div></td>
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
				<li><a href="<?=base_url('administrativo/block/'.$r->id)?>"><i class="material-icons">block</i>Bloquear</a></li>
				<li><a href="<?=base_url('administrativo/delete/'.$r->id)?>"><i class="material-icons">delete</i>Excluir</a></li>
				<li><a href="<?=base_url('administrativo/ads/'.$r->id)?>"><i class="material-icons">star</i>Patrocinado</a></li>
				<li><a href="<?=base_url('administrativo/edit/'.$r->id)?>"><i class="material-icons">edit</i>Editar</a></li>
			</ul>
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