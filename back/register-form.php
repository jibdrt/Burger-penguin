<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-form.css">
    <title>Back-office Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="wrapper container vh-100 d-flex align-items-center justify-content-center card">
    <form action="register-form-handler.php" method="post">
        <div class="lite">
            <label for="input-username" class="form-label">USERNAME : </label>
            <input type="text" name="username" id="input-username" required>
        </div>
        <div class="lite1">
            <label for="input-email" class="form-label">EMAIL : </label>
            <input type="email" name="email" id="input-email" required>
        </div>
        <div class="lite2">
            <label for="input-password" class="form-label">PASSWORD : </label>
            <input type="password" name="password" id="input-password" required>
        </div>
        <div class="lite3">
            <label for="input-confirmation">CONFIRMATION : </label>
            <input type="password" name="confirmation" id="input-confirmation" required>
            <span id="error"></span>
        </div>
        <div class="lite4">
            <input type="submit" value="REGISTER" id="submit" class="btn btn-outline-primary">
            <a href="index.php">
            <button class="btn btn-outline-primary">
                RETOUR
            </button>
            </a>
        </div>
    </form>
</div>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>