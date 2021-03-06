<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->data->name ?></title>

    <?php require_once(UTIL . 'htmlLinks.php') ?>

    <link rel="stylesheet" href="/employee-management-v2/assets/css/travelDetails.css">
    <script defer src="/employee-management-v2/assets/js/characterDetails.js"></script>
</head>

<body>
    
<?php require_once(ASSETS . 'html/header.html') ?>
<section class='infoSection'>
        <form action="" method="post" class='infoContainer'>
            <div class='container'>
                <h2 class="title">Travel information: </h2>
                <div class='info_row' id='travel_info'>
                    <div class="img-container">
                        <!-- <img src="\Employee-management-V2\assets\img\travel-bcground.png" alt=""> -->
                    </div>
                    <div class="travel_info-container">
                        <div class="travel_info-item">
                            <div><label for="origin_loc">Origin:</label></div>
                            <div><a href='<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/employee-management-v2/location/details/' . $this->data->originLoc->id ?>'>
                                <input type="text" name="origin_loc" id="origin_loc" data-locationId='1' value='<?php echo $this->data->originLoc->name ?>' disabled></a>
                            </div>
                                
                        </div>
                        <div class="travel_info-item">
                            <div><label for="origin_loc">Destinatin:</label></div>
                            <div><a href='<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/employee-management-v2/location/details/' . $this->data->destinationLoc->id ?>'><input type="text" name="origin_loc" id="origin_loc" data-locationId='1' value='<?php echo $this->data->destinationLoc->name ?>' disabled></a></div>
                        </div>
                        <div class="travel_info-item">
                            <div><label for="origin_loc">Episode:</label></div>
                            <div><a href='<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/employee-management-v2/location/details/' . $this->data->episode->id ?>'>
                            <input type="text" name="origin_loc" id="origin_loc" data-locationId='1' value='<?php echo $this->data->episode->name ?>' disabled></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='info_row charactersSection'>
            <h2 class="title">Passengers: </h2>
                    <?php
                    foreach ($this->data->charactersTraveling as $character) {
                        echo "
                        <a class='characterCont' href='http://{$_SERVER['SERVER_NAME']}/employee-management-v2/character/details/{$character->id}'>
                        <div class='characterInfo-cont characterInfo-cont-img'>
                        <img src=https://rickandmortyapi.com/api/character/avatar/{$character->id}.jpeg alt=''>
                    </div>
                    <div class='characterInfo-cont characterInfo-cont-info'>
                        <div class='characterInfo-item'>
                            <label for='name'>Name:</label>
                            <input type='text' name='name' id='name' value={$character->name} disabled>
                        </div>
                        <div class='characterInfo-item'>
                            <label for='status'>Status:</label>
                            <input type='text' name='status' id='status' value={$character->status} disabled>
                        </div>
                        <div class='characterInfo-item'>
                            <label for='species'>Specie:</label>
                            <input type='text' name='species' id='species' value={$character->species} disabled>
                        </div>
                        <div class='characterInfo-item'>
                            <label for='gender'>Gender:</label>
                            <input type='text' name='gender' id='gender' value={$character->gender} disabled>
                        </div>
                        </div>
                        </a>
                    ";
                    }
                    ?>
            </div>
        </form>
    </section>
    <!-- 
    <section class='infoSection'>
        <form action="" method="post" class='infoContainer'>
            <div class='info_row' id='travel_info'>
                <img src="<?php echo constant('ASSETS')."/img/travel-bcground.png"; ?> alt=">
                <label for="origin_loc">Origin:</label>
                <div>
                    <select name="origin_loc" id="origin_loc" data-locationId='<?php echo $this->data->originLoc->id; ?>'></select>
                    <a type="text" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/employee-management-v2/location/details/' . $this->data->originLoc->id ?>">Go!</a>
                </div>
                <label for="last_loc">Last Seen:</label>
                <div>
                    <select name="last_loc" id="last_loc" data-locationId='<?php echo $this->data->lastLoc->id; ?>'></select>
                    <a type="text" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/employee-management-v2/location/details/' . $this->data->lastLoc->id ?>">Go!</a>
                </div>
            </div>
            <div class='info_row'>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value='<?php echo $this->data->name ?>'>
                <label for="status">Status:</label>
                <select name="status" id="status" data-status='<?php echo $this->data->status; ?>'></select>
                <label for="species">Specie:</label>
                <input type="text" name="species" id="species" value='<?php echo $this->data->species ?>'>
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" data-gender='<?php echo $this->data->gender; ?>'></select>
                <input type="submit" value="Save">
            </div>
        </form>
    </section>
    <div class='moreInfo'>
        <section class='episodesSection'>
            <h2>Episodes:</h2>
            <ul class='episodesSection-list'>
                <?php
                foreach ($this->data->episodes as $episode) {
                    echo "<li></li>";
                }
                ?>
            </ul>
        </section>

        <section class='travelsSection'>
            <h2>Travels:</h2>
            <ul class='travelsSection-list'>
                <?php
                if (isset($this->data->travels)) {
                    foreach ($this->data->travels as $travel) {
                        echo "<li><a href='http://" . $_SERVER['SERVER_NAME'] . "/employee-management-v2/travel/details/" . $travel->id . "'></a></li>";
                    }
                }
                ?>
            </ul>
        </section>
    </div> -->

</body>

</html>