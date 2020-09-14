<?php
$quiniela = array(
    "Partido1" => array(TRUE, TRUE, FALSE),
    "Partido2" => array(TRUE, FALSE, FALSE),
    "Partido3" => array(FALSE, TRUE, FALSE),
    "Partido4" => array(FALSE, TRUE, FALSE),
    "Partido5" => array(TRUE, FALSE, FALSE),
    "Partido6" => array(TRUE, FALSE, TRUE),
    "Partido7" => array(FALSE, FALSE, TRUE),
    "Partido8" => array(TRUE, TRUE, FALSE),
    "Partido9" => array(FALSE, TRUE, TRUE),
    "Partido10" => array(TRUE, TRUE, TRUE),
    "Partido11" => array(TRUE, FALSE, TRUE),
    "Partido12" => array(TRUE, FALSE, TRUE),
    "Partido13" => array(TRUE, FALSE, FALSE),
    "Partido14" => array(TRUE, FALSE, FALSE),
    "Partido15" => array(TRUE, TRUE, TRUE),
);
?>
<html>

<head>
    <TITle>La Quiniela</TITle>
    <h1>Juego de la Quiniela</h1>
</head>

<body>
    <div>
        <?php
        for ($i = 1; $i <= (count($quiniela)); $i++) {
            echo "Partido$i: ";
            for ($j = 0; $j < 3; $j++) {
                switch ($j) {
                    case 0:
                        switch (($quiniela["Partido$i"][$j])) {
                            case TRUE:
                                echo "1";
                                break;
                            case FALSE:
                                echo "";
                                break;
                        }
                        break;
                    case 1:
                        switch (($quiniela["Partido$i"][$j])) {
                            case TRUE:
                                echo "X";
                                break;
                            case FALSE:
                                echo "";
                                break;
                        }
                        break;
                    case 2:
                        switch (($quiniela["Partido$i"][$j])) {
                            case TRUE:
                                echo "2";
                                break;
                            case FALSE:
                                echo "";
                                break;
                        }
                        break;
                }
            }
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>