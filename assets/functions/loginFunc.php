<?php
include '../includes/dbh.inc.php';

// Function to sanitize input data
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = sanitize_input($_POST["username_or_email"]);
    $password = sanitize_input($_POST["password"]);

    $errors = [];

    // Check if username/email and password are provided
    if (empty($username_or_email) || empty($password)) {
        $errors[] = "Please enter both username/email and password.";
    } else {
        // Check if the user exists in the database by username or email
        $checkUserQuery = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($checkUserQuery);
        $stmt->bind_param("ss", $username_or_email, $username_or_email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // User exists, verify password
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $updateRecentLoginQuery = "UPDATE users SET recent_login = NOW() WHERE username = ? OR email = ?";
                $stmtUpdate = $conn->prepare($updateRecentLoginQuery);
                $stmtUpdate->bind_param("ss", $username_or_email, $username_or_email);
                $stmtUpdate->execute();
                // Password correct, start session and store user information
                $_SESSION['username'] = $user['username']; // Replace with your username column name
                $_SESSION['email'] = $user['email'];

                echo json_encode(['success' => 'Login successful. Redirecting...']);
                exit();
            } else {
                $errors[] = "Incorrect password.";
            }
        } else {
            $errors[] = "User not found.";
        }
    }

    // Return errors to the login form
    echo json_encode(['errors' => $errors]);
    exit();
}
?>
