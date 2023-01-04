<?php
$query = "SELECT * FROM `user_data` INNER JOIN `grupas` ON user_data.grupas_ID = grupas.grupas_ID INNER JOIN `users` ON user_data.login_ID = users.user_id WHERE users.Epasts = '".$_SESSION['user_email']."';";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_array($result);
}
?>
