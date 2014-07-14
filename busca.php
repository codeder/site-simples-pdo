<?php $s = $_GET["s"]; ?>

<article class="row">
    <div class="col-md-12">
        <h2>Você buscou por: <?php echo $s; ?></h2>

        <ul>
            <?php
                $p = new Pages($connection);
                foreach($p->search($s) as $pags){
                    echo '<li><a href="'.strtolower($pags["pages"]).'" title="'.$pags["pages"].'">'.$pags["pages"].'</a></li>';
                }
            ?>
        </ul>


    </div>
</article>