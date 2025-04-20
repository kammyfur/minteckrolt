<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Minteck API Reference</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h1>Welcome to Minteck API!</h1>
<p>This API helps you get access to data about all Minteck's services in a single place. As a general measure, it is always recommended you start with the latest stable version. Click the version you want to see the API reference for that version and open a testing playground.</p>
<p><b>Available versions:</b></p>
<ul>
    <?php $list = scandir("."); array_shift($list); array_shift($list); foreach ($list as $item): if (is_dir($item)): ?>
    <?php $data = json_decode(file_get_contents($item . "/version.json"), true); ?>

        <?php if ($data["status"] === "stable"): ?>
        <li><a href="/api/<?= $item ?>"><b><?= $item ?> stable (<?= $data["version"] ?>)</b></a></li>
        <?php elseif ($data["status"] === "beta"): ?>
        <li><a href="/api/<?= $item ?>"><i><?= $item ?> beta (<?= $data["version"] ?>)</i></a></li>
        <?php elseif ($data["status"] === "old"): ?>
        <li><a href="/api/<?= $item ?>"><del><?= $item ?> old (<?= $data["version"] ?>)</del></a></li>
        <?php endif; ?>

    <?php endif; endforeach; ?>
</ul>

</body>
</html>