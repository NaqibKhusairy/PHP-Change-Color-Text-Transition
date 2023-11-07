<!DOCTYPE html>
<html>
<head>
    <title>Text Transition Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="text-container">
        <?php
        if (isset($_POST['text_input'])) {
            $text = $_POST['text_input'];

            $colors = ["#ffffff", "#54BCDA", "#DA4167", "#C589E8"];
            $delay = 0;

            for ($i = 0; $i < strlen($text); $i++) {
                if(strlen($text)<=5) {
                    $time= 1/strlen($text);
                }
                else if(strlen($text)<=10) {
                    $time= 2/strlen($text);
                }
                else{
                    $time= 3/strlen($text);
                }
                $color = $colors[$i % count($colors)];
                echo "<span style=\"--color: $color; --delay: ${delay}s\">{$text[$i]}</span>";
                $delay += $time;
            }
        } else {
            echo "Please enter text in the input form.";
        }
        ?>
    </div>
</body>
</html>
