<html>

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>
    <h1>Recommended Books</h1>

    
    <h2> Books Since 2000 </h2>
    <?php foreach ($filteredBooks as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author']; ?>
            </a>
        </li>
        
    <?php endforeach; ?>

    

    
</body>

</html>