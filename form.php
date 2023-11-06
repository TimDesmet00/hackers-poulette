<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>support de contact</h1>
    </header>

    <main>
        <form method="post" action="" id="form">
            <label for="last-name">Nom: </label>
            <input type="text" name="last-name" id="last-name" placeholder="Votre nom" minlength="3" maxlength="25" required>

            <label for="first-name">Prénom: </label>
            <input type="text" name="first-name" id="first-name" placeholder="Votre prénom" minlength="3" maxlength="25" required>

            <label for="gender">Genre: </label>
            <label for="gender">H: </label>
            <input type="radio" name="gender" id="H">
            <label for="gender">F: </label>
            <input type="radio" name="gender" id="F">
            <label for="gender">X: </label>
            <input type="radio" name="gender" id="X">

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Votre email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>

            <label for="country">Pays: </label>
            <input type="text" name="country" id="country" placeholder="votre pays" minlength="3" maxlength="25" required>

            <label for="subject">Sujet: </label>
            <select name="subject" id="subject">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <label for="message">Message: </label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" minlength="3" maxlength="500" required></textarea>

            <input type="submit" value="Envoyer
        </form>
    </main>
    
</body>
</html>