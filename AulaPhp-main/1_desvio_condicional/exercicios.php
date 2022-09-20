<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $cartao_fidelidade= true;
    $valor_compra=150.60;
    $valor_frete=20.0;

    if($cartao_fidelidade && $valor_compra >= 500){
        $valor_frete=0;

    }else if($cartao_fidelidade && $valor_compra >= 200){
        $valor_frete = 10;
    } else if ($cartao_fidelidade && $valor_compra >= 100)
    $valor_frete=15;
    
    
    
    ?>
    <h2>resumo do pedido</h2>
    <!---o terario funciona assim-->
    <!----<condica> ? <valor se verdadeiro> : <valor for falso> -->
    <p><b>possui cartao fidelidade<b> <?= $cartao_fidelidade ? 'sim' : 'nao'?></p>
    <p><b> valor dos produtos </b>R$ <?=$valor_compra?></p>
    <p><b>valor do frete </b>R$ <?$valor_frete?></p>
    <p><b>valor total</b>R$ <?$valor_compra + $valor_frete?></p>
</body>
</html>