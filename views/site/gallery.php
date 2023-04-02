<?php
/** @var $mini */

$this->registerCssFile('@web/css/gallery/gallery.css');
if ($mini) {
    $this->registerJsFile('@web/js/gallery/gallery_min.js');
} else {
    $this->registerJsFile('@web/js/gallery/gallery.js');
}

?>
<div class="site-contact">
    <section class="galeria">
        <div class="container">
            <h1 class="tit">Галерея</h1>
            <div class="contenedorImgs"></div>
        </div>
    </section>
</div>
