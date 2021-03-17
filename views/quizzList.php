    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
            <!-- <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo.mp4" type="video/mp4">
            </video> -->
            <!-- Contenu sur ma vidéo -->
                <div class="col-12" id="contentOnVideo">

                <h2 class="text-center">Quizz</h2>

                    <form action="" method="POST">
                        <table class="table mb-5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Quizz</th>
                                    <th scope="col">Ajouter question(s)</th>
                                    <th scope="col">Modifier</th>                      
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; foreach($recupQuizzTitle as $quizz) { $i++; ?>
                                    
                                    <tr>
                                        <th scope="row"><?=$i?></th>
                                        <td><?=htmlentities($quizz->title)?>(<!-- <?php $recupQuizzTheme->themes ?> -->)</td>
                                        <td class="text-center"><a href="/controllers/quizzAddQuestionCtrl.php?id_quizz=<?=$quizz->id_quizz?>"><i class="icon-plus"></i></a></td>
                                        <td class="text-center"><a href="/controllers/quizzAddQuestionCtrl.php?id=<?=$quizz->title?>"><i class="icon-cogs"></i></a></td>
                                        <td>  <a href="/controllers/deleteQuizzCtrl.php?id_quizz=<?=htmlentities($quizz->id_quizz)?>" ><i class="icon-remove-sign"></i></a></td>
                                    </tr> -->

                                <?php } ?>


                            </tbody>
                            <tfoot>

                                    <tr>
                                        <td></td>
                                        <td> <a class="btn btn-info" type="button" href="/controllers/quizzAddCtrl.php">Créer un nouveau quizz</a></td>
                                    </tr>
                            </tfoot>
                        </table>
                    </form>
      
            </div> 
    </div>