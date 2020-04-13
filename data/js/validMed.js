$(function () {
	
	$('.bg-green').click(function () {
		var id_ord = $(this).attr('data-id');
        var btn = $(this);
		var id_med = $(this).attr('data-set');
        var qt = $(this).attr('data-qnt');
		$.post("/json/validation",
            {
                idOrd:id_ord,
                idMed:id_med,
                qnt:qt
            },
            function(data, status){
                if(data.SUCCESS){

                
                btn.css({'display':'none'});
                alert(data.msg);
            }else{
                alert("Something wrong try again");
            }
      
            }, "json");

	});

    $('.btn-success').click(function () {
        var id_ord = $(this).attr('data-id');
        var btn = $(this);
        $.post("/json/validOrd",
            {
                idOrd:id_ord
            },
            function(data, status){
                if(data.SUCCESS){

                
                btn.css({'display':'none'});
                alert(data.msg);
            }else{
                alert("Something wrong try again");
            }
      
            }, "json");

    });
});