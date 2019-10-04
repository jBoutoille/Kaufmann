<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>
    <style>
        .customLinkInfosDIV{
            background-color:var(--colorBlue);
            color:white;
            padding:3vh;
            font-family:"Roboto","Arial";
            text-transform:uppercase;
        }
        .customLinkInfosDIV:hover{
            text-decoration: none;
            color:white;
            background-color:#60a3bc;
        }
    </style>

    <div style="text-align: center; padding: 20.5vh 10vh;">
        <i class="fas <?= $infosICON ?> fa-4x foo-2" style="margin-bottom:3vh"></i>
        <h1 style="margin-bottom:3vh" class="foo-3"><?= $infosH1 ?></h1>
        <p class="foo-4" style="padding-bottom:3vh;"><?= $infosP ?></p>
        <a class="customLinkInfosDIV" href="<?= $infosLINK ?>"><?= $infosLINKTEXT ?></a>
    </div>

<?php
    $htmlTitle = 'Informations | ' . $RConfig['configNomSite'];
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>