<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <?php

    if (isset($_GET["email"]) && !empty($_GET["email"])) {
        //Valideer email
        if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
            echo "E-mailadres is geldig!";
        } else {
            "E-mailadres is ongeldig! Voer een geldige email in";
        }
    } else {
        echo "Voer een email in";
    }

    ?>

    <div>
        <form name="email" action="" method="get">
            <div>
                <label for="email">Voer hier je email in</label>
                <input type="email" name="email" id="email" required />
                <input type="submit" value="Verstuur" />
            </div>
        </form>
    </div>

</body>

</html>