    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
                <div class="col-12" id="contentOnVideo">

                    <h2 class="text-center">Quizz</h2>
                    <table class="table mb-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Quizz</th>
                                <th scope="col">Modifier</th>                             
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            $i=0;
                            foreach($recupQuizzTheme as $quizz) { $i++; ?>
                            
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td><?=htmlentities($quizz->themes)?></td>
                                    <td><a href="/controllers/list-appointmentCtrl.php?id=<?=$quizz->id?>"><i class="icon-cogs"></i></a></td>
                                    <td><a href="/controllers/quizzAddCtrl.php?id=<?=$quizz->id?>"><i class="icon-remove-sign"></i></a></td>
                                </tr>

                            <?php } ?>


                        </tbody>
                        <tfoot>

                                <tr>
                                    <td></td>
                                    <td> <a type="button" href="/controllers/quizzAddCtrl.php">Créer un nouveau quizz</a></td>
                                </tr>
                        </tfoot>
                    </table>

      
            </div> 
    </div>