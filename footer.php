

<footer >
    <div id="test" class="mt-5 pt-5 pb-5 footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                    <h2>Réseau social</h2>
                    <a href="https://www.facebook.com/LePeageunenouvelledynamique/"><img src="assets/images/F-FACEBOOK.png" class="pr-5 text-white-50 facebookLogo"></a>
                    <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                    <h4 class="mt-lg-0 mt-sm-3">Liens</h4>
                    <ul class="m-0 p-0">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="Equipe.php">L'équipe</a></li>
                        <li><a href="#contact">Rejoignez-nous</a></li>

                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                    <h4 class="mt-lg-0 mt-sm-4">Téléphone:</h4>
                    <p class="mb-0">06.73.35.82.06</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col copyright">
                    <p class=""><small class="text-white-50">© 2020. Christian COLEY  Florent BAILLE.</small></p>
                </div>
            </div>
        </div>
    </div>
    </footer>
<script type="text/javascript">
    //var element = document.getElementById('navbar');
    //element.onscroll = function(){
      //  alert("Vous m'avez cliqué !");
    //}
    // const elt = document.getElementById('logo');    // On récupère l'élément sur lequel on veut détecter le clic
    // elt.addEventListener('', function(){          // On écoute l'événement click
    //     elt.style.display = "none";               // On change le contenu de notre élément pour afficher "C'est cliqué !"
    // });
    const arrowUp = document.getElementById("navbar");

    console.log(window.scrollY);

    window.addEventListener("scroll", function(){

        if(window.scrollY==0){

            arrowUp.style.backgroundColor = 'transparent';
        }
        else{

            arrowUp.style.backgroundColor = "rgb(92, 74, 153)";
            arrowUp.style.transitionDuration = '0.5s';
        }
    }, false);

    const logoUp = document.getElementById("logo");



    window.addEventListener("scroll", function(){

        if(window.scrollY == 0){
            logoUp.style.width = '300px';
            logoUp.style.height = '300px';
            logoUp.style.position = 'absolute';
            logoUp.style.top = '10px';
            logoUp.style.top = '20px';

        }
        else{

             logoUp.style.width = '100px';
             logoUp.style.height = '100px';
             logoUp.style.position = 'absolute';
             logoUp.style.top = '10px';
            // logoUp.style.left = '0px';
            logoUp.style.transitionDuration = '0.8s';
        }
    }, false);

    const logoNav = document.getElementById("logoNav");



    window.addEventListener("scroll", function(){

        if(window.scrollY == 0 || screen.width <=990){

            logoNav.style.display = 'none';
        }
        else{
            logoNav.style.display = 'block';
            logoNav.style.transitionDuration = '0.5s';


        }
    }, false);

    const navResp = document.getElementById("navbar");

    window.addEventListener("scroll", function(){

        console.log(screen.width);
        if(window.scrollY == 0 && screen.width<=990){
            navResp.style.backgroundColor = 'rgb(92, 74, 153)';
        }

    }, false);

    const colorNav = document.getElementsByClassName("nav-link ");

    if (window.location.href == 'http://localhost:8000/mobilite.php'){
        colorNav.style.color = 'red';
    }
    console.log(window.location.href);







</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>

