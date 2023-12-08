<?php componente('topo_cadastro')?>

<div class="titulo_pagina">
        <h1>CADASTRO DE AVALIADOR </h1>
    </div>
    <form method="POST" action="<?=linkrota('cadastrarconta')?>">

    

    <div class="atributo-box">
        <div class="atributos">
        <?=flash()?>
                <p>
                    <span class="titulo">Nome: </span>
                    <input class="boxtext" type="text" placeholder="Insira seu nome" name="nome" value="<?=getValue('nome')?> ">
                <p>
                    <span class="titulo">Email: </span>
                    <input class="boxtext" type="email" placeholder="Insira seu email" name="email" value="<?=getValue('email')?> ">
                </p>
                <p>
                    <span class="titulo">Login: </span>
                    <input class="boxtext" type="text" placeholder="Insira seu login" name="login" value="<?=getValue('login')?> ">
                </p>
                <p>
                    <span class="titulo">Senha:  </span>
                    <input class="boxtext" type="password" placeholder="Insira sua senha" name="senha">
                </p>
                
        </div>
    </div>

   <button class="btnsave" type="submit">SALVAR PROGRESSO</button>
   
</form>
    <?php componente('rodape')?>