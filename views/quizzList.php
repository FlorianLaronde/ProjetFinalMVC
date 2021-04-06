    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
                <div class="col-12" id="contentOnVideo">

                    <h2 class="text-center mt-3">Quizz</h2>

                    <form class="mt-4" action="" method="POST">
                        <table class="table mb-5">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Quizz</th>
                                    <th scope="col">Visualiser questions</th>
                                    <th scope="col">Modifier quizz</th>                  
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; foreach($recupQuizzTitle as $quizz) { $i++; ?>
                                    
                                    <tr>
                                        <th scope="row"><?=$i?></th>
                                        <td><?=htmlentities($quizz->title)?>(<?= $quizz->themes ?>)</td>
                                        <td class="text-center"><a href="/controllers/questionListCtrl.php?id_quizz=<?=$quizz->id_quizz?>"><i class="icon-eye-open"></i></a></td>
                                        <td class="text-center"><a href="/controllers/modifyQuizzCtrl.php?id_quizz=<?=$quizz->id_quizz?>"><i class="icon-cog"></i></a></td>
                                        <td>  <a href="/controllers/deleteQuizzCtrl.php?id_quizz=<?=htmlentities($quizz->id_quizz)?>" ><i class="icon-remove-sign"></i></a></td>
                                    </tr>

                                <?php } ?>


                            </tbody>
                            <tfoot>

                                    <tr>
                                        <td></td>
                                        <td> <a class="btn btn-outline-dark" type="button" href="/controllers/quizzAddCtrl.php">Créer un nouveau quizz</a></td>
                                    </tr>
                            </tfoot>
                        </table>
                    </form>
      
            </div> 
        </div>                          
    </div>