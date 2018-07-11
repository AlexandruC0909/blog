<?php
require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment,report_status, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));
        return $comments;
    }
    public function getAllComments()
    {
        $db = $this->dbConnect();

        $comments = $db->query('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date DESC ');
        
        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function reportComment($id)
    {   
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE comments SET report_status = 1 WHERE id = :id');
        $report->bindParam(':id', $id, PDO::PARAM_INT);
        $report->execute();
    }

    function getReportedComments()
    {
        $db = $this->dbConnect();

        $reportedComments = $db->query('SELECT id,post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE report_status = 1 ORDER BY comment_date DESC');
        
        return $reportedComments;
    }

    public function removeReportComment($id)
    {
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE comments SET report_status = 0 WHERE id = :id');
        $report -> bindParam(':id', $id, PDO::PARAM_INT);
        $report ->execute();
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $delete = $db->prepare('DELETE FROM  comments WHERE id = :id');
        $delete -> bindParam(':id', $id, PDO::PARAM_INT);
        $delete ->execute();
    }
    
}