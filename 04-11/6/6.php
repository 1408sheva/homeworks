<?php include 'uploadfile.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Galery</title>
</head>
<body>
<table border="2px">
    <?php for ($i=0; $i<count($files); $i++):?>
        <?php if ($i % 4 == 0) echo "<tr>";?>
        <td><img src="<?= $dir . $files[$i] ?>" alt="picture" width="200px" height="200px"></td>
        <?php if ($i+3 % 4 == 0) echo "</tr>";?>
    <?php endfor;?>
</table>
<form enctype="multipart/form-data" action="6.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <input type="file" multiple name="filename[]" accept="image/*"><br>
    <input type="submit">
</form>
</body>
</html>