<?php 

require_once 'model/PostManager.php';
require_once 'model/CommentManager.php';
require_once 'model/LoginManager.php';


function listPosts()
{
    $postManager = new PostManager(); 
    $posts = $postManager->getPosts(); 
    include 'view/frontend/listPostsView.php';
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
    include 'view/frontend/postView.php';
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}


function report()
{   
    $commentManager = new CommentManager();
    $commentManager->reportComment($_GET['id']);
    include 'view/frontend/report.php';
    
}

if (isset($_POST['login'])) {
    $adminManager = new LoginManager();
    $adminManager->verifyLogin(); 
}


function logOut()
{
    $adminManager = new LoginManager();
    $adminManager->logout();
    header("Location:index.php");
}