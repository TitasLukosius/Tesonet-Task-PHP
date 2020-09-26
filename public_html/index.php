<?php

include '../app/Classes/Age.php';

$count_age = 'You have not entered your date of birth';

if(isset($_POST['date'])) {
    $age = new Age();
    $count_age = $age->countAge($_POST['date']);
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Count your age</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="form-container">
            <div class="form-name">
                <h2>Count Your Age!</h2>
            </div>
            <div class="form">
                <form action="index.php" method="POST">
                    <label for="date">Your date of birth</label>
                    <input id="date" name="date" type="date" required>
                    <button type="submit"> Let's count your age!</button>
                </form>
                <h3><?php print $count_age ;?></h3>
            </div>
        </div>
    </main>
<h2></h2>
</body>
</html>
