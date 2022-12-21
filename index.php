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
    /*
    $filteredHotels = [];
    $hasParking = $_GET["parking"] ?? "";
    $rating = $_GET["vote"] ?? "";

    $filtered = !empty($hasParking) || !empty($rating);

    if($filtered){
            /*foreach($hotels as $hotel){
            if(($hasParking === "true" && $hotel["parking"] == true) || ($hotel["vote" >= $rating])){
            $filteredHotels[] = $hotel;
            

            $mustPush = true;

            if($hasParking === "true" && $hotel["parking"] === false){
                $mustPush = false;
            }
            if(!empty($rating) && $hotel["vote"] < $rating){
                $mustPush = false;
            }

            if($mustPush){
                $filteredHotels[] = $hotel;
            }

        }

    }*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php hotel</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <div>
            <h1>PHP hotels</h1>
        </div>
        <form action="" method="GET" >
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Vote</label>
                        <input type="password" class="form-control" placeholder="" name="vote">
                    </div>
                </div>
                <div class="col">
                    <div class="form-check ">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="parking" value="" >
                        <label class="form-check-label" for="exampleCheck1">Parking</label>
                    </div>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $hotel){
                ?>
                    <tr>
                        <td><?php echo $hotel ['name']?></td>
                        <td><?php echo $hotel ['description']?></td>
                        <td><?php echo $hotel ['parking']?></td>
                        <td><?php echo $hotel ['vote']?></td>
                        <td><?php echo $hotel ['distance_to_center']?></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
            
        </table>

    </main>

    
    
</body>
</html>