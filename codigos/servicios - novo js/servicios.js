$(function(){
    $(".btn-toggle").click(function(e){
        e.preventDefault();
        el = $(this).data('element');
		var toggle_switch = $(this);
        $(el).toggle(function(){
						if($(this).css('display')=='none'){
							toggle_switch.html('<a class="fa fa-plus-circle"></a>');
						}else{
							toggle_switch.html('<a class="fa fa-minus-circle"></a>');
						}
					});

    });
});