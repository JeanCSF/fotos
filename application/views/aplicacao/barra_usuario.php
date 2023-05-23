<?php
    defined('BASEPATH') OR exit('URL inválida');
?>
<div class="container-fluid">
    <div class="d-flex">
        <div class="dropdown">
            <button type="button" id="dropdownMenuButton" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-cog"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="<?php echo site_url('aplicacao'); ?>" class="dropdown-item"><i class="fa fa-home me-2"></i>Página Inicial</a>
                <a href="<?php echo site_url('aplicacao/adicionar'); ?>" class="dropdown-item"><i class="fa fa-plus-circle me-2"></i>Adicionar Fotos</a>
                <a href="<?php echo site_url('aplicacao/minhas'); ?>" class="dropdown-item"><i class="fa fa-cog me-2"></i>Minhas Fotos</a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo site_url('usuarios/logout'); ?>" class="dropdown-item"><i class="fa fa-sign-out me-2"></i>Logout</a>
            </div>
        </div>
        <div class="align-self-center ms-3">
            <h4>
                <i class="fa fa-user me-3"></i><span><?php echo $this->session->usuario; ?></span>
            </h4>
        </div>
    </div>
    <hr>
</div>