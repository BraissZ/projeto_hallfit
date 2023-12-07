<?php componente('topo_login')?>
<div class="area_login">
        <h1 id="login-texto">LOGIN</h1>
            <input type="text" placeholder="Usuario">
            <br>
            <input type="password" placeholder="Senha">
            <br>
        <a href="<?=linkrota('')?>" rel="next" target="_self">
            <button id=botao>Entrar</button>
        </a>
        <br>
        <div class="logo_hallfit">
            <img src="<?=imgPng('muscle')?>" alt="Músculo" id="hallfit_logo">
            <h1>HALLFIT</h1>
        </div>
    </div>

<?php componente('rodape')?>