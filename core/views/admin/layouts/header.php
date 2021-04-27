<?php

use core\classes\Store;
?>

<div class="container-fluid navegacao">
    <div class="row">
        <div class="col-6 p-3">
            <h3><?= APP_NAME ?> - Área de Administrador</h3>
        </div>
        <div class="col-6 p-3 text-end align-self-center">
            <?php if (Store::adminLogged()) : ?>
                <i class="fas fa-user-tie me-2"></i><?= $_SESSION['administrador'] ?>
                <span class="mx-2">|</span>
                <a href="?a=admin_logout"><i class="fas fa-sign-out-alt me-1"></i>Logout</a>
            <?php endif; ?>
        </div>
    </div>
</div>