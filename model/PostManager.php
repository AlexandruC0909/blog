<?php
require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC ');
        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }
    public function addPost($title, $content)
    {
        $db = $this->dbConnect();
        $addPost = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
        $newPost = $addPost->execute(array($title,$content));
        return $newPost;
    }
    public function deletePost($id)
    {
        $db = $this->dbConnect();

        $deletePost = $db->prepare('DELETE FROM  posts WHERE id = :id');
        $deletePost -> bindParam(':id', $id, PDO::PARAM_INT);
        $deletePost ->execute();

        $deleteComments = $db->prepare('DELETE FROM  comments WHERE post_id = :postId');
        $deleteComments -> bindParam(':postId', $id, PDO::PARAM_INT);
        $deleteComments ->execute();
    }
    public function modifyPost($id, $title, $content)
    {
        $db = $this->dbConnect();
        $modify = $db->prepare('UPDATE posts SET title = :newTitle, content = :newContent WHERE id = :id ');
    
        $modify->execute(array(
            ':id' =>$id,
            ':newTitle' => $title,
            ':newContent' => $content
            
        ));
    }
}