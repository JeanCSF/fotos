<?php
    defined('BASEPATH') OR exit('URL inválida');
?>
<div class="container-fluid bg-secondary pt-5 pb-5">
    <h4 class="text-center pt-2 pb-2 text-white">Fotos públicas</h4>
    <?php if(count($fotos) === 0): ?>
        <p class="text-center">Não foram encontradas fotos públicas</p>
    <?php else: ?>
        <div class="row">
            <?php foreach($fotos as $foto): ?>
                <div class="col-sm-3 col-12">
                    <div class="p-1 foto-info">
                        <p>
                            <?php echo $foto['usuario']; ?><br>
                            <small><?php echo $foto['dataHora']; ?></small>
                        </p>
                    </div>
                    <div class="p-2 text-center">
                        <img src="<?php echo base_url('assets/fotos/'.$foto['foto']); ?>" class="img-fluid">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>