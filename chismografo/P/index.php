<html>
<head>
    <meta charset="utf-8">
    <title>Multiple uploads con php</title>
</head>
<body>
    <form action="subida2.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <label>Archivo 1:</label><input type="file" name="userfile[]" /><br /><br />
        <label>Archivo 2:</label><input type="file" name="userfile[]" /><br /><br />
        <label>Archivo 3:</label><input type="file" name="userfile[]" /><br /><br />
        <label>Archivo 4:</label><input type="file" name="userfile[]" /><br /><br />
        <input type="submit" value="Subir imágenes" />
    </form>
</body>
</html>