<?php componente('topo_cadastro')?>
<form action="">
        <div class="perfil_usuario">
            <img src="<?=imgPng('perfil')?>" alt="logo html e css"> 
                <div class="perfiltexto">
                        <p><b>Aluno(a):</b> Gabriella Pugliesi</p>
                        <p><b>Nascimento:</b> 25/08/1999
                        <p><b>Objetivo:</b> Ganho de massa</p>
                        <p><b>Matrícula:</b> 0023055</p>
                 </div>
        </div>

        <div class="titulo_pagina">
            <h1>CADASTRO DE AVALIAÇÃO </h1>
        </div>
       
        <div class="quest-boxs">
            <div class="checkquest">
                
                <div class="sectionquest">
                    <label for="fumante"><b>Fumante:</b></label>
                        <div class="checkmark">
                            <div class="inputs">
                                <input name="fumante" id="demo_opt_1" type="radio" class="css-checkbox">
                                <label for="demo_opt_1">Sim</label>
                                <input name="fumante" id="demo_opt_2" type="radio" class="css-checkbox" checked="">
                                <label for="demo_opt_2">Não</label>
                            </div>
                     </div>
                </div> 
                <div class="sectionquest">     
                    <label for="atividade"><b>Problemas na coluna:</b></label>
                        <div class="checkmark">
                            <div class="inputs2">
                                <input name="coluna" id="demo_opt_1" type="radio" class="css-checkbox">
                                <label for="demo_opt_1">Sim </label>
                                <input name="coluna" id="demo_opt_2" type="radio" class="css-checkbox" checked="">
                                <label for="demo_opt_2">Não</label>
                            </div>
                        </div>
                </div> 
                <div class="sectionquest">     
                <label for="atividade"><b>Pratica atividade física:</b></label>
                    <div class="checkmark">
                        <div class="inputs3">
                                <input name="atividade" id="demo_opt_1" type="radio" class="css-checkbox">
                                <label for="demo_opt_1">Sim</label>
                                <input name="atividade" id="demo_opt_2" type="radio" class="css-checkbox" checked="">
                                <label for="demo_opt_2">Não</label>
                        </div>
                    </div>
                </div>
                <div class="sectionquest">
                <label for="comorbidade"><b>Comorbidades:</b></label>
                <div class="checkmark"></div>
                        <div class="inputs4">
                                <input name="comorbidade" id="demo_opt_1" type="radio" class="css-checkbox">
                                <label for="demo_opt_1">Sim</label>
                                <input name="comorbidade" id="demo_opt_2" type="radio" class="css-checkbox" checked="">
                                <label for="demo_opt_2">Não</label>
                        </div>
                </div>
                </div>
            </div>


        </div>

        <div class="atributo-box">
            <div class="atributos">
                    <p>
                        <span class="titulo">Altura: </span>
                        <input class="boxtext" type="text" placeholder="Insira sua altura em centímetros">
                    </p>
                    <p>
                        <span class="titulo">Peso: </span>
                        <input class="boxtext" type="text" placeholder="Insira seu peso em kilogramas">
                    </p>
                    <p>
                        <span class="titulo">Indice de massa corporal(IMC): </span>
                        <input class="boxtext" type="text" placeholder="Insira seu IMC">
                    </p>
                    <p>
                        <span class="titulo">Peso Ósseo(%): </span>
                        <input class="boxtext" type="text" placeholder="Insira seu peso ósseo">
                    </p>
            </div>
            <div class="atributos2">
                <p>
                    <span class="titulo">Massa gorda(%): </span>
                    <input class="boxtext" type="text" placeholder="Insira sua massa gorda">
                </p>
                <p>
                    <span class="titulo">RQC(%): </span>
                    <input class="boxtext" type="text" placeholder="Insira seu RQC">
                </p>
                <p>
                    <span class="titulo">Massa Muscular(%): </span>
                    <input class="boxtext" type="text" placeholder="Insira sua massa muscular">
                </p>
               
        </div>
    </div>
    <div class="lastbox">
        <div class="checklist-fisico">
           
            <input class="caixacheck" type="checkbox"  />
            <label class="control_control-checkbox">
                Riscos de disturbios alimentares   
                <div class="control_indicator"></div>
            </label>
            <input class="caixacheck" type="checkbox" />
            <label class="control_control-checkbox">
                Abaixo da média
               
                <div class="control_indicator"></div>
            </label>
            <input class="caixacheck" type="checkbox" />
            <label class="control_control-checkbox">
                Médio
                
                <div class="control_indicator"></div>
            </label>
            <input class="caixacheck" type="checkbox" />
            <label class="control_control-checkbox">
                Bom
                
                <div class="control_indicator"></div>
            </label>
            <label class="control control-checkbox">
                <input class="caixacheck" type="checkbox" />
                Ótima condição física
                
                <div class="control_indicator"></div>
            </label>
        </div>
        <div class="treinos">
            <p>
                <span class="titulo">Atividades físicas: </span>
                <input class="boxtext" type="text" placeholder="Ex.: Crossfit">
            </p>
            <p>
                <span class="titulo">Frequência: </span>
                <input class="boxtext" type="text" placeholder="Ex.: 4x na semana">
            </p>
            <p>
                <span class="titulo">Coxa: </span>
                <input class="boxtext" type="text" placeholder="Ex.: 2x na semana">
            </p>
            <p>
                <span class="titulo">Percentual Gordura(%): </span>
                <input class="boxtext" type="text" placeholder="Ex.: 3x na semana">
            </p>
        </div>
    </div>
            
    </form>
    
    <button class="btnsave" type="submit">SALVAR PROGRESSO</button>
    <?php componente('rodape')?>