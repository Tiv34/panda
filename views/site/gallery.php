<?php
/** @var $mini */

$this->registerCssFile('@web/css/gallery/gallery.css');
$class = '';
if ($mini) {
    $this->registerJsFile('@web/js/gallery/gallery_min.js');
    $class = 'text-dark';
} else {
    $this->registerJsFile('@web/js/gallery/gallery.js');
}

?>
<div class="site-contact">
    <section class="galeria">
        <div class="container">
            <h1 class="tit <?=$class?>">Галерея</h1>
            <div class="contenedorImgs"></div>
        </div>
    </section>
</div>
