<!DOCTYPE html>
<html>
<head>
    <title>PHP Decrypt Tool</title>
</head>
<body>
    <h2>PHP Decrypt Tool</h2>
    <form method="post">
        <label for="encrypted">Enter Encrypted String:</label><br>
        <input type="text" id="encrypted" name="encrypted" style="width: 100%;"><br><br>
        <input type="submit" value="Decrypt">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $encrypted = $_POST['encrypted'];
        $decrypted = gzinflate(base64_decode(strrev(str_rot13($encrypted))));
        echo "<h3>Decrypted String:</h3>";
        echo "<p>$decrypted</p>";
    }
    ?>
</body>
</html>
