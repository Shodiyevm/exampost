<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My POST</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class= "container mt-5">
    <form action="/text" method="POST">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Malumot kiriting</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name ="text" id="inputPassword">
        <div>
            <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
        </div>
    </div>
    </form>
    <?php require "home.php" ?>
</div>
</body>
</html>
