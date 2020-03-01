<?php require('header.php');

$i=0;
    $team = [
        '"\assets/images/equipe/02.png"' =>
            ["\"J’ai 50 ans, je suis mariée et maman de 2 enfants. J’exerce la profession de gestionnaire de formation.J'ai à cœur de créer une nouvelle dynamique pour Le Péage, afin de vivre ensemble en sécurité dans une ville soucieuse du bien-être de ses citoyens. 
\""],

        '"\assets/images/equipe/03.png"'=>
            ["\"Célibataire sans enfants j’ai grandi dans le pays Beaurepairois que je connais très bien et installé en pays Roussillonnais depuis 2009. J’ai toujours été très engagé pour le patrimoine local dans le milieu associatif et la musique, une vraie passion depuis mon enfance.
\""],

        '"\assets/images/equipe/04.png"'=>
            ["\"Je souhaite m’engager encore plus au service de la collectivité avec Sébastien Courion qui, j’en suis certain, pourra apporter un nouveau souffle à notre commune et un engagement au service des Péageois.
\""],

        '"\assets/images/equipe/05.png"'=>
            ["\"Je suis marié et père de 3 enfants. Chef d’entreprise, acteur de la vie économique Péageoise, je suis Administrateur de Biens Immobiliers. Les élections municipales sont l’occasion de proposer mes compétences et de m’impliquer au service de Tous. Avec enthousiasme je suis Sébastien Courion et son équipe composée de personnes chaleureuses d’horizons divers.
\""],

        '"\assets/images/equipe/06.png"'=>
            ["\"Je suis née au Péage de Roussillon, divorcée, deux enfants, trois petits-enfants et retraitée de l'usine ex Rhône Poulenc. Depuis 2018, je suis bénévole à l'aide à la lecture au Centre Social et je me rends compte que s'occuper de l'Autre est très bénéfique pour soi-même … C'est pourquoi j'ai adhéré à la liste de Sébastien Courion qui est compétent et sincère.
\""],

        '"\assets/images/equipe/07.png"'=>
            ["\"Je suis marié et père de 4 enfants. Titulaire d’un diplôme d’Etat d’assistant de service social et Master de communication des organisations Humanitaire et Solidarité.J’ai travaillé dans deux organismes non gouvernementaux en Afrique (OXFAM Québec et Croix Rouge Internationale). Je travaille actuellement dans l’enseignement catholique à Lyon où je suis travailleur social chargé de la protection de l’enfance. Je suis membre deux associations UFC que Choisir et Amnesty international. Conseiller municipal sortant, l’équipe conduite par Sébastien Courion me paraît être la plus à même de conduire le renouveau nécessaire pour la commune. 
\""],

        '"\assets/images/equipe/08.png"'=>
            ["\"Je suis technico commerciale dans le domaine de l'automobile, mère de 5 enfants. Mon engagement aux côtés de Sébastien Courion est principalement animé par le désir d'apporter soutien et attention aux familles péageoises et plus particulièrement aux plus jeunes.
\""],


        '"\assets/images/equipe/09.png"'=>
            ["\"Célibataire avec un enfant, je réside au Péage de Roussillon depuis plus de 10 ans. J'ai rejoint Sébastien Courion et Une Nouvelle Dynamique parce que je partage beaucoup de ses idées sur l'économie locale et sur le Péage de Roussillon de demain, plus écologique, plus solidaire et proche de ses habitants.
\""],

        '"\assets/images/equipe/10.png"'=>
            ["\"Péageoise depuis 40 ans, j’ai pu voir cette ville se développer au cours de toutes ces années, ce qui me motive à m’impliquer davantage dans des projets visant à améliorer le cadre de vie de notre commune.
\""],

        '"\assets/images/equipe/11.png"'=>
            ["\"Natif du Péage-de-Roussillon, je veux m'engager pour rendre la commune plus vivante. Je suis attaché à ce que les projets menés soient issus d'un travail collectif avec chacun des membres du conseil municipal.
\""],

        '"\assets/images/equipe/12.png"'=>
            ["\"Nouvelle résidente sur la commune, élève dans une école de musique. Je suis sensible au respect des règles de vie en communauté. J’aimerais agir afin que cette ville soit un lieu où il fait bon vivre.
\""],

        '"\assets/images/equipe/13.png"'=>
            ["\"Je m’investis au sein de la liste « Le Péage, une nouvelle dynamique ! » portée par Sébastien Courion pour participer à l‘aménagement et à la réfection des voiries. Créer des trottoirs sécurisés aux abords des voies me semble être quelque chose d’important à mettre en place.
\""],

        '"\assets/images/equipe/14.png"'=>
            ["\"J’ai un enfant de 20 ans et habitante depuis 20 ans au Péage de Roussillon. Je veux que ma ville soit plus dynamique comme notre liste, et que les personnes aient envie de s’arrêter pour admirer notre ville.
\""],

        '"\assets/images/equipe/15.png"'=>
            ["\"Célibataire, sans enfant, je vis sur le Pays Roussillonnais depuis plus de 8 ans et j'ai appris à connaître ce territoire qui m'a accueilli. Je suis heureux de faire parti de la liste de Sébastien Courion qui rassemble la diversité de notre commune pour un même but : faire du Péage une ville où il fait bon vivre.
\""],

        '"\assets/images/equipe/16.png"'=>
            ["\"Originaire de Lyon, Je suis arrivée au Péage-de-Roussillon il y a 3 ans pour nous rapprocher du travail de mon mari à Vienne. J'ai un enfant de 7ans scolarisé sur le Péage, je suis attaché à ce que la commune offre à nos enfants les meilleures conditions pour réussir leur apprentissage. J'ai appris à connaître et apprécié la richesse de ma commune et souhaite participer à son évolution. Je soutiens Sébastien Courion qui apportera du renouveau pour la gestion de la commune.
\""],

        '"\assets/images/equipe/17.png"'=>
            ["\"Informaticien en profession libérale, pacsé, 2 filles, péageois depuis 12 ans. Je désire aider à une nouvelle dynamique au Péage-de-Roussillon pour une ville plus sure, plus agréable à vivre pour l’ensemble de ses habitants et ce tout en maîtrisant les dépenses.
\""],

        '"\assets/images/equipe/18.png"'=>
            ["\"J’ai rejoint la liste « Le Péage, une nouvelle dynamique » car je suis attachée au développement d’une politique intercommunale de la petite enfance.
\""],

        '"\assets/images/equipe/19.png"'=>
            ["\"Jeune retraité, je dispose à présent de temps pour m’investir pour ma commune.
\""],

        '"\assets/images/equipe/20.png"'=>
            ["\"Je rejoins Sébastien Courion pour ses valeurs et son dynamisme qu’il souhaite mettre au profit de la ville et de ses citoyens.
\""],

        '"\assets/images/equipe/21.png"'=>
            ["\"Je m’investis au sein de la liste portée par Sébastien Courion car je souhaite apporter mes idées pour re-dynamiser le commerce en centre-ville ainsi que les marchés.
\""],

        '"\assets/images/equipe/22.png"'=>
            ["\"Assurer le maintien à domicile des personnes âgées en leur proposant des services correspondant à leurs besoins (portage de repas à domicile, service de transport à la demande, lutte contre l’isolement…), c’est un sujet qui me tient à cœur.
\""],

        '"\assets/images/equipe/23.png"'=>
            ["\"Péageois depuis 3 ans, j’ai choisi de rejoindre une liste composée de personnes de sensibilités différentes mais toutes animées par la même volonté d’insuffler à notre commune le dynamisme qu’elle mérite.
\""],

        '"\assets/images/equipe/24.png"'=>
            ["\"Je suis soucieuse du maintien des commerces de proximité et des services publics au sein de la commune, tout comme le maintien à domicile des personnes âgées.
\""],

        '"\assets/images/equipe/25.png"'=>
            ["\"Je suis citoyen européen car de nationalité portugaise, ce qui m’offre la possibilité de m’investir dans la vie communale. Je rejoins avec plaisir la liste « Le Péage, une nouvelle dynamique ! ».
\""],

        '"\assets/images/equipe/26.png"'=>
            ["\"Péageoise depuis une dizaine d’année, l’envie de soutenir une équipe motivée et dynamique pour redonner des couleurs et de la vie à notre commune est une évidence !
\""],

        '"\assets/images/equipe/27.png"'=>
            ["\"Je souhaite voir la commune entrer dans une nouvelle dynamique écologique : économie d’énergie, réduction des déchets, et développement des transports en commun sont pour moi des actions prioritaires à mettre en œuvre.
\""],

        '"\assets/images/equipe/28.png"'=>
            ["\"Il est pour moi important de construire des nouveaux logements répondant aux exigences écologiques et aux besoins de la population, afin que chacun puisse s’y sentir bien. Je souhaite également plus d’activités pour les jeunes.
\""],

        '"\assets/images/equipe/29.png"'=>
            ["\"Pompier volontaire à la caserne du Péage-de-Roussillon, je souhaite poursuivre mon engagement pour la commune avec la liste conduite par Sébastien Courion.
\""],
    ];

$team_sombre = [
    '"\assets/images/equipe_sombre/02.png"',
    '"\assets/images/equipe_sombre/03.png"',
    '"\assets/images/equipe_sombre/04.png"',
    '"\assets/images/equipe_sombre/05.png"',
    '"\assets/images/equipe_sombre/06.png"',
    '"\assets/images/equipe_sombre/07.png"',
    '"\assets/images/equipe_sombre/08.png"',
    '"\assets/images/equipe_sombre/09.png"',
    '"\assets/images/equipe_sombre/10.png"',
    '"\assets/images/equipe_sombre/11.png"',
    '"\assets/images/equipe_sombre/12.png"',
    '"\assets/images/equipe_sombre/13.png"',
    '"\assets/images/equipe_sombre/14.png"',
    '"\assets/images/equipe_sombre/15.png"',
    '"\assets/images/equipe_sombre/16.png"',
    '"\assets/images/equipe_sombre/17.png"',
    '"\assets/images/equipe_sombre/18.png"',
    '"\assets/images/equipe_sombre/19.png"',
    '"\assets/images/equipe_sombre/20.png"',
    '"\assets/images/equipe_sombre/21.png"',
    '"\assets/images/equipe_sombre/22.png"',
    '"\assets/images/equipe_sombre/23.png"',
    '"\assets/images/equipe_sombre/24.png"',
    '"\assets/images/equipe_sombre/25.png"',
    '"\assets/images/equipe_sombre/26.png"',
    '"\assets/images/equipe_sombre/27.png"',
    '"\assets/images/equipe_sombre/28.png"',
    '"\assets/images/equipe_sombre/29.png"',

    ];



?>

<!--<div class="sectionGroupPicturesMobile">
    <img class="groupPictureMobile" src="assets/images/PHOTO_GROUPE.png" alt="photo des colistiers">
</div>
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
