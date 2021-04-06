    <!-- Fullscreen Video Background -->
    <div class="container" id="myVideo">
        <div id="contentOnVideo" class="row justify-content-center">
            <video autoplay muted loop class="position-fixed">
                <source src="/assets/img/BackgroundVideo/myVideo3.mp4" type="video/mp4">
            </video>
            <!-- Contenu sur ma vidéo -->
            <div class="col-12">
                <h2 class="text-center">Quizz</h2>
                <form class="form-inline mt-3 mb-3" action="" method="GET">

                    <input class="form-inline" type="text" name="s" id="s" value="<?=$s?>">
                    <input class="btnSearch btn btn-info" type="submit" value="Rechercher">

                </form>
                
                    <div>

                        <?php $i=0; foreach($allQuizzTitle as $quizz) { $i++; ?>

                        <button onclick="window.location.href='/controllers/quizzCtrl.php?id_quizz=<?=$quizz->id_quizz?>'" class="btn mb-4"><span>Quizz <?= $i  ?> : <?=$quizz->title ?> (<?= $quizz->themes ?>)</span></button>

                        <?php } ?>
                            <?php if($_SESSION['admin'] == 1) { ?>
                                 <button onclick="window.location.href='/controllers/quizzListCtrl.php'" class="btn mt-3 mb-3"><span>Créer un quizz</span></button>
                           <?php } ?>
                    </div>

                    <!-- <nav aria-label="...">
                        <ul class="pagination pagination-sm">
    
                            <?php
                            for($i=1;$i<=$nbPages;$i++){
                                if($i==$currentPage){ ?>    
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                    <?=$i?> 
                                    <span class="visually-hidden">(current)</span>
                                    </span>
                                </li>
                            <?php } else { ?>
                        <li class="page-item"><a class="page-link" href="?currentPage=<?=$i?>&s=<?=$s?>"><?=$i?></a></li>
                        <?php } 
                        }?>
                    </ul>
                    </nav> -->
            </div>
        </div>
    </div>
