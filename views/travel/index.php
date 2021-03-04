// travel index
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travels</title>
    <?php require_once(UTIL . 'htmlLinks.php') ?>

    <link rel="stylesheet" href="/employeeManagement2/employee-management-v2/assets/css/characterDashboard.css">';
</head>
<body>
    <?php require_once(ASSETS . 'html/header.html') ?>
    <section class='gridContainer'>
        <h2>Travels:</h2>
        <div id="jsGrid">
            <table>
                <thead>
                    <tr>
                        <th>Travel number</th>
                        <th>Origin location</th>
                        <th>Target location</th>
                        <th>Passengers</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->data as $travel) {
                        echo "<tr>
                        <td><a href=>'{$travel->id}'</a></td>
                        <td><a href=>'{$travel->originLoc->name}'</a></td>
                        <td><a href=>'{$travel->destinationLoc->name}'</a></td>";
                    foreach ($travel->charactersTraveling as $character) {
                        echo "<td><a href=>'{$character->name}'</a></td>";
                    }
                    }
                    echo "</tr>";
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
