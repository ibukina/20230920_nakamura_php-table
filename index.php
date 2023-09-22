<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-table</title>
    <style>
        table,tr,th,td{
            border:solid 1px black;
            border-collapse:collapse;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <table>
            <?php
            for($a=1; $a<10; $a++){
                for($b=1; $b<10; $b++){
                    echo '<td>' . $a*$b . '</td>' ;
                }
                echo '<tr>' . '</tr>' ;
            }
            ?>
    </table>
</body>
</html>