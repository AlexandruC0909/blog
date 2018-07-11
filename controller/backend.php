<?php

require_once 'model/PostManager.php';
require_once 'model/CommentManager.php';

function adminPreview()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager;

    $comments = $commentManager->getAllComments();
    $nrComments = $commentManager->getAllComments();
   
    $nrReportedComments = $commentManager->getReportedComments();

    $nrPosts = $postManager->getPosts(); 

    include  'view/backend/adminView.php';
}

function adminListPosts()
{
    $postManager = new PostManager(); 
    $posts = $postManager->getPosts(); 

    include 'view/backend/listPostsView.php';
}




function listComments()
{   
    $postManager = new PostManager;
    $commentManager = new CommentManager;
    $comments = $commentManager->getAllComments();
    
    include 'view/backend/listCommentsView.php';
}



function listReportedComments()
{   
    $commentManager = new CommentManager;
    $reportedComments = $commentManager->getReportedComments();
    
    include 'view/backend/listReportedCommentsView.php';
}

function newPost($title, $content)
{
    $postManager = new PostManager;
    $newPost = $postManager->addPost($title, $content);
  
    if ($newPost === false) {
        die('Impossible d\'ajouter le post !');
    } else {
        header('Location: index.php?action=adminListPosts');
    }
}
function adminPost()
{   
    $postManager = new PostManager;
    $post = $postManager->getPost($_GET['id']);
    
    include 'view/backend/postView.php';
}

function delPost()
{   
    $postManager = new PostManager;
    $post = $postManager->deletePost($_GET['id']);
    header('Location: index.php?action=adminListPosts');
}

function delReportedComment()
{   
    $commentManager = new CommentManager;
    $commentManager->deleteComment($_GET['id']);
    header('Location: index.php?action=listReportedComments');
}
function delComment()
{   
    $commentManager = new CommentManager;
    $commentManager->deleteComment($_GET['id']);  
    header('Location: index.php?action=listAllComments');
}

function removeReport()
{
       $commentManager = new CommentManager;
    $commentManager->removeReportComment($_GET['id']);
    header('Location: index.php?action=listReportedComments');
}
function goTomodPost()
{   
    $postManager = new PostManager;
    $post = $postManager->getPost($_GET['id']);
    include 'view/backend/modifyPost.php';
}
function goToAddPost()
{
    include 'view/backend/addPost.php';
}

function modPost($id, $title, $content)
{  
    $postManager = new PostManager;
    $post = $postManager->getPost($_GET['id']);
    $postManager->modifyPost($id, $title, $content);
    header('Location: index.php?action=adminListPosts');
}