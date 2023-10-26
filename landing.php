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
    var_dump($_GET,$hotels);
  $arrayToPrint = [];
  $parkingValue = filter_var($_GET['parkingSelect'], FILTER_VALIDATE_BOOLEAN);
  $voteValue = $_GET["voteSelect"];

  if($parkingValue){
        foreach($hotels as $hotel){
            if($hotel["parking"]){
             $arrayToPrint[] = $hotel;
        }
    }
    }else{
        foreach($hotels as $hotel){
            if(!$hotel["parking"]){
             $arrayToPrint[] = $hotel;
        }
    }
    }
  var_dump($arrayToPrint,$parkingValue);

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <title>landing hotels php</title>
</head>
<body>
<div class="container my-5">
    <h1 class="my-3">Hotels</h1>
    <ul class="list-group">
      <?php foreach($arrayToPrint as $hotel): ?>
      <li class="list-group-item" style="text-decoration: underline;font-weight: bold;">
        <?php echo $hotel["name"] ?>
      </li>
      <ul > 
        <li > <strong>Descrizione:</strong> <?php echo $hotel["description"] ?></li>
        <li > <strong>Parcheggio:</strong> <?php if ($hotel["parking"]){
          echo "Si";
        }else{
          echo "No";
        } ?></li>
        <li > <strong>Distanza dal centro:</strong> <?php echo $hotel["distance_to_center"] ?></li>
        <li > <strong>Stelle: </strong> <?php echo $hotel["vote"] ?></li>
      </ul>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>