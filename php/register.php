<?php
include 'connection.php';

$error = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $password = $_POST['password'];
    $language = $_POST['language'] ?? '';

    if (empty($language)) {
        $error = "Language selection is required.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM login WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Username already exists.";
        } else {
            $stmt->close();
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $conn->prepare("INSERT INTO login (name, password, language) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $hashed_password, $language);

            if ($stmt->execute()) {
                $stmt->close();
                $conn->close();
                $success = true;
            } else {
                $error = "An error occurred while registering.";
            }
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="rgb-bar"></div>
    <div class="login-box">
        <form method="POST" action="register.php">
            <div class="input-container">
                <input type="text" name="username" id="username" class="input <?= $error == 'Username already exists.' ? 'error' : '' ?>" placeholder=" " required>
                <label for="username" class="label">Username</label>
            </div>
            <div class="input-container">
                <input type="password" name="password" id="password" class="input" placeholder=" " required>
                <label for="password" class="label">Password</label>
            </div>
            <?php if ($success): ?>
                <p class="success-message">Registration successful!</p>
            <?php endif; ?>
            <div class="language-dropdown">
                <select id="language-select" name="language" class="<?= $error == 'Language selection is required.' ? 'error' : '' ?>" required>
                    <option disabled selected hidden>🌍 Select language</option>
                    <option value="en" <?= isset($language) && $language === 'en' ? 'selected' : '' ?>>🇬🇧 English</option>
                    <option value="es" <?= isset($language) && $language === 'es' ? 'selected' : '' ?>>🇪🇸 Español</option>
                    <option value="de" <?= isset($language) && $language === 'de' ? 'selected' : '' ?>>🇩🇪 Deutsche</option>
                </select>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <script src="../scripts/script.js"></script>
</body>
</html>
