<?php componente('topo')?>

    <div class="conteúdo_cadastro_busca">
        <input type="text" placeholder="Buscar...">
        <a href="<?=linkrota('cadastro')?>">CADASTRAR</a>
    </div>

    <div class="imagens_conteúdo">
        <a href="<?=linkrota()?>"><img src="<?=imgJpg('aluno1_editada')?>" alt="Aluno 1"><p>Aluno 1</p></a>
        <a href="<?=linkrota()?>"><img src="<?=imgJpg('aluno2_editada')?>" alt="Aluno 2"><p>Aluno 2</p></a>
        <a href="<?=linkrota()?>"><img src="<?=imgJpg('aluno3_editada')?>" alt="Aluno 3"><p>Aluno 3</p></a>
    </div>
    
    <?php componente('rodape')?>