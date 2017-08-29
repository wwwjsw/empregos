<div class="container">
    <br>
    <div class="row">
        <form class="col s12" method="post">
            <div class="row">
                <div class="input-field col s9">
                    <input placeholder="Profissão..." name="profissao" id="profissao" type="text" class="validate">
                    <label for="profissao">Adicionar Profissão</label>
                </div>
                <div class="input-field col s3">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <?php if(!empty($results)){ ?>
            <table class="responsive-table centered striped">
                <thead>
                <tr>
                    <th>Profissão</th>
                    <th>Excluir</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($results as $key => $profissao){ ?>
                <tr>
                    <td><?=$profissao->nome_cargo?></td>
                    <td><a href="<?=base_url('administrativo/empregos/excluir/'.$profissao->id_cargo)?>">Excluir</a></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php }else{} ?>
    </div>
</div>
