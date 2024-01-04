<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Acceuil</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1>Choisissez votre organisation</h1>
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/footing.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Footing</h1><!--title-->
                            <p><!--content-->
                            Selon les chercheurs, la fréquence optimale, 
                            pour profiter des bienfaits du jogging sans nuire à la santé,
                            est de trois joggings par semaine, d'une durée de 20 à 48 minutes chacun
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Rejoindre  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/mountain-biking.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Mountain Bike</h1><!--title-->
                            <p><!--content-->
                            Vivez une experience unique et rencontrer 
                            la crème des Mountain-Bikers.
                             Leur crédo est simple : repousser les limites de la physique. 
                             Ou comment aller plus vite, plus haut en VTT avec des figures
                              toujours plus déjantées. Chaud devant.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Rejoindre <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/party.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Soirée Privée</h1><!--title-->
                            <p><!--content-->
                            une fête d'anniversaire ou un mariage.
                             Un événement privé ne peut pas être annoncé ni ouvert au public.
                             Mais avec Unique Events , rencontrer des gens qui sont aussi 
                             adorable que vous!
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Rejoindre <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/b-meeting.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Parlons Business</h1><!--title-->
                            <p><!--content-->
                            Ici nous parlons des business rentables et de tout ce qui peut te permettre de te faire plus d'argent.

                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Rejoindre  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon--> 
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
