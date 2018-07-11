<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>
<form action="index.php?action=newPost" method="post">

    <div>

        <label for="title">Titre</label>
        <br />

        <input type="text" id="title" name="title" />

    </div>

    <div>

        <label for="content">Contenu</label>
        <br />

        <textarea id="content" name="content" class="tinymce"></textarea>

    </div>

    <div>

        <button type="submit" class="btn btn-primary main-color-bg">Ajouter</button>
</form>

</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>