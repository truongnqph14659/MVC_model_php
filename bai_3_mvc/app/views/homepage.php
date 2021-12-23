<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>name</th>
            <th>describe_id</th>
        </thead>
        <tbody>
            <?php foreach ($data as $value) : ?>
                <tr>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['describe_id'] ?></td>
                    <td>
                        <a href="./remove.php?id=<?= $value['id'] ?>">xoa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>