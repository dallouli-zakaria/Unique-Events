<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php 
                require_once 'utils/functions.php';
                echo '<a href = "index.php" class = "navbar-brand">
                    UNIQUE EVENTS
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php 
                
                if(is_logged_in()){
                    require_once 'utils/functions.php';
                    
                    echo '<li><a href = "index.php">Acceuil</a></li>';
                    //viewEvents.php
                    echo '<li><a href = "#">Évènement</a></li>';
                    //viewLocations.php 
                    echo '<li><a href = "#">Localisations</a></li>';
                    //contact.php
                    echo '<li><a href = "#">Contactez nous</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Se deconnecter <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }  
               
                else {
                    echo '<li><a href = "index.php">Acceuil</a></li>';
                    //events2.php
                    echo '<li><a href = "#">Évènement</a></li>';
                    //locations2.php
                    echo '<li><a href = "#">Localisations</a></li>';
                    //contact.php
                    echo '<li><a href = "#">Contactez nous</a></li>';
                    echo '<a href = "login.php"><button type = "button" class = "btn btn-default navbar-btn" data-target = "#login" >Se connecter <Span class="glyphicon glyphicon-log-in"></span></button></a>';
                }
                ?>
                



                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--modal for login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><!--modal header-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title col-md-6 col-md-offset-3" id="myModalLabel">Se connecter</h4><!--modal title-->
                            </div>
                            <div class="row">
                                <div class="modal-body"><!--modal content-->
                                    <div class ="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class = "form-group"><!--username-->
                                                <label for="username">Nom d'utulisateur:</label>
                                                <input type="text"
                                                       name="username"
                                                       class="form-control"
                                                       value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['username'])) echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group"><!--password-->
                                                <label for="password">Mot de passe:</label>
                                                <input type="password"
                                                       name="password"
                                                       class="form-control"
                                                       value=""
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['password'])) echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <button type="submit" class = "btn btn-default loginbtn">Se connecter</button><!--login button-->
                                            <a class="btn btn-default navbar-btn rgsterbtn" href = "register_form.php">S'authentiifier</a><!--register button-->
                                        </form>
                                    </div>
                                </div><!--modal body div-->
                            </div><!--row div-->
                            <div class="modal-footer"><!--modal footer-->
                            <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Fermer</button><p><!--close button-->
                            </div><!--modal footer div-->
                        </div><!--modal content div-->
                    </div><!--modal dialog div-->
                </div><!--modal div-->
            </ul>
        </div><!--container div-->
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron"><!--jumbotron-->
                <h1>Bienvenue dans UNIQUE EVENTS</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->

                Organiser ou bien rejoignez des événements divers , et vivez l'instant ! 
                </p>
                
            </div>
        </div>
    </div>
</header>