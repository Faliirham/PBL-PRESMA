<?php

class LoginAuth{
    private $username;
    private $password;
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    public function authLogin(){
        $this->username = isset($_POST['username']) ? $_POST['username'] : null;
        $this->password = isset($_POST['password'])? $_POST['password'] : null;

        $query = "SELECT username, role,
                CASE 
                    WHEN role = 1 THEN 'Mahasiswa'
                    WHEN role = 2 THEN 'Admin'
                    ELSE 'Tidak dikenali'
                END AS user_type
            FROM (
                SELECT id_mhs AS username, password, id_role AS role
                FROM mahasiswa
                
                UNION ALL
                
                SELECT id_admin AS username, password, id_role AS role
                FROM admin
            ) AS UserData
            WHERE username = :username AND password = :password;";
        $this->db->query($query);
        $this->db->bind('username', $this->username);
        $this->db->bind('password', $this->password);

        $result = $this->db->single();

        return $result ? $result['role'] : null;
    }

    
}