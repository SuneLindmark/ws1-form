<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="container mt-5">
    <form action="index.php" method="post">
    <div class="form-group">
    <label for="myname" class="form-label">Username: </label>
    <input type="text" name="username" id="username">
    </div>
    <div class="form-group">
    <label for="description">Description: </label>
    <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <input type="submit" value="Skicka">
    </form>
        <div class="mt-5">
    <?php
        $myname = filter_input(INPUT_POST, "myname", FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <div class="card">
    <h5 class="card-header"><?= $myname ?></h5>
</body>
</html>