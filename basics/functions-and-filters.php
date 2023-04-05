<html>

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>
    <h1>Recommended Books</h1>

    <?php
    $books = [
        [
            'name' => 'Distributed Classroom',
            'author' => 'David Joyner',
            'releaseYear' => 2021,
            'purchaseUrl' => 'https://www.amazon.com/Distributed-Classroom-Learning-Large-Scale-Environments/dp/0262046059/ref=sr_1_1?crid=WSTT7C4GZJBW&keywords=the+distributed+classroom&qid=1680658438&sprefix=the+distrubuted+class%2Caps%2C81&sr=8-1'
        ],
        [
            'name' => 'Failure to Disrupt',
            'author' => 'Justin Reich',
            'releaseYear' => 2022,
            'purchaseUrl' => 'https://www.amazon.com/Failure-Disrupt-Technology-Transform-Education/dp/0674278682/ref=sr_1_1?crid=I31LF5XQF7VQ&keywords=failure+to+disrupt+justin+reich&qid=1680658461&sprefix=failure+to+dis%2Caps%2C84&sr=8-1'
        ],
        [
            'name' => 'Designing Games',
            'author' => 'Tylan Sylvester',
            'releaseYear' => 2021,
            'purchaseUrl' => 'https://www.amazon.com/Designing-Games-Guide-Engineering-Experiences/dp/1449337937/ref=sr_1_2?crid=13S2HSEFVQKGW&keywords=Designing+games&qid=1680658563&sprefix=designing+games%2Caps%2C91&sr=8-2'
        ]
    ];

    function filterByYear($books, $year) {
        $filterdBooks = [];

        foreach ($books as $book){
            if($book['releaseYear'] === $year){
                $filterdBooks[] = $book;
            }
        }

        return $filterdBooks;
    }
    ?>
    <h2> 2021 Books </h2>
    <?php foreach (filterByYear($books, 2021) as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author']; ?>
            </a>
        </li>
        
    <?php endforeach; ?>

    <h2> 2022 Books </h2>
    <?php foreach (filterByYear($books, 2022) as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author']; ?>
            </a>
        </li>
        
    <?php endforeach; ?>

    
</body>

</html>