<?php require('header.php');

$i=0;
    $team = [
        '"\assets/images/equipe/alain.png"' =>
            ["\"Je suis marié et père de 3 enfants.
Chef d’entreprise, acteur de la vie économique Péageoise, je suis Administrateur de Biens Immobiliers.
Les élections municipales sont l’occasion de proposer mes compétences et de m’impliquer au service de Tous.
Avec enthousiasme je suis Sébastien Courion et son équipe composée de personnes chaleureuses d’horizons divers.\""],

        '"\assets/images/equipe/amandine.png"'=>
            ["\"Nouvelle résidente sur la commune, élève dans une école de musique.
Je suis sensible au respect des règles de vie en communauté. J’aimerais agir afin que cette ville soit un lieu où il fait bon vivre.\""],

        '"\assets/images/equipe/asiye.png"'=>
            ["\"Péageoise depuis 40 ans, j’ai pu voir cette ville se développer au cours de toutes ces années, ce qui me motive à m’impliquer davantage dans des projets visant à améliorer le cadre de vie de notre commune. \""],

        '"\assets/images/equipe/daniel.png"'=>
            ["\"Je m’investis au sein de la liste « Le Péage, une nouvelle dynamique ! » portée par Sébastien Courion pour participer à l‘aménagement et à la réfection des voiries. Créer des trottoirs sécurisés aux abords des voies me semble être quelque chose d’important à mettre en place. \""],

        '"\assets/images/equipe/fabrice.png"'=>
            ["\"Natif du Péage-de-Roussillon, je veux m'engager pour rendre la commune plus vivante. Je suis attaché à ce que les projets menés soient issus d'un travail collectif avec chacun des membres du conseil municipal. \""],

        '"\assets/images/equipe/helene.png"'=>
            ["\"Je m'engage avec la liste « Le Péage, une nouvelle dynamique! » Pour redonner aux péageois le respect et la fierté de leur ville  \""],

        '"\assets/images/equipe/jamila.png"'=>
            ["\"Je suis technico commerciale dans le domaine de l'automobile, mère de 5 enfants.
Mon engagement aux côtés de Sébastien Courion est principalement animé par le désir d'apporter soutien et attention aux familles péageoises et plus particulièrement aux plus jeunes. \""],

        '"\assets/images/equipe/jacques.png"'=>
            ["\"Jeune retraité, je dispose à présent de temps pour m’investir pour ma commune. \""],

        '"\assets/images/equipe/juvenal.png"'=>
            ["\"Je suis marié et père de 4 enfants. Titulaire d’un diplôme d’Etat d’assistant de service social et Master de communication des organisations Humanitaire et Solidarité.
J’ai travaillé dans deux organismes non gouvernementaux en Afrique (OXFAM Québec et Croix Rouge Internationale).
Je travaille actuellement dans l’enseignement catholique à Lyon où je suis travailleur social chargé de la protection de l’enfance.
Je suis membre deux associations UFC que Choisir et Amnesty international.
Conseiller municipal sortant, l’équipe conduite par Sébastien Courion me paraît être la plus à même de conduire le renouveau nécessaire pour la commune.  \""],

        '"\assets/images/equipe/michele.png"'=>
            ["\"Je suis soucieuse du maintien des commerces de proximité et des services publics au sein de la commune, tout comme le maintien à domicile des personnes âgées.  \""],

        '"\assets/images/equipe/michelNav.png"'=>
            ["\"Je suis née au Péage de Roussillon, divorcée, deux enfants, trois petits-enfants et retraitée de l'usine ex Rhône Poulenc.
Depuis 2018, je suis bénévole à l'aide à la lecture au Centre Social et je me rends compte que s'occuper de l'Autre est très bénéfique pour soi-même … C'est pourquoi j'ai adhéré à la liste de Sébastien Courion qui est compétent et sincère. \""],

        '"\assets/images/equipe/pe.png"'=>
            ["\"Informaticien en profession libérale, pacsé, 2 filles, péageois depuis 12 ans. 
Je désire aider à une nouvelle dynamique au Péage-de-Roussillon pour une ville plus sure, plus agréable à vivre pour l’ensemble de ses habitants et ce tout en maîtrisant les dépenses. \""],

        '"\assets/images/equipe/rodolphe.png"'=>
            ["\"Célibataire sans enfants j’ai grandi dans le pays Beaurepairois que je connais très bien et installé en pays Roussillonnais depuis 2009. J’ai toujours été très engagé pour le patrimoine local dans le milieu associatif et la musique, une vraie passion depuis mon enfance.
Je souhaite m’engager encore plus au service de la collectivité avec Sébastien Courion qui, j’en suis certain, pourra apporter un nouveau souffle à notre commune et un engagement au service des Péageois. \""],

        '"\assets/images/equipe/sebastien.png"'=>
            ["\"Célibataire, sans enfant, je vis sur le Pays Roussillonnais depuis plus de 8 ans et j'ai appris à connaître ce territoire qui m'a accueilli. Je suis heureux de faire parti de la liste de Sébastien Courion qui rassemble la diversité de notre commune pour un même but : faire du Péage une ville où il fait bon vivre. \""],

        '"\assets/images/equipe/stephane.png"'=>
            ["\"Célibataire avec un enfant, je réside au Péage de Roussillon depuis plus de 10 ans.
J'ai rejoint Sébastien Courion et Une Nouvelle Dynamique parce que je partage beaucoup de ses idées sur l'économie locale et sur le Péage de Roussillon de demain, plus écologique, plus solidaire et proche de ses habitants. \""],

        '"\assets/images/equipe/yamina.png"'=>
            ["\"Gestionnaire formation, j’ai 50 ans, mariée et maman de 2 enfants. 
J'ai à cœur de créer une nouvelle dynamique pour Le Péage, afin de vivre ensemble en sécurité dans une ville soucieuse du bien-être de ses citoyens. \""],

    ];

$team_sombre = [
    '"\assets/images/equipe_sombre/alain.png"',
    '"\assets/images/equipe_sombre/amandine.png"',
    '"\assets/images/equipe_sombre/asiye.png"',
    '"\assets/images/equipe_sombre/daniel.png"',
    '"\assets/images/equipe_sombre/fabrice.png"',
    '"\assets/images/equipe_sombre/helene.png"',
    '"\assets/images/equipe_sombre/jamila.png"',
    '"\assets/images/equipe_sombre/jacques.png"',
    '"\assets/images/equipe_sombre/juvenal.png"',
    '"\assets/images/equipe_sombre/michele.png"',
    '"\assets/images/equipe_sombre/michelNav.png"',
    '"\assets/images/equipe_sombre/pe.png"',
    '"\assets/images/equipe_sombre/rodolphe.png"',
    '"\assets/images/equipe_sombre/sebastien.png"',
    '"\assets/images/equipe_sombre/stephane.png"',
    '"\assets/images/equipe_sombre/yamina.png"',
    '"\assets/images/equipe_sombre/alain.png"',

    ];



?>

<!--<div class="sectionGroupPicturesMobile">
    <img class="groupPictureMobile" src="assets/images/PHOTO_GROUPE.png" alt="photo des colistiers">
</div
-->
<div class="container-fluid cardOfTeam">
    <div class="row">
        <?php foreach ($team as $people=>$bio){?>

        <div class=" col">
            <img class="photoColis" id="photoColis" alt="photos d'un colistier" src= <?php echo $people;?>>
            <img class="photoSombreColis" alt="photos d'un colistier" src= <?php echo $team_sombre[$i];?>>
            <p class="textBio"><?php echo $bio[0];$i++;?></p>
        </div>
        <?php };?>


    </div>
</div>
<div class="sectionGroupPictures">
    <img class="groupPicture" src="assets/images/PHOTO_GROUPE.png" alt="photo des colistiers">
</div>

<!--<article class="article2">-->
<!--    <div class="photo">-->
<!--        <img class="photoColis" src="assets/images/SEB_ronde.png">-->
<!--    </div>-->
<!--    <div class="descrition" >-->
<!--        <p>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, culpa cumque doloribus earum libero molestias nam nobis nostrum obcaecati officiis porro quae ratione rerum tempora ut volupt</p>-->
<!--    </div>-->
<!---->
<!--</article>-->
<!--<article class="article1">-->
<!--    <div class="photo">-->
<!--        <img class="photoColis" src="assets/images/FACEBOOK%20présentation%20ABDI.jpg">-->
<!--    </div>-->
<!--    <div class="descrition" >-->
<!--        <p>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, culpa cumque doloribus earum libero molestias nam nobis nostrum obcaecati officiis porro quae ratione rerum tempora ut volupt</p>-->
<!--    </div>-->
<!--</article>-->
<!---->
<!--<article class="article2">-->
<!--    <div class="photo">-->
<!--        <img class="photoColis" src="assets/images/SEB_ronde.png">-->
<!--    </div>-->
<!--    <div class="descrition" >-->
<!--        <p>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, culpa cumque doloribus earum libero molestias nam nobis nostrum obcaecati officiis porro quae ratione rerum tempora ut volupt</p>-->
<!--    </div>-->
<!---->
<!--</article>-->
<?php require('footer.php');
?>
