<?php
    $address = array(
        "Ram" => "Anakantar",
        "Sita" => "Ghopteodar",
        "Laxman" => "Timiro dil ma"
    );
    $address["Hanuman"] = "Hawa";

    foreach ($address as $key => $value) {
        echo "$key lives in $value. <br/>";
    }
?>