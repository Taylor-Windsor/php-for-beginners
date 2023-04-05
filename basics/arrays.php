<html>

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>
    <h1>Recommended Books</h1>

    <?php
    $books = [
        "Distributed Classroom",
        "Failure to Disrupt",
        "Designing Games"
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li>{$book}!</li>";
        }
        ?>

        <?php foreach ($books as $book) : ?>
            <li><?= $book; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>