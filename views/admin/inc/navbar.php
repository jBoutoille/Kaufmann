<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a <?php if(empty($_GET['p1'])){echo 'class="active-menu"';} ?> href="./?page=gk-admin"><i class="fa fa-dashboard"></i>Tableau de bord</a>
                    </li>
                    <li>
                        <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='config'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=config"><i class="fa fa-desktop"></i>Configuration du site</a>
                    </li>
                     <li>
                        <a <?php if(isset($_GET['p1'])&&startsWith($_GET['p1'], 'edit-')){echo 'class="active-menu-top"';} ?> href=""><i class="fa fa-code"></i>Modifications<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse <?php if(isset($_GET['p1'])&&startsWith($_GET['p1'], 'edit-')){echo 'in';} ?>">
                            <li>
                                <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='edit-header'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=edit-header"><i class="fa fa-code"></i>Haut de page</a>
                            </li>
                            <li>
                                <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='edit-presentation'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=edit-presentation"><i class="fa fa-code"></i>Présentation</a>
                            </li>
                            <li>
                                <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='edit-expertise'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=edit-expertise"><i class="fa fa-code"></i>Expertise</a>
                            </li>
                             <li>
                                <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='edit-services'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=edit-services"><i class="fa fa-code"></i>Services</a>
                            </li>
                             <li>
                                <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='edit-contact'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=edit-contact"><i class="fa fa-code"></i>Contact</a>
                            </li>
                            <li>
                                <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='edit-newsletter'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=edit-newsletter"><i class="fa fa-code"></i>Newsletter</a>
                            </li>                       
                             <li>
                                <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='edit-footer'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=edit-footer"><i class="fa fa-code"></i>Bas de page</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='newsletter'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=newsletter"><i class="fa fa-envelope"></i>Gestion de la Newsletter</a>
                    </li>

                    <li>
                        <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='actualite'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=actualite"><i class="fa fa-bullhorn"></i>Gestion de l'actualité</a>
                    </li>

                    <li>
                        <a <?php if(isset($_GET['p1'])&&$_GET['p1']=='candidatures'){echo 'class="active-menu"';} ?> href="./?page=gk-admin&p1=candidatures"><i class="fa fa-briefcase"></i>Candidatures reçues</a>
                    </li>
                   
                    <li>
                        <a href="./?action=logout"><i class="fa fa-power-off"></i>Se déconnecter</a>
                    </li>

        </ul>
    </div>
</nav>