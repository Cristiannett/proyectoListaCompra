<?php
include_once("model/user.php");
$user = new User(1, "Nombre Usuario","email@email.com","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkMalwkUv_xWAPWwSUSQP8uwQt3x72pWkTLbrXRnILVeQQ6S2mIURfp5lxOZXZtAt3AOw&usqp=CAU");
?>

<article class="panel is-success">
    <p class="panel-heading">
        Información del Usuario
    </p>
    <div class="box">
        <div>
            <h2><?= $user ->getName() ?></h2>
            <h3><?= $user ->getEmail() ?></h3>
            <br>
            <div style="text-align: center;"><img src=<?= $user ->getAvatarImage() ?> width="200" height="200"></div>
        </div>
    </div>
</article>