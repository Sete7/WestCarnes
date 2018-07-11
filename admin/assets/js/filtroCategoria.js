$(document).ready(function () {
//    $("#slCategoria").change(function () {
//        beforeSend: $("#slSubcategoria").html('<option value="0">Aguarde Carregando...</option>');       
//        
//        var categoria = $("#slCategoria").val();        
//        console.log(categoria);
//        
//        $.post("ajax/subcategoria.php", {categoria: categoria}, function (pegar_categoria) {
//            complete: $("#slSubcategoria").html(pegar_categoria);
//        });
//    });

    $("#slCategoria").change(function () {
        var categoria = $("#slCategoria").val();        
        console.log(categoria);
        
        $.ajax({
            url: "ajax/subcategoria.php",
            type: 'POST',
            data:{id:categoria},
            beforeSend: function () {
                $("#slSubcategoria").html('<option value="">Aguarde Carregando...</option>'); 
            },
            success: function (data) {
                $("#slSubcategoria").html(data); 
            },
            error: function (data) {
                $("#slSubcategoria").html("Houve um erro"); 
            }
        });
    });
});