<?php
    $zaznam = $zaznam ?? "";
?>
<div class="post"><?= str_replace("/n", "<br>", htmlspecialchars(trim($zaznam))) ?></div>