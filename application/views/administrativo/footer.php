<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?=base_url('materialize/js/materialize.min.js')?>"></script>
<script>
    (function() {
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        });
    })();
</script>
<!--
WINDOW MESSAGE TO DELETE CONFIRMATION
-->
<script>
    (function () {
        deleteConfirmation = function(evt) {
            if (window.confirm("Você realmente quer excluir?")) {
                    window.open(evt.href, "_self");
            }
            return false;
        }
    })();
</script>
<!--
    SELECT INIT
-->
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<!--
    FORM ERRORS
-->
<?php if(validation_errors()){ ?>
    <script>
        //toasts com aviso
        Materialize.toast('<?=form_error('beneficios_clt')?>', 5000);
        Materialize.toast('<?=form_error('beneficios_diaria')?>', 5000);
        Materialize.toast('<?=form_error('beneficios_odonto')?>', 5000);
        Materialize.toast('<?=form_error('beneficios_vida')?>', 5000);
        Materialize.toast('<?=form_error('beneficios_alimentacao')?>', 5000);
        Materialize.toast('<?=form_error('beneficios_saude')?>', 5000);
        Materialize.toast('<?=form_error('beneficios_comissao')?>', 5000);
        Materialize.toast('<?=form_error('beneficios_vt')?>', 5000);
        Materialize.toast('<?=form_error('numero')?>', 5000);
        Materialize.toast('<?=form_error('cor')?>', 5000);
        Materialize.toast('<?=form_error('cargo')?>', 5000);
    </script>
<?php } ?>
</body>
</html>