<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO List</title>
</head>

<body>

    <h1>TO DO List</h1>

    <ul>
        <?php

        foreach ($tasks as $task) :

            if ($task->isCompleted()) :
        ?>
                <li><strike><?= $task->description; ?></strike></li>
            <?php
            else :
            ?>
                <li><?= $task->description ?></li>
        <?php
            endif;
        endforeach;
        ?>
    </ul>
</body>

</html>