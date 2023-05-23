<?php    
    defined('BASEPATH') OR exit('URL inválida');
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 card p-4">
            <?php echo $erros; ?>
            <h3>Adicionar foto</h3>
            <hr>
            <?php echo form_open_multipart('aplicacao/adicionar'); ?>
            <div class="row mb-3">
                <input type="file" 
                       class="form-control" 
                       name="ficheiro_foto"
                       required>
            </div>
            <div class="form-check">
                <input type="checkbox" 
                       class="form-check-input" 
                       name="check_publica" 
                       id="check_publica" 
                       checked>
                <label for="check_publica" class="form-check-label">Definir como foto pública</label>
            </div>
            <div class="text-center mt-3">
                <a href="<?php echo site_url('aplicacao'); ?>" class="btn btn-primary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>