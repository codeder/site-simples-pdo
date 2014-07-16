<?php $s = $_GET["s"]; ?>

<article class="row">
    <div class="col-md-12">
        <h2>Você buscou por: <?php echo $s; ?></h2>

        <ul>
            <?php
            $p = new Pages($conn);
            foreach($p->search($s) as $pags){
                echo '<li><a href="'.strtolower($pags["slug"]).'" title="'.$pags["title"].'">'.$pags["title"].'</a></li>';
            }
            ?>
        </ul>


    </div>
</article>