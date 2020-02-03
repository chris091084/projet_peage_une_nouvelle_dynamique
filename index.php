<?php
if(!empty($_POST)) {
    require('form.php');
}



    require_once('header.php');




?>


        <div class="block-nav">
            <img id="logo" class='logo' src="assets/images/LOGO_gris%20.png " alt="logo péage de roussillon">
            <h1> Le Péage, une nouvelle dynamique !</h1>

        </div>

    <section>
        <article class="article1">
            <div class="photo">
                <img class="photoCandidat" src="assets/images/SEB_ronde.png" alt="photo du candidat sébastien courion">
            </div>
            <div class="descrition" >
                <h2 class="nomSebastien">Sébastien COURION</h2>
                <p class="biographie">Agé de 36 ans, natif du Pays Roussillonnais et Péageois depuis 12 ans, je veux incarner le dynamisme et la jeunesse, tout en bénéficiant d’une expérience significative, qu’elle soit liée à mon parcours professionnel ou à mes engagements personnels. </p>
                <p class="biographie">Sur  le  plan  professionnel  tout  d’abord,  chargé  des  missions d’urbanisme au sein d’une intercommunalité, je veux mettre au service  du  Péage-de-Roussillon  mes  connaissances  en  gestion  des  collectivités  territoriales  et  mes  compétences  en  matière  d’aménagement du territoire. Gérer une commune est une mission parfois compliquée mais ô combien passionnante, j’y suis prêt !</p>
                <p class="biographie">Parallèlement, j’ai également pu me rendre compte à quel point il est important, pour porter un projet communal ambitieux, d’être au fait des dispositions législatives, de maîtriser les nombreux outils réglementaires à disposition des élus locaux pour faire vivre nos communes  ;  des  connaissances  acquises  depuis  bientôt  3  ans  dans le cadre de mes fonctions de suppléant de députée.</p>
            </div>
        </article>
        <article class="about">
            <h2 class="election">Élections Municipales 2020</h2>
            <aside>
                <p class="p-aside1">NOS VALEURS : </p>
                <div class="p-aside">
                    <img class="pastille-mobile" src="assets/images/petiteJaune.png" alt="pastille jaune"> <!--ces images sont pour la version mobile-->
                    <p class="p-aside2"><img class="pastille" src="assets/images/petiteJaune.png" alt="pastille jaune"><span class="titresValeurs">Cohésion :</span> Un projet qui uni, qui prend en compte les diversités et qui soutient la richesse du tissu associatif. </p>

                    <img class="pastille-mobile" src="assets/images/petiteBleu.png" alt="pastille bleu">
                    <p class="p-aside2"><img class="pastille" src="assets/images/petiteBleu.png" alt="pastille bleu"><span class="titresValeurs">Développement durable :</span> Un modèle durable de société, un aménagement du territoire symbole de vitalité économique, de préservation des ressources naturelles et tendant à l’épanouissement de chacun. </p>

                    <img class="pastille-mobile" src="assets/images/petiteJaune.png" alt="pastille jaune">
                    <p class="p-aside2"><img class="pastille" src="assets/images/petiteJaune.png" alt="pastille jaune"><span class="titresValeurs">Innovation :</span> Des idées novatrices répondant aux besoins de la population et aux évolutions sociétales, pour une commune plus attractive. </p>

                    <img class="pastille-mobile" src="assets/images/petiteBleu.png" alt="pastille bleu">
                    <p class="p-aside2" id="contact"><img class="pastille" src="assets/images/petiteBleu.png" alt="pastille bleu"><span class="titresValeurs">Transparence :</span> Une vision démocratique de l’action publique, alliant concertation et communication. Une exemplarité des élus, garant de la maîtrise du budget. </p>
                </div>
            </aside>
        </article>

        <!--Section: Contact v.2-->
        <section class="mb-4 contact" >

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous</h2>
            <h2 class='messageEnvoyé'><?php echo str_replace('/',' ',$_GET['messageSent'])?></h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Si vous voulez nous contacter ou nous rejoindre. Vous pouvez le faire ci dessous.</p>

            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="form.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Votre nom et prénom</label>
                                    <input placeholder="insérer ici votre nom et prénoms" type="text" id="name" name="name" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Votre email</label>
                                    <input placeholder="insérer ici votre email" type="text" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Sujet</label>
                                    <input placeholder="insérer ici votre sujet" type="text" id="subject" name="subject" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Votre message</label>
                                    <textarea placeholder="insérer ici votre text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                </div>

                            </div>
                            <div class="button">
                            <button class="btn btn-light" type="submit" name="submit">Envoyer</button>
                            </div>
                        </div>

                        <!--Grid row-->

                    </form>


                </div>
                <!--Grid column-->

                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->


    </section>

<?php require_once ('footer.php')?>
