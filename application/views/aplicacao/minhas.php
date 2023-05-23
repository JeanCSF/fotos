<?php
    defined('BASEPATH') OR exit('URL inválida');
?>
<div class="container-fluid bg-secondary pt-5 pb-5">
    <h4 class="text-center pt-2 pb-3 text-white">Minhas Fotos</h4>
    <?php if(count($fotos) === 0): ?>
        <p class="text-center">Não há fotos na sua conta.</p>
    <?php else: ?>
        <div class="row">
            <?php foreach($fotos as $foto): ?>
                <div class="col-sm-3 col-12 text-center">
                    <!-- condição para apresentação das fotos publicas e privadas do usuario -->
                    <!-- PUBLICA -->
                    <?php if($foto['publica']): ?>
                        <div class="foto-info-publica">
                            <div class="row">
                                <div class="col-8 text-start">
                                    <div class="p-2">
                                        <?php echo $foto['usuario']; ?><br>
                                        <small><?php echo $foto['dataHora']; ?></small>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="p-2">
                                        <a href="<?php echo site_url('aplicacao/privada/'.$foto['idFoto']); ?>" class="mr-3"><i class="fa fa-unlock-alt"></i></a>
                                        <a href="<?php echo site_url('aplicacao/eliminar/'.$foto['idFoto']); ?>"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                    <!-- PRIVADA -->
                    <div class="foto-info-privada">
                            <div class="row">
                                <div class="col-8 text-start">
                                    <div class="p-2">
                                        <?php echo $foto['usuario']; ?><br>
                                        <small><?php echo $foto['dataHora']; ?></small>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="p-2">
                                        <a href="<?php echo site_url('aplicacao/publica/'.$foto['idFoto']); ?>" class="mr-3"><i class="fa fa-lock"></i></a>
                                        <a href="<?php echo site_url('aplicacao/eliminar/'.$foto['idFoto']); ?>"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="foto-size p-2">
                        <img src="<?php echo base_url('assets/fotos/'.$foto['foto']); ?>" class="img-fluid">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>