<!DOCTYPE html>
<html>
    <head>
        <title>Environment :: <?= $environments['name'] ?></title>
    </head>
    <body>
        <h1>Environment variables:</h1>
        <ul>
            <?php foreach ($environments as $key => $name) : ?>
                <?php if (!is_string($name)) continue ?>
                <li><?php echo $key . ': ' . $name ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>
