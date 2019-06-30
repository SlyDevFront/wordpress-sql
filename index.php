<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>SQL gen</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <form action="url.php">
            <div class="form-group">
                <label for="">Table Préfix</label>
                <input type="text" class="form-control"  name="prefix">
            </div>
            <div class="form-group">
                <label for="">Ancienne Url</label>
                <input type="text" class="form-control"  name="oldurl">
            </div>
            <div class="form-group">
                <label for="">Nouvelle Url</label>
                <input type="text" class="form-control" name="newurl" >
            </div>
            <button type="submit" class="btn btn-dark">Génerer</button>
        </form>
    </div>
</div>
</body>
</html>