<?php
    include_once ('viacep.php');
    $address = getAddress();
?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Minha  primeira API em PHP </title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    <form action="." method="post">
        <p> Digite o CEP para encontrar o endereço. </p>
        <input type="text" placeholder="Digite um Cep..." name="cep" value="<?php echo $address->cep ?>">
        <input type="submit">
        <input type="text" placeholder="Rua" name="Rua" value="<?php echo $address->logradouro ?>">
        <input type="text" placeholder="Bairro" name="Bairro" value="<?php echo $address->bairro ?>">
        <input type="text" placeholder="Cidade" name="Cidade" value="<?php echo $address->localidade ?>">
        <input type="text" placeholder="Estado" name="Estado" value="<?php echo $address->uf ?>">
    </form>

</body>
</html>