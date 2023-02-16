<?php

#____________________________________________________________________________________________
if (isset($_POST['searchCep'])) {
    $captureCep = filter_var(trim($_POST['captureCep']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $remove = ["!","@","#","a", "b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

    $cep = str_replace($remove, "", $captureCep);
    $urlViaCep = "https://viacep.com.br/ws/{$cep}/json/";
    $viaCep = json_decode(file_get_contents($urlViaCep));

    if (empty($viaCep->cep)) {
        echo "<script>alert('Non-existent CEP valid!')</script>";
    }else {
        $infoCep = [
            "cep" => $viaCep->cep,
            "street" => $viaCep->logradouro,
            "neighborhood" => $viaCep->bairro,
            "city" =>  $viaCep->localidade,
            "state" => $viaCep->uf
        ];
    }
}
#____________________________________________________________________________________________

?>