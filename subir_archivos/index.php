<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Subir archivo</h2>
        <br>
        <input type="file" name="file" id="">
        <p><input type="submit" value="Enviar archivo"></p>
    </form>
</body>
</html>