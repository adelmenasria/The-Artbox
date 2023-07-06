<?php include 'header.php'; ?>

<?php include 'oeuvres.php'; ?>
    <div id="liste-oeuvres">
        <?php foreach ($oeuvres as $oeuvre){ ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?=$oeuvre['id']?>">
                    <img src="<?=$oeuvre['img']?>" alt="<?=$oeuvre['title']?>">
                    <h2><?=$oeuvre['title']?></h2>
                    <p class="artist"><?=$oeuvre['artist']?></p>
                </a>
            </article>
        <?php } ?>
    </div>

<?php include 'footer.php' ?>