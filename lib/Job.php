<?php
class Job{
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllJobs(){
        $this->db->query("SELECT * FROM jobs_board.jobs ORDER BY date_posted DESC");

        $results = $this->db->resultSet();
        return $results;
    }

    public function getJob($id){
        $this->db->query("SELECT * FROM  jobs_board.jobs WHERE id = :id");

			$this->db->bind(':id', $id);

			$row = $this->db->single();

			return $row;
    }

    public function create($data){
        $this->db->query("INSERT INTO jobs_board.jobs (title, company, description, location, salary, imageUrl, websiteUrl, position)
        VALUES (:title, :company, :description, :location, :salary, :imageUrl, :websiteUrl, :position)");
        
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':imageUrl', $data['imageUrl']);
        $this->db->bind(':websiteUrl', $data['websiteUrl']);
        $this->db->bind(':position', $data['position']);
        
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->query("DELETE FROM jobs_board.jobs WHERE id = $id");
        
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $data) {
        $this->db->query("UPDATE jobs_board.jobs SET 
        title = :title,
        company = :company, 
        description = :description, 
        location = :location, 
        salary = :salary, 
        imageUrl = :imageUrl, 
        websiteUrl = :websiteUrl, 
        position = :position
        WHERE id = $id");
        
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':imageUrl', $data['imageUrl']);
        $this->db->bind(':websiteUrl', $data['websiteUrl']);
        $this->db->bind(':position', $data['position']);
        
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}