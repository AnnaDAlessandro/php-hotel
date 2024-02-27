<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere ',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => '10.4 km'
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro ',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => '2 km'        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare ',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => '1 km'
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista ',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => '5.5 km'
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano ',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => '50 km'
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="p-5">
    <header>
        <h1 class="text-center p-3">The Hotels</h1>
    </header>
    <main class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance to center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $element) : ?>
                        <tr class="table-active">
                            <td><?= $element['name'] ?></td>
                            <td><?= $element['description'] ?></td>
                            <td><?= ($element['parking'] ? 'Si': 'No' ) ?></td>
                            <td><?= $element['vote'] ?></td>
                            <td><?= $element['distance_to_center'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>