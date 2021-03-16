    <!-- Fullscreen Video Background -->
    <div class="container px-0" id="myVideo">
        <video autoplay muted loop class="position-fixed">
            <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
        </video>
        <!-- Contenu sur ma vidéo -->
        <div id="contentOnVideo">
            <h2>Classement</h2>
            <div class="container">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr > 
                                    <th scope="col">#</th>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">Nombre de quizz réalisés</th>
                                    <th scope="col">Points</th>
                                    <th scope="col">Classement</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach($players as $player) { ?>
                                <tr style="cursor: zoom-in;" onclick="location.href='/controllers/profil-patientCtrl.php?id=<?= $player->id; ?>'">
                                    <td> <?= $player->id; ?>   </td>
                                    <td> <?= $player->lastname; ?> </td>
                                    <td> <?= $player->firstname; ?> </td>
                                    <td> <?= $player->points; ?> </td>
                                    <td> <?= $player->phone; ?> </td>
                                </tr>

                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

