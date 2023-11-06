<?php
// fonction de validation et d'assainisement des données du formulaire

function sanitizeValidation ($_post) {
    if (isset($_POST["firstName"]) and !empty($_POST["firstName"]) and strlen($_POST["firstName"]) > 2 and strlen($_POST["firstName"]) < 25) {
        $firstName = htmlspecialchars($_POST["firstName"]);
        echo $firstName;
    } else {
        // echo "A valide first name is required";
    }

    if (isset($_POST["lastName"]) and !empty($_POST["lastName"]) and strlen($_POST["lastName"]) > 2 and strlen($_POST["lastName"]) < 25) {
        $lastName = htmlspecialchars($_POST["lastName"]);
        echo $lastName;
    } else {
        // echo "A valide last name is required";
    }

    if (isset($_POST["gender"]) and !empty($_Post["gender"])){
        $gender = htmlspecialchars($_POST["gender"]);
        echo $gender;
    }

    if (isset($_POST["email"]) and !empty($_POST["email"]) and filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) and preg_match("/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/", $_POST["email"])) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    } else {
        // echo "A valide email is required";
    }

    if (isset($_POST["country"]) and !empty($_POST["country"]) and strlen($_POST["country"]) > 2 and strlen($_POST["country"]) < 20) {
        $country = htmlspecialchars($_POST["country"]);
    } else {
        // echo "A valide country is required";
    }

    if (isset($_POST["subject"]) and !empty($_POST["subject"])) {
        $subject = htmlspecialchars($_POST["subject"]);
    } else {
        // echo "A valide subject is required";
    }

    if (isset($_POST["message"]) and !empty($_POST["message"]) and strlen($_POST["message"]) > 2 and strlen($_POST["message"]) < 500) {
        $message = htmlspecialchars($_POST["message"]);
    } else {
        // echo "A valide message is required";
    }

    if (isset($firstName) and isset($lastName) and isset($gender) and isset($email) and isset($country) and isset($subject) and isset($message)) {
        echo "Thank you for your order!";
        return $sanitizedData = array(
            "firstName" => $firstName,
            "lastName" => $lastName,
            "gender" => $gender,
            "email" => $email,
            "country" => $country,
            "subject" => $subject,
            "message" => $message
        );
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackeuse poulette</title>
    <link rel="stylesheet" href="./sass/style.css">
    <script defer src="./javascript/script.js"></script>

</head>
<body>
    <header>
        <div class="logo">
            <img src="./img/hackers-poulette-logo.png" alt="">
        </div>
        <h1>Contact support</h1>
    </header>

    <main>
        <form method="post" action="" id="form">
            <div class="first-name">
                <label for="first-name">First-name: </label>
                <input type="text" name="first-name" id="first-name" placeholder="Your first-name" minlength="3" maxlength="25" required>
                <span id="first-name-error"></span>
            </div>
            <div class="last-name">
                <label for="last-name">Last-name: </label>
                <input type="text" name="last-name" id="last-name" placeholder="Your last-name" minlength="3" maxlength="25" required>
                <span id="last-name-error"></span>
            </div>
            <div class="gender">
                <label for="gender">Genre:  </label>
                <label for="gender">M: </label>
                <input type="radio" name="gender" id="H" value="h">
                <label for="gender">F: </label>
                <input type="radio" name="gender" id="F" value="f">
                <label for="gender">X: </label>
                <input type="radio" name="gender" id="X" value="x">
            </div>
            <div class="email">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Your email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                <span id="email-error"></span>
            </div>
            <div class="country">
                <label for="country">Country: </label>
                <input type="text" name="country" id="country" placeholder="Country" minlength="3" maxlength="25" required>
                <span id="country-error"></span>
            </div>
            <div class="subject">
                <label for="subject">Sujet: </label>
                <select name="subject" id="subject">
                    <option value="other">Other</option>
                    <option value="estimate">Estimate</option>
                    <option value="complaint">Complaint</option>
                </select>
            </div>
            <div class="mess"></div>
                <!-- <label for="message">Message: </label> -->
                <textarea name="message" id="message" cols="40" rows="10"  placeholder="Your message" minlength="20" maxlength="500" required></textarea>
                <span id="message-error"></span>
            </div>
            <div class="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
        <?php
            if(array_key_exists('submit', $_POST)) { 
                sanitizeValidation($_POST);
            }
        ?>
    </main>
    
</body>
</html>