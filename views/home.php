            <!-- Fullscreen Video Background -->
            <div class="container-fluid px-0" id="myVideo">
                <div class="row">

                    <video autoplay muted loop class="position-fixed">
                        <source src="assets/img/BackgroundVideo/myVideo2.mp4" type="video/mp4">
                    </video>
                    <!-- Contenu sur ma vidéo -->
                    <div id="contentOnVideo">
                        <h1>Espace et Astronomie</h1>
                        <p> Pendant des millions d'années, l'espace est resté hors de portée des hommes, cloués au sol
                            sur leur planète. Comme
                            tout objet inaccessible, il fait rêver et donne lieu à de nombreuses interprétations. Des
                            siècles durant, on a d'ailleurs
                            cru que le ciel était la résidence des dieux, reposant dans la béatitude éternelle.
                            Les hommes ont voulu en avoir le cœur net et sont allés sur place. Ils n'y ont pas trouvé de
                            présence divine, mais
                            plutôt un endroit étrange, sans air, ni bruit, ni odeur. Un paradoxe de la nature
                            caractérisé par l'absence et
                            pourtant si hostile : il est tantôt le monde du silence, tantôt le théâtre de gigantesques
                            déluges énergétiques.
                            Une énergie du vide, que les scientifiques ont bien du mal à cerner, bousculant à plaisir
                            notre perception usuelle
                            du monde..</p>
                        <br>
                        <p>
                            L’astronomie, une des plus anciennes disciplines savantes de l’Histoire, caractérise la
                            science de l’observation
                            des astres. Elle étudie leur position, leur mouvement, leur structure, mais tente également
                            d’expliquer leur origine
                            ainsi que leurs propriétés physiques et chimiques.
                            Dès l’Antiquité, l’Homme s’est mis à regarder vers le ciel, cherchant les réponses de son
                            origine dans les étoiles.
                            Certains phénomènes comme la rotation du Soleil ou les changements de Lune lui étaient déjà
                            familiers il y a des
                            dizaines de milliers d’années, ce qui lui permit de donner une mesure au temps.
                        </p>
                    </div>
                </div>
            </div>


            <!-- Création Navbar -->
            <div class="bg-dark">
                <div class="container-fluid">
                    <div class="row">
                        <nav id="navbar" class="col navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                            <!-- Horloge -->
                            <div id="clock">
                                <div id="clock-face">
                                    <div id="hours" class="hand"></div>
                                    <div id="minutes" class="hand"></div>
                                    <div id="seconds" class="hand"></div>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarContent">
                                <span class="navbar-toggler-icon"></span></button>
                            <div id="navbarContent" class="collapse navbar-collapse">
                                <ul class="navbar-nav ">
                                    <li class="nav-item active">
                                        <a class="aNavbar nav-link" href="index.html">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="activites.html">Activités</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="inscription.html">Inscription</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="quizz.html">Quizz</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="classement.html">Classement</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="monCompte.html">Mon compte</a></li>
                                </ul>
                                <div id="divInscriptionConnexion">
                                    <ul class="d-flex">
                                        <li> <button type="button" class="btn btn-dark btn-lg">Se connecter</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>


            <!-- Div englobant caroussel et Sommaire -->
            <div class="container-fluid">
                <div class="row">

                    <!-- Sommaire -->
                    <div id="summary" class="col-lg-4">
                        <h2>Sommaire</h2>
                        <ol>
                            <li>
                                I. Introduction
                            </li>
                            <li>
                                II. Les planètes <ol>
                                    <li>1. Les planètes tellurique</li>
                                    <li>2. Les planètes rocheuses</li>
                                    <li>3. Les planètes naines</li>
                                </ol>
                            </li>
                            <li>
                                III. Le système solaire <ol>
                                    <li>1. Les astéroïdes</li>
                                    <li>2. Les comètes</li>
                                </ol>
                            </li>
                            <li>
                                IV. La voie Lactée
                            </li>
                        </ol>
                    </div>

                    <!-- Caroussel creation -->
                    <div class="carousel slide col-lg-8" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <!-- On cible le nombre d'image -->
                            <li data-target="#myCaroussel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCaroussel" data-slide-to="1"></li>
                            <li data-target="#myCaroussel" data-slide-to="2"></li>
                            <li data-target="#myCaroussel" data-slide-to="3"></li>
                        </ol>
                        <div id="myCaroussel" class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- Ajout des images dans le caroussel -->
                                <img class="d-block w-100 img-thumbnail" src="assets/img/Caroussel/TerreCaroussel.png "
                                    alt="Notre planète la Terre">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="">Notre planète la Terre</h5>
                                    <p>La Terre est la troisième planète du sytème solaire, c'est une planète tellurique
                                        ( essentiellement composée de roches
                                        et de métal qui possède trois enveloppes concentriques : le noyau, le manteau et
                                        la croûte). Elle est âgée de 4,54 milliards d'années.

                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-thumbnail" src="assets/img/Caroussel/SiCaroussel.png"
                                    alt="Notre Système Solaire">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Le système Solaire</h5>
                                    <p>Le système solaire est composé de divers éléments : d'étoiles, de planètes (
                                        telluriques, géantes gazeuses / géantes de glaces, naines),
                                        d'astéroïdes et de comètes.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-thumbnail"
                                    src="assets/img/Caroussel/VoixLactéeCaroussel.jpg"
                                    alt="La Voie Lactée notre galaxie">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>La Voie Lactée</h5>
                                    <p>La Voie Lactée est une galaxie spirale semblable à la galaxie d'Andromède, sa
                                        forme générale est un disque de 80 000 années lumière de diamètre.
                                        Elle contient environ 140 milliards d'étoiles dont le Soleil.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100 img-thumbnail" src="assets/img/Caroussel/UniversCaroussel.jpg"
                                    alt="L'Univers">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>L'Univers</h5>
                                    <p>On regroupe sous le terme d'« Univers » l'ensemble de tout ce qui existe, il est
                                        en perpétuel expansion. L'histoire de
                                        l’univers commence il y a quelque 13,7 milliards d'années dans une soupe
                                        extrêmement dense et chaude. Les lois de la
                                        physique telles que nous les connaissons n'ont pas cours au sein de cette soupe.
                                    </p>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCaroussel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCaroussel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="containerFluidDiv container-fluid">
                <div class="row">
                    <div class="d-flex">
                        <div class="whiteDivs col-lg-8">
                            <h2>I. Introduction</h2>
                            <p>Le système solaire est un système planétaire composé d'une étoile, de huit planètes et de milliards de
                                corps dont seulement une infime partie est connue. Il s'agit de notre environnement proche, en banlieue
                                de la Galaxie et dans l'infinité de l'univers.</p>
                            <p>De notre étoile, le Soleil, en passant par les planètes telluriques de Mercure à Mars, ou les géantes
                                gazeuses comme Jupiter et Saturne avec leurs anneaux et leur cortège de satellites, et jusqu'à Éris au fin
                                fond du système solaire, sans oublier les astéroïdes, les comètes et les planètes naines, vous découvrirez
                                quelques corps célestes qui nous entourent.</p>
                            <p>Le site est un concentré des connaissances scientifiques de chacun des corps de notre système solaire.
                                Il s'agit d'une collecte d'informations destinée à un large public où aucune expérience ou connaissance 
                                spéciale n'est nécessaire.</p>
                        </div>
                        <div class="col-lg-4">
                            <p>IMAGE</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="containerFluidDiv container-fluid">
                <div class="row">
                    <div class="d-flex">
                        <div class="whiteDivs col-lg-8">
                            <h2 class="text-left">II. Les planètes</h2>
                            <p>Selon la nouvelle définition de l'Union Astronomique Internationale, une planète est un corps céleste qui est en 
                                orbite autour du Soleil, qui possède une masse suffisante pour que sa gravité l'emporte sur les forces de cohésion
                                 du corps solide et le maintienne en équilibre hydrostatique (forme ronde), et qui a éliminé tout corps se 
                                 déplaçant sur une orbite proche.</p>
                            <p>Selon cette nouvelle définition, le système solaire contient donc dorénavant 8 planètes : Mercure, Vénus, la Terre, Mars, Jupiter
                                Saturne, Uranus et Neptune.</p>
                            <p>Il existe aussi les planètes naines dont les premières sont : Pluton, Eris, Makemake, Haumea et Cérès.</p>
                            <p>Si certaines planètes du système solaire sont visibles la nuit dans le ciel, c'est parce qu'elles réfléchissent 
                                la lumière du Soleil, contrairement aux étoiles qui brillent de leur propre feu.</p>
                            <p>La définition d'une planète telle que reprise ci-dessus dit en substance qu'un corps doit présenter une masse 
                                d'au moins 5x10 <sup>20</sup>  kg et un diamètre d'au moins 800 km pour être considéré comme une planète. Mais
                                 ce n'est pas tout. Le barycentre ou centre de gravité du système doit également se situer en dehors de l'astre
                                 primaire.</p>
                              
                        </div>
                        <div class="col-lg-4">
                            <p><img src="img/planete.jpg" alt="Une planète dans la galaxie"></p>
                        </div>
                    </div>
                  
                            <div class="d-flex">
                                <div class="whiteDivs col-lg-4">
                                    <h3>1. Les planètes tellurique</h3>
                                    <p>
                                    Une planète tellurique (ou rocheuse) est une planète essentiellement composée de roches et de métal qui possède
                                     trois enveloppes concentriques : le noyau, le manteau et la croûte. Sa surface est solide et composée
                                    principalement de matériaux non volatils, généralement des roches silicatées et du fer métallique. Sa densité est
                                    donc relativement élevée, comprise entre 4 et 5,7. </p>
                                    <p> Le Système solaire possède quatre planètes telluriques : Mercure, Vénus, la Terre et Mars</p>
                                    <p> Les planètes telluriques sont beaucoup plus petites que les planètes gazeuses mais ont une densité 
                                        beaucoup plus élevée car elles sont composées de fer et de silicates. </p>
                                    <p> Les planètes telluriques ont à peu près toutes la même structure : un noyau central métallique
                                        (souvent du fer) entouré d'un manteau silicaté. A leur surface elles possèdent des canyons, des cratères,
                                        des montagnes et des volcans. Elles possèdent des atmosphères secondaires, c'est à dire des atmosphères
                                        générées via le volcanisme interne ou les impacts de comète.</p>
                                </div>
                                <div class="col-lg-8">
                                    <p> <img src="img\telluriques.jpg" alt=""> </p>
                                </div>
                            </div>


                            <div class="d-flex">
                                <div class="col-lg-4">
                                    <p>IMAGE</p>
                                </div>
                                <div class="whiteDivs col-lg-8">
                                    <h3 class="text-right">2. Les planètes rocheuses</h3>
                                    <p class="text-right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dolores in culpa quasi dignissimos esse eligendi ratione aperiam, explicabo iusto itaque praesentium laborum excepturi illo harum quia minus provident quis.</p>
                                </div>
                            </div>


                            <div class="d-flex">
                                <div class="whiteDivs col-lg-8">
                                    <h3>3. Les planètes naines</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque error recusandae possimus. Ad illo sed veniam numquam enim at est pariatur, dolorum quaerat sit laudantium ut necessitatibus nemo temporibus aliquam.</p>
                                </div>
                                <div class="col-lg-4">
                                    <p>IMAGE</p>
                                </div>
                            </div>
                   
                </div>
            </div>

            <div class="containerFluidDiv container-fluid">
                <div class="row">
                    <div class="d-flex">
                        <div class="whiteDivs col-lg-8">
                            <h2>III. Le système solaire</h2>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi magnam pariatur, ducimus porro enim qui delectus aliquam esse quae libero. Sapiente provident rem soluta nemo asperiores aspernatur unde quae accusamus.</p>
                        </div>

                        <div class="col-lg-4">
                            <p>IMAGE</p>
                        </div>

                    </div>

              
                            <div class="d-flex">
                                <div class="whiteDivs col-lg-8">
                                    <h3>1. Les astéroïdes</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi tempora minus aperiam consectetur tempore commodi magnam ex, sunt, amet laudantium deleniti veritatis voluptatibus dolor? Rerum rem distinctio quidem tenetur at.</p>
                                </div>
                                <div class="col-lg-4">
                                    <p> IMAGE</p>
                                </div>
                            </div>

                                <div class="d-flex">
                                    <div class="col-lg-4">
                                        <p> IMAGE</p>
                                    </div>
                                    <div class="whiteDivs col-lg-8">
                                        <h3 class="text-right">2. Les comètes</h3>
                                        <p class="text-right"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi tempora minus aperiam consectetur tempore commodi magnam ex, sunt, amet laudantium deleniti veritatis voluptatibus dolor? Rerum rem distinctio quidem tenetur at.</p>
                                    </div>
                                </div>

                </div>
            </div>


            <div class="containerFluidDiv container-fluid">
                <div class="row">
                        <div class="whiteDivs col-lg-12">
                            <h2>IV. La voie Lactée</h2>
                            <div class="d-flex mb-4">
                                <div class="col-lg-8">
                                    <img src="img/voieLactee.jpg" alt="Schéma de la galaxie">
                                </div>
                                <div class="text-left col-lg-4">
                                    <p>La Voie lactée est la galaxie à laquelle appartient le système solaire. On la désigne couramment comme la Galaxie,
                                        avec un G majuscule.</p>
                                        <p>Il s'agit d'une galaxie spirale semblable à la Galaxie d'Andromède. Sa forme générale est un disque de 80 000 années
                                           lumière de diamètre comportant un bulbe central. Le bulbe est entouré d'un halo sphérique de faible densité de
                                           100 000 al de diamètre. Elle contient environ 140 milliards d'étoiles dont le Soleil.</p>
                                        <p>Le centre galactique abrite un objet compact de très grande masse qui est un trou noir supermassif dont la masse
                                            est égale à 4 millions de fois celle du Soleil.</p>  
                                </div>
                                
                           </div>
                  
                            <p>La Galaxie est composée de plusieurs bras spiraux.
                                <ul>
                                    <li>Bras de Persée</li>
                                    <li>Bras de la règle et du Cygne</li>
                                    <li>Bras Ecu-Croix</li>
                                    <li>Bras Sagittaire-Carène</li>
                                    <li>Bras d'Orion</li>
                                </ul>
                            </p>
                            <p>Le système solaire est situé dans le bras d'Orion. Il se trouve proche de la périphérie à environ 28 000
                                années-lumière du centre galactique, et à 50 al du plan équatorial. Il fait le tour de la Galaxie en 240
                                millions d'années. Le système solaire aurait donc effectué entre 18 et 20 révolutions galactiques depuis 
                                sa formation voici 4,55 milliards d'années. En même temps, il oscille de part et d'autre du plan galactique
                                avec une période de 66 millions d'années. Il traverse ce plan toutes les 33 millions d'années.</p> 
                            
                            <p>La Voie lactée appartient à un groupe de galaxies simplement appelé Groupe local. Il comprend deux grandes
                                galaxies : la Voie lactée et la galaxie d'Andromède, ainsi que quelques objets intermédiaires et plus de 25
                                galaxies naines. Le Groupe local est organisé suivant deux sous-groupes, chacun centré sur la Voie lactée et 
                                M31 respectivement. Le Groupe local fait lui-même partie d'une structure plus vaste, un amas de galaxies appelé 
                                amas de la Vierge. Cet amas est lui-même au centre d'une structure plus large, un superamas, appelé pour cette
                                raison superamas de la Vierge, ou superamas Local.</p>
                        </div>
                    
                </div>
            </div>



        <!-- <div id="divSocialsNetworks">
                            <ul>
                                <li> <a href="https://twitter.com/"> <img src="assets/img/Socials/twitter.png" alt="Mon Twitter"></a></li>
                                <li> <a href="https://www.facebook.com/"> <img src="assets/img/Socials/facebook.png" alt="Mon Facebook"></a></li>
                                <li> <a href="https://www.linkedin.com/"> <img src="assets/img/Socials/linkedin.png" alt="Mon Linkedin"></a></li>
                                <li> <a href="https://github.com/"> <img src="assets/img/Socials/github.png" alt="Mon Github"></a></li>
                            </ul>
                        </div> -->

