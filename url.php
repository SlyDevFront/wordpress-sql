<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>SQL result</title>
</head>
<body>
<?php
$table = $_GET['prefix'];
$oldurl = $_GET['oldurl'];
$newurl = $_GET['newurl'];
?>

<div class="container">
    <div class="jumbotron">
        <h1>Requête</h1>
        <hr>
        <small>
            UPDATE <?=$table?>options SET option_value = replace(option_value, '<?=$oldurl?>', '<?=$newurl?>') WHERE option_name = 'home' OR option_name = 'siteurl';<br>
            UPDATE <?=$table?>posts SET guid = replace(guid, '<?=$oldurl?>','<?=$newurl?>');<br>
            UPDATE <?=$table?>postmeta SET meta_value = replace(meta_value,'<?=$oldurl?>','<?=$newurl?>');<br>
            UPDATE <?=$table?>posts SET post_content = replace(post_content, '<?=$oldurl?>', '<?=$newurl?>');<br>
        </small>
    </div>
</div>
</body>
</html>