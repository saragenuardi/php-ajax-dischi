
<?php include __DIR__ . '/data/discs.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-grid.css' integrity='sha512-VA/YQLfZ2JQlKs8s3wffXcOki/gvJsM9V2x7eSZ1cetjA43S9XeVWv0ZTjkW29zdlwnGzoIq+0OUErhHM38t1g==' crossorigin='anonymous' />
    <title>Document</title>
</head>

<body>
    <header class="container-fluid d-flex align-items-center justify-content-between">
        <div>
            <img id="spotify-logo" class="grow" src="../img/Spotify.png" alt="spotify logo">
        </div>
        <div>
            <select name="genre" id="genre">
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>
        </div>
    </header>
    <main>
        <div class="container">
            <div id="discs-container" class="d-flex flex-wrap justify-content-center text-center">
                <?php foreach ($discs as $disc) : ?>
                    <div class="disc-card d-flex flex-column align-items-center">
                        <div class="disc-poster grow">
                            <img src="<php?= $disc['poster'] ?>" alt="<?= $disc['author'] ?>">
                        </div>
                        <h3 class="text-white"><?= strtoupper($disc['title']) ?></h3>
                        <div class="h5 text-gray"> <?= $disc['author'] ?></div>
                        <small class="text-gray py-2"><?= $disc['year'] ?></small>
                        <strong class="text-gray"><?= $disc['genre'] ?></strong>
                    </div> 
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>