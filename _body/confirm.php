<?php

require('../_parts/functions.php');
// require('../_parts/dbconnect.php');
include('../_parts/header.php');

// $name = $_SESSION['name'];
// $email = $_SESSION['email'];
// $userid = $_SESSION['userid'];
// $password = $_SESSION['password'];


// if (!empty($_POST['confirm'])){
//     $stmt = $pdo->prepare("INSERT INTO users(name, email, userid, password) VALUES (:name, :email, :userid, :password)");
//     $stmt->bindValue(':name', $name, PDO::PARAM_STR);
//     $stmt->bindValue(':email', $email, PDO::PARAM_STR);
//     $stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
//     $stmt->bindValue(':password', $password, PDO::PARAM_STR);
//     $stmt->execute();

//     header("Location: welcome.php");
    
// }

?>
    <form action="" method="POST">
        <input type="hidden" name="confirm" value="confirmed">
        <h4>Confirm Your Information</h4>
        <p>If you would like to change your information, click "Back" to go back to a previous page.</p><br>
        <p>Name:<?= $name ?></p>
        <p>School Email:<?= h($email); ?></p>
        <p>Grade:<?= h($userid); ?></p>
        <p>Advisor:</p>
        <p>Club:</p>
        <p>Versity/JV:</p>
        <p>Interests:</p>
        

        <button type="submit">Confirm</button>
        <p><a href="signin.php">Back</a></p>

    </form>

<?php

include('../_parts/footer.php');