<?php include 'header.php'; ?>
    
<?php
include 'oeuvres.php';

$oeuvreExiste = false;

// On récupère l'oeuvre dans le tableau oeuvres
foreach ($oeuvres as $oeuvre):
    if ($oeuvre['id'] === $_GET['id']):
        $oeuvreExiste = true;
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?=$oeuvre['img']?>" alt="<?=$oeuvre['title']?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?=$oeuvre['title']?></h1>
        <p class="artist"><?=$oeuvre['artist']?></p>
        <p class="description"><?=$oeuvre['description']?></p>
    </div>
</article>

<?php
    endif;
endforeach;

// Vérifier si l'œuvre existe
if (!$oeuvreExiste) {
    echo "L'œuvre demandée n'existe pas.";
}
?>

<?php include 'footer.php' ?>