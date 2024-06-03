<?php
    class Admin {
        private $conn;

        public function __construct() {
            require_once __DIR__ . '/../config/db.php';
            $this->conn = $conn;
        }

        public function fetchAdmin($username, $password) {
            
            $stmt = $this->conn->prepare("SELECT id, username, password FROM admins WHERE username = ?");
            $stmt->bind_param('s', $username);
            
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $stored_username, $stored_password);
            
            if ($stmt->num_rows > 0) {
                
                $stmt->fetch();

                if (password_verify($password, $stored_password)) {
                    return [
                        'id' => $id,
                        'username' => $stored_username
                    ];
                } else {
                    
                    return null;
                }
            
            } else {       
                return null;
            }
    
            
            $stmt->close();
        
        }
    }