<?php
    defined('BASEPATH') OR exit('URL inválida');
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-6 offset-3 col-8 offset-2">
            <div class="card p-4">
                <h3>Nova conta de usuário</h3>
                <hr>
                <form action="<?php echo site_url('usuarios/signup'); ?>" method="post">
                    <!-- erro -->
                    <?php if(isset($erro)): ?>
                        <p class="alert alert-danger text-center"><?php echo $erro; ?></p>
                    <?php endif; ?>
                    <div class="row mb-3">
                        <input type="text"
                               name="text_usuario"
                               class="form-control"
                               placeholder="Usuário"
                               required
                               autofocus>
                    </div>
                    <div class="row mb-3">
                        <input type="password" 
                               class="form-control"
                               name="text_pass_1"
                               placeholder="Digite sua senha"
                               required>
                    </div>
                    <div class="row mb-3">
                        <input type="password" 
                               class="form-control"
                               name="text_pass_2"
                               placeholder="Confirme a senha digitada"
                               required>
                    </div>
                    <div class="row mb-3">
                        <input type="email" 
                               class="form-control"
                               name="text_email"
                               placeholder="Email"
                               required>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo site_url('geral'); ?>" class="btn btn-primary">Cancelar</a>
                        <button class="btn btn-primary" type="submit">Criar conta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>