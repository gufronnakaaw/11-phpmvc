<?php 

class StudentModel
{
    private $db;
    private $table = 'data_student';

    public function __construct()
    {
        $this->db = new Database;    
    }

    public function getAllStudent()
    {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getStudentById($id)
    {
        $query = "SELECT * FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function insertData($data)
    {
        $query = "INSERT INTO $this->table (name, nrp, email, majors) VALUES (:name_maba, :nrp_maba, :email_maba, :majors_maba)";

        $this->db->query($query);
        $this->db->bind(':name_maba', $data['name_maba']);
        $this->db->bind(':nrp_maba', $data['nrp_maba']);
        $this->db->bind(':email_maba', $data['email_maba']);
        $this->db->bind(':majors_maba', $data['majors_maba']);  

        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function updateData($data)
    {
        $query = "UPDATE $this->table SET name = :name, nrp = :nrp, email = :email, majors = :majors WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(':name', $data['update_name_maba']);
        $this->db->bind(':nrp', $data['update_nrp_maba']);
        $this->db->bind(':email', $data['update_email_maba']);
        $this->db->bind(':majors', $data['update_majors_maba']);  
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteData($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchData($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM $this->table WHERE name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', "%$keyword%");

        return $this->db->resultSet();
    }

    public function coba()
    {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);

        return json_encode($this->db->resultSet());
    }


}