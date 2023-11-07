<?php
if (isset($_POST['text_input'])) {
    $text = $_POST['text_input'];
    $totaltime = strlen($text) * 0.25;
    $totaltime = ceil($totaltime);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Text Transition Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        :root {
            --totaltime: <?php echo $totaltime . "s"; ?>;
        }
    </style>
</head>
<body>
    <div class="text-container">
        <?php
        $colors = ["#ffffff", "#54BCDA", "#DA4167", "#C589E8"];
        $delay = 0;

        for ($i = 0; $i < strlen($text); $i++) {
            $color = $colors[$i % count($colors)];
            echo "<span style=\"--color: $color; --delay: ${delay}s\">{$text[$i]}</span>";
            $delay += 0.25;
        }
        ?>
    </div>
    <?php
    } else {
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>Text Transition Result</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
    <h1 style='color : white'>Please enter text in the input form.</h1>";
    }
    ?>
</body>
</html>