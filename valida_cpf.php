<?php
function validateCPF($cpf){

$cpf = preg_replace('/[^0-9]/', "", $cpf);

if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
    return false;
}

$cpf_quantity_to_loop = [9, 10];

foreach ($cpf_quantity_to_loop as $item) {

    $sum = 0;
    $cpf_to_multiplicate = $item + 1;

    for ($index = 0; $index < $item; $index++) {

        $sum += $cpf[$index] * ($cpf_to_multiplicate--);

    }

    $result = (($sum * 10) % 11);

    if ($cpf[$item] != $result) {
        return false;
    }

}

return true;

}
?>