var productList = [{"label":"CST1020969","value":"1"},{"label":"MAX1020938","value":"2"},{"label":"MRF82516SML","value":"3"},{"label":"APO1020MA","value":"4"},{"label":"MRF1020M77","value":"5"},{"label":"MOB1020969","value":"6"},{"label":"BRI1857014","value":"7"}] ; 

APchange = function(event, ui){
	$(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    function purchase_productList(cName) {


   
		var priceClass = 'price_item'+cName;
		var stock_ctn = 'stock_ctn_'+cName;
        $( ".productSelection" ).autocomplete(
		{
            source: productList,
			delay:300,
			focus: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				return false;
			},
			select: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				
				var id=ui.item.value;
				var dataString = 'product_id='+ id;
				var base_url = $('.baseUrl').val();
                var supplier = $('.supplier_hidden_value').val(); 
                if(supplier.length==0)
            	{
                    alert("Select a supplier");
                    return false;
                }
                var supplier_name = $("#supplier_name").val();
				$.ajax
				   ({
						type: "POST",
						url: base_url+"Cinvoice/retrieve_product_data",
						data: dataString,
						cache: false,
						success: function(data)
						{
							var obj = jQuery.parseJSON(data);
					
                          	var server_supplier=obj.supplier_id;
                                                        
                            if(supplier != server_supplier)
                            {
                            	alert("It's not " +supplier_name+"'s  product");
			                    $('.'+priceClass).val("");
			                    $('.'+stock_ctn).val("");
			                    quantity_calculate(cName);
			                    return false;
                            }
                          
                            $('.'+priceClass).val(obj.supplier_price);
                            $('.'+stock_ctn).val(obj.total_product);
                            quantity_calculate(cName);
                            
							//This Function Stay on purchase.js page
						} 
					});
				
				$(this).unbind("change");
				return false;
			}
		});
		$( ".productSelection" ).focus(function(){
			$(this).change(APchange);
		
		});
    }