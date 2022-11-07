<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to the future</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $presentTime = new DateTime('now', new DateTimeZone('Europe/paris'));
    $destinationTime = new DateTime('2024-05-28 07:45 Europe/paris');
    $difference = $presentTime->diff($destinationTime);
    ?>
    <h1>Back to the future !</h1>
    <br>
    <div class="destination">
        <h1><?= $destinationTime->format('M d Y h:iA') . '<br>' . 'Destination Time' . '<br>' . '<br>'; ?></h1>
    </div>
    <div class="present">
        <h1><?= $presentTime->format('M d Y h:iA') . '<br>' . 'Present Time' . '<br>' . '<br>'; ?></h1>
    </div>
    <div class="difference">
        <h1><?= $difference->format('%y years %m mois, %d jour %H hours %I') . '<br>' . 'Time Difference'; ?></h1>
    </div>
</body>

</html>