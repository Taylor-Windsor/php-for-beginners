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
                'author' => 'David Joyner'
            ],
            [
                'name' =>'Failure to Disrupt',
                'author' => 'Justin Reich'
            ]
            ];
        ?>

        <?php foreach($books as $book) : ?>
                <li><?php echo $book['name'] . " by " . $book['author'];?></li>
            <?php endforeach; ?>    
    </body>
</html>