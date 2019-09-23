<!DOCTYPE html>
<html lang="fr">

    <?php 
        $htmlTitle="Connexion | Admin | Cabinet G.KAUFMANN";
        $htmlContent="";
        require './views/admin/inc/head.php';
    ?>

    <body style="background-color: #243167;color:white;">

        <div class="container">
            <div class="row text-center " style="padding-top:100px;">
                <div class="col-md-12">
                    <img src="./public/img/logo/logo4white.png" style="width:50vh;">
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel-body">
                        <form role="form" method="POST" action="./?treatment" style="display:flex;flex-direction:column;justify-content:center;">
                            <?php echo $notif ?>
                            <h5>Entrez vos identifiants pour vous connecter</h5>
                            <br>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" name="adminLoginUser" placeholder="Nom d'utilisateur" required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="adminLoginPw" placeholder="Mot de passe" required>
                            </div>   
                            <button type="submit" class="btn btn-primary" name="formAdminLogin">Se connecter</button>
                            <hr>
                            <a href="./" style="color:white;text-align:center;">Retourner à l'accueil</a> 
                        </form>
                    </div>       
                </div>     
            </div>
        </div>
    </body>
</html>