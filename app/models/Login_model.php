<?php
class Login_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUser($username,$password){
        $this->db->query('SELECT * FROM tbl_users WHERE username = :username AND password = :password');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
       

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            echo "<script>alert('Username / Password Salah');window.location.href='http://localhost:8080/asiavisual/public/login'</script>";
        }
    }
}
?>