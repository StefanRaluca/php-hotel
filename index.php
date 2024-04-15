<?php
  $hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

/* foreach ($hotels as $hotel) {
    echo "Name :" . $hotel['name'] . "<br>"  . "<br>" ;
    echo  "Description :" . $hotel['description'] . "<br>"  . "<br>";
    echo "Parking :" . $hotel['parking'] . "<br>"  . "<br>" ;
    echo "Vote :" . $hotel['vote'] . "<br>"   . "<br>" ;
    echo "Distance to center :" . $hotel['distance_to_center'] . "<br>"  . "<br>" ;
}
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> PHP Hotel</title>
</head>
<body>
<div class="container">
    <h1 class="text-center m-3">List of hotels :</h1>

    <form method="GET">
        <div class="form-group">
            <label for="parkingCheckbox">Show only hotels with parking</label>
            <input type="checkbox" class="form-check-input" name="parking" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
    <table class="table  table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Name :</th>
                <th scope="col">Description :</th>
                <th scope="col">Parking :</th>
                <th scope="col">Vote :</th>
                <th scope="col">Distance to center :</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($hotels as $hotel) {
                      echo "<tr>";
                echo "<td>" . $hotel['name'] . "</td>";
                echo  "<td>" . $hotel['description'] . "</td>" ;
                echo "<td>"  . ($hotel['parking'] ? 'Disponibile' : 'Non disponibile') . "</td>";
                echo "<td>"  . $hotel['vote'] . "</td>" ;
                echo "<td>" . $hotel['distance_to_center'] . " km" . "</td>";
                };
              
            ?>
        </tbody>
    </table>
</div>
</body>
</html>