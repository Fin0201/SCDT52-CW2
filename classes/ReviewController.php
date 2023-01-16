<?php

class ReviewController {

    protected $db;

    public function __construct(DatabaseController $db)
    {
        $this->db = $db;
    }

    public function create_review(array $review) 
    {
        $sql = "INSERT INTO reviews(reviewText, userId)
        VALUES (:reviewText, :userId);";
        $this->db->runSQL($sql, $review);
        return $this->db->lastInsertId();
    }

    public function get_review_by_id(int $id)
    {
        $sql = "SELECT * FROM reviews WHERE id = :id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->fetch();
    }

    public function get_all_reviews()
    {
        $sql = "SELECT * FROM reviews";
        return $this->db->runSQL($sql)->fetchAll();
    }
}

?>