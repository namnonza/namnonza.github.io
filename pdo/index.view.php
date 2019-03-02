<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bulma.css">
    <script src="main.js"></script>
    
</head>
<body>
    <h1>book list</h1>
    <table class="table table-sm table-bordered .thead-light">
        <thead>
            <tr>
                <td>id</td>
                <td>image</td>
                <td>title</td>
                <td>isbn</td>
                <td>author</td>
                <td>category</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $book): ?>
                <tr>
                    <td>
                        <?= $book->id ?>
                    </td>
                    <td>
                        <img src=<?= $book->thumbnailUrl ?> alt=<?= $book->title . "thumbnail" ?> >
                    </td>
                    <td>
                        <?= $book->title ?>
                    </td>
                    <td>
                        <?= $book->isbn ?>
                    </td>
                    <td>
                        <?= $book->author ?>
                    </td>
                    <td>
                        <?= $book->category ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>