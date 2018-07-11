<?php

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "dashboard" => "View/dashboard.phtml",   
    "user" => "View/User/user.phtml",  
    "editarUser" => "View/User/editarUser.phtml", 
    "categoria" => "View/Categoria/categoria.phtml", 
    "categoriaListar" => "View/Categoria/listaCategoria.phtml",
    "categoriaEditar" => "View/Categoria/editarCat.phtml"    
//    "sub" => "View/Subcategoria/subcategoria.phtml",
//    "listarSubCategoria" => "View/Subcategoria/listarSubCategoria.phtml",
//    "produto" => "View/Produto/produto.phtml",
//    "listarProduto" => "View/Produto/listarProduto.phtml",
//    "marca" => "View/Marca/marca.phtml"
);

if ($pagina) {
    $encontrou = false;

    foreach ($arrayPaginas as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("View/dashboard.phtml");
    }
} else {
    require_once("View/dashboard.phtml");
}
?>