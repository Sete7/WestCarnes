<?php
require_once '../../app/config.php';
//require_once '../../Controller/SubcategoriaController.php';
sleep(2);

//recuperando o id pelo POST
$cod = $_POST['id'];

//INTANCIANDO A CLASSE
$subcategoriaController = new SubcategoriaController();

//CRIANDO OBJETO
$listaSubcategoria = $subcategoriaController->listarSub($cod);

//SE LISTA FOI IGUAL A NULL
if ($listaSubcategoria == null):
    echo "<option>Não existe subcategoria relacionada</option>";
else:
    
    //SE RETORNA UMA LISTA
    echo "<option>Selecione uma subcategoria</option>";
    foreach ($listaSubcategoria as $sub):
        echo "<option value='{$sub->getSub_cod()}'>{$sub->getSub_titulo()}</option>";
    endforeach; 
endif;






