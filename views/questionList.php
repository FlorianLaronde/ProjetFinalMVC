    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div class="row">
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
                                    <th scope="col">Questions</th>
                                    <th scope="col">Modifier</th>                   
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; foreach($recupQuestion as $question) { $i++; ?>
                                    
                                    <tr>
                                        <th scope="row"><?=$i?></th>
                                        <td>Question :<?=htmlentities($question->questionQuizz)?>(<?= $question->title ?>)</td>
                                        <td class="text-center"><a href="/controllers/modifyQuestionQuizzCtrl.php?id_questions=<?=$question->id_questions?>"><i class="icon-cogs"></i></a></td>
                                        <td>  <a href="/controllers/deleteQuestionCtrl.php?id_questions=<?=htmlentities($question->id_questions)?>" ><i class="icon-remove-sign"></i></a></td>
                                    </tr>

                                <?php } ?>


                            </tbody>
                            <tfoot>

                                    <tr>
                                        <td></td>
                                        <td> <a class="btn btn-info" type="button" href="/controllers/quizzAddQuestionCtrl.php?id_quizz=<?=$question->id_quizz?>">Créer une nouvelle question</a></td>
                                    </tr>
                            </tfoot>
                        </table>
                    </form>
      
            </div> 
        </div>                          
    </div>