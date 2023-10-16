<?php

include "config.php";

class FacilityManager {
    // Properties
    private $name;
    private $password;
    private $email;
    private $facility_type;
    private $notification_pref;

    // Constructor
    public function __construct($name, $facility_type, $notification_pref) {
        $this->name = $name;
        $this->facility_type = $facility_type;
        $this->notification_pref = $notification_pref;
    }

    public function create() {
        try {
            // Get the database connection from the config
            global $db;
    
            // Prepare an SQL INSERT statement
            $sql = "INSERT INTO facility_managers (name, facility_type, notification_pref) VALUES (:name, :facility_type, :notification_pref)";
            $stmt = $db->prepare($sql);
    
            // Bind parameters
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':facility_type', $this->facility_type);
            $stmt->bindParam(':notification_pref', $this->notification_pref);
    
            // Execute the query
            $stmt->execute();
    
            echo "Data inserted successfully.";
    
        } catch (PDOException $e) {
            echo "Insertion Failed: " . $e->getMessage();
        }
    }

    public function signin($username, $password) {
        try {
    
            // Prepare an SQL SELECT statement to fetch the user's data
            $sql = "SELECT * FROM facilitymanager WHERE name = :name";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $username);
            $stmt->execute();
    
            // Fetch the user's data
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                // Check if the provided password matches the stored password
                if (password_verify($password, $user['password'])) {
                    echo "Sign-in successful. Welcome, " . $user['name'] . "!";
                    return true;
                } else {
                    echo "Invalid password. Sign-in failed.";
                }
            } else {
                echo "User not found. Sign-in failed.";
            }
    
        } catch (PDOException $e) {
            echo "Sign-in Failed: " . $e->getMessage();
        }
    
        return false;
    }
    
    

    // Methods
    public function monitorEnergy() {
        // Implementation for monitoring energy usage
        // You can add your code here
    }

    public function predictBill() {
        // Implementation for predicting energy bills
        // You can add your code here
    }

    public function getSuggestion() {
        // Implementation for providing suggestions
        // You can add your code here
    }

    // Getter methods for properties (optional)
    public function getName() {
        return $this->name;
    }

    public function getFacilityType() {
        return $this->facility_type;
    }

    public function getNotificationPref() {
        return $this->notification_pref;
    }
}



?>