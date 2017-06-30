<?php

class Database {


    public function connection() {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_errno) {
            die("Connection failed: " . $this->conn->connect_errno);
        }
    }

    public function send_message() {
        $name = isset($_POST['name']) ? htmlentities(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : '';
        $subject = isset($_POST['subject']) ? htmlentities(trim($_POST['subject'])) : '';
        $message = isset($_POST['message']) ? htmlentities(trim($_POST['message'])) : '';

        $this->sql = $this->conn->query("INSERT INTO contact_us(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')");
        if(!$this->sql)
        {
            echo mysql_error();
        }

        $this->conn->close();
    }
}

?>