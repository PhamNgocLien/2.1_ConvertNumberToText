<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert number to text</title>
</head>
<body>
<h3>Convert number to text</h3>
<form method="POST">
    <input type="text" name="number" placeholder="Please input number">
    <input type="submit" id="convert">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $convertnumber = $_POST["number"];
    $numberArr = str_split($convertnumber);
    $hundred = '';
    $tenty = '';
    $unit = '';

    if ($convertnumber == 0) {
        $unit = 'zero';
    } else if ($convertnumber < 10) {
        switch ($numberArr[count($numberArr) - 1]) {
            case 1:
                $unit = 'one';
                break;
            case 2:
                $unit = 'two';
                break;
            case 3:
                $unit = 'three';
                break;
            case 4:
                $unit = 'four';
                break;
            case 5:
                $unit = 'five';
                break;
            case 6:
                $unit = 'six';
                break;
            case 7:
                $unit = 'seven';
                break;
            case 8:
                $unit = 'eight';
                break;
            case 9:
                $unit = 'nine';
                break;
        }
    } else if ($convertnumber >=10 && $convertnumber < 100) {
        if ($numberArr[0] == 1) {
            switch ($numberArr[count($numberArr) - 1]) {
                case 0:
                    $tenty = 'ten';
                    break;
                case 1:
                    $tenty = 'elevent';
                    break;
                case 2:
                    $tenty = 'twelve';
                    break;
                case 3:
                    $tenty = 'thirteen';
                    break;
                case 4:
                    $tenty = 'fourteen';
                    break;
                case 5:
                    $tenty = 'fifteen';
                    break;
                case 6:
                    $tenty = 'sixteen';
                    break;
                case 7:
                    $tenty = 'seventeen';
                    break;
                case 8:
                    $tenty = 'eighteen';
                    break;
                case 9:
                    $tenty = 'nineteen';
                    break;
            }
        } else {
            switch ($numberArr[count($numberArr) - 2]) {
                case 2:
                    $tenty = 'twenty';
                    break;
                case 3:
                    $tenty = 'thirty';
                    break;
                case 4:
                    $tenty = 'fourty';
                    break;
                case 5:
                    $tenty = 'fifty';
                    break;
                case 6:
                    $tenty = 'sixty';
                    break;
                case 7:
                    $tenty = 'seventy';
                    break;
                case 8:
                    $tenty = 'eighty';
                    break;
                case 9:
                    $tenty = 'ninety';
                    break;
            }
            switch ($numberArr[count($numberArr) - 1]) {
                case 1:
                    $unit = 'one';
                    break;
                case 2:
                    $unit = 'two';
                    break;
                case 3:
                    $unit = 'three';
                    break;
                case 4:
                    $unit = 'four';
                    break;
                case 5:
                    $unit = 'five';
                    break;
                case 6:
                    $unit = 'six';
                    break;
                case 7:
                    $unit = 'seven';
                    break;
                case 8:
                    $unit = 'eight';
                    break;
                case 9:
                    $unit = 'nine';
                    break;
            }
        }
    } else if ($convertnumber >= 100 && $convertnumber < 1000) {
        if ($numberArr[0] == 1) {
            switch ($numberArr[count($numberArr) - 1]) {
                case 0:
                    $tenty = 'ten';
                    break;
                case 1:
                    $tenty = 'elevent';
                    break;
                case 2:
                    $tenty = 'twelve';
                    break;
                case 3:
                    $tenty = 'thirteen';
                    break;
                case 4:
                    $tenty = 'fourteen';
                    break;
                case 5:
                    $tenty = 'fifteen';
                    break;
                case 6:
                    $tenty = 'sixteen';
                    break;
                case 7:
                    $tenty = 'seventeen';
                    break;
                case 8:
                    $tenty = 'eighteen';
                    break;
                case 9:
                    $tenty = 'nineteen';
                    break;
            }
        } else {
            switch ($numberArr[count($numberArr) - 3]) {
                case 1:
                    $hundred = 'one hundred';
                    break;
                case 2:
                    $hundred = 'two hundred';
                    break;
                case 3:
                    $hundred = 'three hundred';
                    break;
                case 4:
                    $hundred = 'four hundred';
                    break;
                case 5:
                    $hundred = 'five hundred';
                    break;
                case 6:
                    $hundred = 'six hundred';
                    break;
                case 7:
                    $hundred = 'seven hundred';
                    break;
                case 8:
                    $hundred = 'eight hundred';
                    break;
                case 9:
                    $hundred = 'nine hundred';
                    break;
            }
            switch ($numberArr[count($numberArr) - 2]) {
                case 2:
                    $tenty = 'twenty';
                    break;
                case 3:
                    $tenty = 'thirty';
                    break;
                case 4:
                    $tenty = 'fourty';
                    break;
                case 5:
                    $tenty = 'fifty';
                    break;
                case 6:
                    $tenty = 'sixty';
                    break;
                case 7:
                    $tenty = 'seventy';
                    break;
                case 8:
                    $tenty = 'eighty';
                    break;
                case 9:
                    $tenty = 'ninety';
                    break;
            }
            switch ($numberArr[count($numberArr) - 1]) {
                case 1:
                    $unit = 'one';
                    break;
                case 2:
                    $unit = 'two';
                    break;
                case 3:
                    $unit = 'three';
                    break;
                case 4:
                    $unit = 'four';
                    break;
                case 5:
                    $unit = 'five';
                    break;
                case 6:
                    $unit = 'six';
                    break;
                case 7:
                    $unit = 'seven';
                    break;
                case 8:
                    $unit = 'eight';
                    break;
                case 9:
                    $unit = 'nine';
                    break;
            }
        }
    } else {
        echo 'Out of ability';
    }
    echo $hundred . ' '.$tenty . ' '.$unit;
}
?>
</body>
</html>