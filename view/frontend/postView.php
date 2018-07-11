<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<p>
    <a href="index.php">Retour à la liste des billets</a>
</p>
<div class="container">
    <div class="row">
        
        <div class="col-lg-12 col-md-12 mx-auto">
            <div class="post-preview">


                <h2 class="post-title ">
                    <?= htmlspecialchars($post['title']) ?>
                </h2>
                <p class="post-meta">le
                    <?= $post['creation_date_fr'] ?>
                </p>

                </h3>
                <p>
                    <?= nl2br($post['content']) ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row comment-section">
        <div class="col-lg-8 col-md-8 mx-auto">
            <div class="post-preview">
                <h2 class="list-comments">Commentaires</h2>
                <?php while ($comment = $comments->fetch()):?>
                <div class="row">
                    <div class="col-lg-10 col-md-10 mx-auto">

                        <h3 class="post-title ">
                            <?= htmlspecialchars($comment['author']) ?>
                        </h3>
                        <p class="post-meta">le
                            <?= $comment['comment_date_fr'] ?>
                        </p>
                        <p>
                            <?= nl2br($comment['comment']) ?>
                        </p>
                    </div>
                
                    <div class="col-lg-2 col-md-2 mx-auto">
                        <div class "report-button">
                        <?php if($comment['report_status'] == '0') : ?>
                            
                            <a class "report-button" href= "index.php?action=report&amp;id=<?= $comment['id'] ?>" >Report</a>
                            
                        <?php endif; ?>
                        </div>
                    </div>
               
                    <hr>
                </div>
                <hr>
                <?php endwhile; $comments->closecursor();?>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 mx-auto ">
            <h2>Ajouter un commentaire</h2>
            <br>
            <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    <textarea class="form-control" id="comment" rows="6" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>





<?php $content = ob_get_clean(); ?>

<?php require 'template.php' ; ?>