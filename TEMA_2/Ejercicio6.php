<?php
function isBitten() {
    $randomNumber = rand(0, 1);

    if ($randomNumber === 1) {
        return true;
    } else {
        return false;
    }
}
echo "Ha salildo " .isBitten();
?>