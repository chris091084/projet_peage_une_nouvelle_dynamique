<?php require('index/form.php');

require('header.php');
?>


        <div class="block-nav">
            <img id="logo" class='logo' src="assets/images/LOGO_gris%20.png ">
            <h1> Le Péage, une nouvelle dynamique !<img src=""></h1>
        </div>

    <section>
        <article class="article1">
            <div class="photo">
                <img class="photoCandidat" src="assets/images/SEB_ronde.png">
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
                <p class="p-aside1">Cette volonté de vouloir améliorer votre quotidien, je la porterai avec le soutien de 2 forces :</p>
                <div class="p-aside">
                    <img class="pastille-mobile" src="assets/images/petiteJaune.png"> <!--ces images sont pour la version mobile-->
                    <p class="p-aside2"><img class="pastille" src="assets/images/petiteJaune.png">L’équipe que j’aurai plaisir à conduire, composée de femmes et d’hommes venus d’horizons divers avec des profils variés, prête à s’investir pour la commune, où chacun saura faire abstraction de toutes valeurs partisanes pour ne se soucier que de l’intérêt général pour Le-Péage-de-Roussillon. Elle sera ma source d’inspiration et ma capacité d’innovation.</p>
                    <img class="pastille-mobile" src="assets/images/petiteRose.png">
                    <p class="p-aside2"><img class="pastille" src="assets/images/petiteRose.png">Habitants, commerçants, artisans, salariés, agents des services publics, professions libérales, demandeurs d’emploi, retraités mais aussi jeunes en formation ou personnes en reconversion professionnelle ; membres de nos associations festives, culturelles et sportives, ou tout simplement Péageois(es), le programme que je veux porter sera enrichi de vos idées et de vos propositions novatrices dont bon nombre d’entre vous m’ont déjà fait part.</p>
                </div>
            </aside>
        </article>

        <!--Section: Contact v.2-->
        <section class="mb-4" id="contact">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Si vous voulez nous contacter ou nous rejoindre. Vous pouvez le faire ci dessous.</p>

            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="index/form.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="name" class="">Votre nom et prénom</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Votre email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Sujet</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                    <label for="message">Votre message</label>
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
