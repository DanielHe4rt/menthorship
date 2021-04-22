<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracast</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Task for the day</h1>
        <ul>
            <li>
                <strong>Name: </strong> <?= ucfirst($task['title']); ?>
            </li>
            <li>
                <strong>Due date: </strong> <?= ucfirst($task['due']); ?>
            </li>
            <li>
                <strong>Personal Responsible: </strong> <?= ucfirst($task['assigned_to']); ?>
            </li>
            <li>
                <strong>Status: </strong> <?= $task['completed'] ? 'Complete &#9989' : 'Incomplete &#10005'; ?>
            </li>
        </ul>
</body>
</html>