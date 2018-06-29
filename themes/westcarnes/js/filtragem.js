/*  -------------CODIGO JS COM EFEITO TRANSITIONS NAS IMAGENS------------*/

$(document).ready(function() {
	$('.category_list .category_item[category="all"]').addClass('ct_active');

/*  -------------FILTRANDO TODOS OS PRODUTO------------*/
		$('.category_item').click(function(){
			var catProduct = $(this).attr('category');
			console.log(catProduct);
                
/*  -------------AGREGANDO CLASSE ACTIVE A TODOS SELECIONADOS------------*/
			$('.category_item').removeClass('ct_active');
			$(this).addClass('ct_active');

/*  -------------OCUTANDO PRODUTO------------*/		
			$('.item_produto').css('transform','scale(0)');
				function hideProduct(){
				$('.item_produto').hide();
			}setTimeout(hideProduct,400);
/*  -------------MOSTRANDO PRODUTO------------*/
			function showProduct(){
			$('.item_produto[category="'+catProduct+'"]').show();	
			$('.item_produto[category="'+catProduct+'"]').css('transform','scale(1)');			
		}setTimeout(showProduct,400);
		});

/*  -------------MOSTRANDO TODOS PRODUTO------------*/
		$('.category_item[category="all"]').click(function(){
			function showAll(){
			$('.item_produto').show();
			$('.item_produto').css('transform', 'scale(1)');
		}setTimeout(showAll,400);
		});
		
 });
	