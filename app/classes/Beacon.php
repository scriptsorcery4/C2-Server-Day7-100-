<?php
class Beacon {
    private $conn;

    public function __construct() {
        require_once __DIR__ . '/../config/db.php';
        $this->conn = $conn;
    }

    public function fetchBeacons() {
        
        $sql = "SELECT b.*, COUNT(c.beacon_id) AS join_count
        FROM beacons AS b
        LEFT JOIN clients AS c ON b.id = c.beacon_id
        GROUP BY b.id;
        ";
    
        
        $result = $this->conn->query($sql);
    
        
        $beacons = array();
        if ($result && $result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                $beacons[] = $row;
            }
        }
    
        
        return $beacons;
    }


    public function insertBeacon($name, $freq){
        
        $stmt = $this->conn->prepare("INSERT INTO beacons (name, freq) VALUES (?, ?)");

        
        $stmt->bind_param("si", $name, $freq);

        
        if ($stmt->execute()) {
            return true; 
        } else {
            return false; 
        }
        
        
        $stmt->close();
    }

    public function __destruct() {
        $this->conn->close();
    }
}
