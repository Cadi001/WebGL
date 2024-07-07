<?php
// Include the database connection file
include '../includes/dbh.inc.php';

// Function to sanitize input data
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitize_input($_POST["username"]);
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);
    $confirm_password = sanitize_input($_POST["confirm_password"]);
    
    $errors = [];
    if (empty($errors)) {
        $checkUserQuery = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($checkUserQuery);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $errors[] = "Username already exists.";
        }

        $checkUserQuery1 = "SELECT * FROM users WHERE email = ?";
        $stmt1 = $conn->prepare($checkUserQuery1);
        $stmt1->bind_param("s", $email);
        $stmt1->execute();
        $result1 = $stmt1->get_result();

        if ($result1->num_rows > 0) {
            $errors[] = "Email already exists.";
        }
    }

    
    if (strlen($username) < 6) {
        $errors[] = "Username should be 6 characters above";
    }
    // Validate password length and complexity
    if (strlen($password) < 8 || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/", $password)) {
        $errors[] = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
    }

    // Check if password and confirm password match
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }
    
    // Check if username or email already exists
    
    
    // If there are no errors, proceed with registration
    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        
        // Default role
        $role = "users";
        $recent_login = NULL;  // Set default recent_login to NULL
        
        // Insert new user
        $insertQuery = "INSERT INTO users (username, email, password, recent_login, role) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sssss", $username, $email, $hashed_password, $recent_login, $role);

        if ($stmt->execute()) {
            echo json_encode(['success' => 'Registration successful!']);
            exit();
        } else {
            $errors[] = "Error: " . $stmt->error;
        }
    }
    
    // Close database connection
    $conn->close();
    
    // Return errors as JSON response
    echo json_encode(['errors' => $errors]);
    exit();
}
?>
