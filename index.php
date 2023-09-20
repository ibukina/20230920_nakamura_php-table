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
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=1;
                echo '<th>' . $a*$b . '</th>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=2;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=3;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=4;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=5;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=6;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=7;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=8;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
        <tr>
            <?php
            for($a=1; $a<10; $a++){
                $b=9;
                echo '<td>' . $a*$b . '</td>' ;
            }
            ?>
        </tr>
    </table>
</body>
</html>