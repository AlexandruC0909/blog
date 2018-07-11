<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

                <div class="col-md-12">
                    <h3 class="link-title">
                      <?= htmlspecialchars($post['title']) ?>
                    
                    </h3>
                            <p class="date-format"> <em>le <?= $post['creation_date_fr'] ?></em></p>
                    <div>
                       
                            <?= nl2br($post['content']) ?>
                            <br />
                            
                    </div>
                    <div class="row ">
                        <div class="post-buttons">
                            <form action="index.php?action=delPost&amp;id=<?= $post['id'] ?>" method="post" >
                            <input type='submit' value='Supprimer' class="btn btn-primary main-color-bg" />
                            </form>
                        </div>
                        <div class="post-buttons">
                            <form action="index.php?action=goTomodPost&amp;id=<?= $post['id'] ?>" method="post" >
                            <input type='submit' value='Modifier' class="btn btn-primary main-color-bg" />
                            </form>
                        </div>
                    </div>
                    
                </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>