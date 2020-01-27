<?php require('header.php');


    $team = [
        '"\assets/images/equipe/SITE WEB prВsentation.png"',
        '"\assets/images/equipe/SITE WEB prВsentation2.png"',
        '"\assets/images/equipe/SITE WEB prВsentation3.png"',
        '"\assets/images/equipe/SITE WEB prВsentation4.png"',
        '"\assets/images/equipe/SITE WEB prВsentation5.png"',
        '"\assets/images/equipe/SITE WEB prВsentation6.png"',
        '"\assets/images/equipe/SITE WEB prВsentation7.png"',
        '"\assets/images/equipe/SITE WEB prВsentation8.png"',
        '"\assets/images/equipe/SITE WEB prВsentation13.png"',
        '"\assets/images/equipe/SITE WEB prВsentation14.png"',
        '"\assets/images/equipe/SITE WEB prВsentation16.png"',
        '"\assets/images/equipe/SITE WEB prВsentation18.png"',
        '"\assets/images/equipe/SITE WEB prВsentation19.png"',
        '"\assets/images/equipe/SITE WEB prВsentation20.png"',
        '"\assets/images/equipe/SITE WEB prВsentation21.png"',
        '"\assets/images/equipe/SITE WEB prВsentation22.png"',

    ];

?>

<div class="container-fluid cardOfTeam">
    <div class="row">
        <?php foreach ($team as $people){?>
        <div class=" col">
            <img class="photoColis" id="photoColis" alt="photos d'un colistier" src= <?php echo $people;?>>
        </div>
        <?php };?> 


    </div>
</div>
<div class="sectionGroupPictures">
    <img class="groupPicture" src="assets/images/groupe37.jpg" alt="photo des colistiers">
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
