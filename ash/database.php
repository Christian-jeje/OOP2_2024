<?php
session_start(); // Start the session to track user login status

$server = "localhost";
$user = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "edmodo_database";

// Create connection
$conn = new mysqli($server, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = ""; // Initialize error variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate user input
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password'] ?? '');

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error = "Invalid email format!";
    } else {
        // Secure query to check user in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                // Set session variables to remember the logged-in user
                $_SESSION['user_id'] = $row['id']; // Store the user's ID in the session
                $_SESSION['email'] = $row['email']; // Store the user's email in the session
                // Redirect to the protected page
                $user = explode('@',$_POST['email'])[0];

                header('Location: interface.php');
                exit; // Make sure to stop further execution after redirection
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "Email not found!";
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!-- Example HTML to show the error message -->
<?php if ($error): ?>
    <script>
        alert("<?php echo $error; ?>");
    </script>
<?php endif; ?>
