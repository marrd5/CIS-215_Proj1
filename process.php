<?php
// hashed password location
include 'config.php';

function validateInput() {
    // pull & set  vars
    $email = htmlspecialchars($_POST["email-name"]);
    $password = htmlspecialchars($_POST["password"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $favQuestion = filter_var($_POST["fav-question"], FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 4)));
    $submitDate = htmlspecialchars($_POST["submit-date"]);
    $errors = array();

    // Check for empty
    if (empty($email) || empty($password) || empty($age) || empty($gender) || empty($favQuestion) || empty($submitDate)) {
        $errors[] = "Please fill out all fields.";
    }

    // Validate email
    $email = htmlspecialchars(trim($_POST["email-name"]));
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address. Provided email: " . $email;
    }

    // Validate password
    if (!$password) {
        $errors[] = "Password not provided.";
    } else {
        $hashedPassword = GLOBAL_PASSWORD_HASH;
        if (!password_verify($password, $hashedPassword)) {
            $errors[] = "Password incorrect. Please try again.";
        }
    }

    //check for errors
    if (empty($errors)) {
        return array($email, $password, $age, $gender, $favQuestion, $submitDate);
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        return false;
    }
}

// validate and print results
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $safeInput = validateInput();
    if ($safeInput) {
        list($email, $password, $age, $gender, $favQuestion, $submitDate) = $safeInput;
        echo "Email: $email<br>";
        echo "Age: $age<br>";
        echo "Gender: $gender<br>";
        echo "Favorite Question: $favQuestion<br>";
        echo "Submit Date: $submitDate<br>";
    } else {
        echo "Form validation failed.";
    }
}
?>
