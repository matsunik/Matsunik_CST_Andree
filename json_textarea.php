<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['textarea'];
    file_put_contents("data.txt", $data);
}
?>

<form method="post">
    <textarea name="textarea"></textarea>
    <button type="submit">Senden</button>
</form>
