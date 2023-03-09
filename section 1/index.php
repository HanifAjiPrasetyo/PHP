<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => "Do Androids Dream of Electric Sheep",
            'author' => "Philip K. Dick",
            'releaseYear' => 1968,
            'purchaseUrl' => "http://example.com"
        ],
        [
            'name' => "Project Hail Mary",
            'author' => "Andy Weir",
            'releaseYear' => 2021,
            'purchaseUrl' => "http://example.com"
        ],
        [
            'name' => "The Martian",
            'author' => "Andy Weir",
            'releaseYear' => 2011,
            'purchaseUrl' => "http://example.com"
        ]
    ];

    // function filter($items, $function)
    // {
    //     $filteredItems = [];

    //     foreach ($items as $item) {
    //         if ($function($item)) {
    //             $filteredItems[] = $item;
    //         }
    //     }
    //     return $filteredItems;
    // }

    // Built-in function untuk filtering array
    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] > 2000;
    });

    ?>

    <!-- Menampilkan buku berdasarkan filter -->
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>