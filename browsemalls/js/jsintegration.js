function oncityselection(sel){
	$.post("cityreturnmalls.php",{city:sel.value},function(data, status){
        $('.mallselection').html(data);
        $('#cityh2').html(sel.value);
        $('.shopsinthismall').html("Browse products");
    });
}

function onmallselection(sel){
    $('#mallnamediv').html(sel.value);
	$.post("mallreturnshop.php",{mall:sel.value},function(data, status){
        $('#containsshop').html(data);
    });
}

function onshopselection(sel){
    var v = sel;
    $("#"+v).addClass("active");
	$.post("shopreturnproduct.php",{shop:sel},function(data, status){
        $('.features_items').html(data);
    });
    $.post("shopreturnproduct_offers.php",{shop:sel},function(data, status){
        $('.category-tab').html(data);
    });
}
$( document ).ready(function() {
    
    $.post("shopreturnproduct.php",{shop:"LENOVA"},function(data, status){
        $('.features_items').html(data);
    });
    $.post("shopreturnproduct_offers.php",{shop:"LENOVA"},function(data, status){
        $('.category-tab').html(data);
    });

});

