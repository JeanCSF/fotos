<?php
    defined('BASEPATH') OR exit('URL inválida');
?>
<div class="container mt-5 mb-5">
    <div class="text-center alert alert-success">
        A sua foto foi carregada com sucesso
    </div>
    <div class="text-center">
        <a href="<?php echo site_url('aplicacao'); ?>" class="btn btn-primary">Voltar</a>
        <a href="<?php echo site_url('aplicacao/adicionar'); ?>" class="btn btn-primary">Adicionar outra foto</a>
    </div>
</div>