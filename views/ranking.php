    <!-- Fullscreen Video Background -->
    <div class="container px-0" id="myVideo">
        <video autoplay muted loop class="position-fixed">
            <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
        </video>
        <!-- Contenu sur ma vidéo -->
        <div class="row" id="contentOnVideo">
                    <div class="table-responsive col-12">
                        <h2>Classement</h2>
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr > 
                                    <th scope="col-1">#</th>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">Nombre de quizz réalisés</th>
                                    <th scope="col">Points</th>
                                    <th scope="col">Classement</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                            $ranking = 1;
                            $i = 0;
                            foreach($players as $player) { ?>
                            <!-- style="cursor: zoom-in;" onclick="location.href='/controllers/profil-patientCtrl.php?id=<?= $player->id; ?>'" -->
                                <tr>                                
                                    <td> <?= $player->id_users; ?>   </td>
                                    <td> <?= $recupPseudo[$i]->pseudo; ?>   </td>
                                    <td> <?= $player->nombreQuizz; ?>   </td>
                                    <td> <?= $player->points; ?> </td>
                                    <td> <?= $ranking; ?> </td>

                                </tr>

                            <?php $ranking++; $i++;
                             } ?>

                            </tbody>
                        </table>
                    </div>
       
        </div>
    </div>

