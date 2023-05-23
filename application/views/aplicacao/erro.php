<?php
    defined('BASEPATH') OR exit('URL inválida');
?>
<div class="container mt-5 mb-5">
    <div class="text-center alert alert-danger">
        <?php echo $erro; ?>
    </div>
    <div class="text-center">
        <a href="<?php echo site_url('aplicacao'); ?>" class="btn btn-primary">Cancelar</a>
        <a href="<?php echo site_url('aplicacao/adicionar'); ?>" class="btn btn-primary">Tentar novamente</a>
    </div>
</div>