<?php
global $error;
session_start();

require 'controller/frontend.php';
require 'controller/backend.php';



if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    } elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    } elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            } else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    } elseif ($_GET['action'] == 'report') {
           
        
        if (!empty($_GET['id'])&& $_GET['id'] > 0) {
            report();
            

        } else {
            echo 'not reported';
        }
    } elseif ($_GET['action'] == 'logOut') {
        logOut();
    } elseif ($_GET['action'] == 'adminListPosts') {
        adminListPosts();

    } elseif ($_GET['action'] == 'listAllComments') {
        listComments();

    } elseif ($_GET['action'] == 'listReportedComments') {
        listReportedComments();

    } elseif ($_GET['action'] == 'newPost') {
        newPost($_POST['title'], $_POST['content']);

    } elseif ($_GET['action'] == 'delPost') {
        delPost();

    } elseif ($_GET['action'] == 'delComment') {
        delComment();

    } elseif ($_GET['action'] == 'delComment2') {
        delComment2();
        
    } elseif ($_GET['action'] == 'removeReport') {
        removeReport();

    } elseif ($_GET['action'] == 'goToAddPost') {
        goToAddPost();

    } elseif ($_GET['action'] == 'goTomodPost') {
        goTomodPost();

    } elseif ($_GET['action'] == 'adminPost') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            adminPost();
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    } elseif ($_GET['action'] == 'modPost') {
        modPost($_GET['id'], $_POST['title'], $_POST['content']);

    } elseif ($_GET['action'] == 'goToAdminPreview') {
        adminPreview();
    }

} else {
    listPosts();
}