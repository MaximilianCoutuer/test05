<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <ul>
        <!--<?php foreach($tasks as $task) : ?>
            <li><?php echo $task; ?></li>
        <?php endforeach; ?>
        @foreach($tasks as $task)
            {{ $task }}
        @endforeach -->
        @foreach($tasks as $task)
            {{ $task->body }}
        @endforeach
    </ul>
</body>
</html>