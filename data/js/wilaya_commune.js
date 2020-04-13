$(function() {
	var code = function () {
           //var v = $(this).val();
           //$('#ca').val(v);
           alert('hello');
          };
	//for get all client with id type
	$('#wilaya').change(function() {
		var out='<option>Select City</option>';
		var id_w = $(this).val();
		 $.post("/json/commune",
    {
    	id_wilaya: id_w
    },
    function(data, status){
    	var commune = data.data;
    	if(data.SUCCESS == true){

    	for (var i = 0; i <commune.length ; i++) {
    		out+='<option value="'+commune[i].idcommune+'">'+commune[i].nom_commune+'</option>';
    	}
    	
    }else{
    	out ='<option>accune commune</option>';
    }
    	$('#commune').html(out);
        
      
    }, "json");
	});

	//get all camion with matricul
	$('#commune').change(function() {
		var out='<option>Select district</option>';
		var id_c = $(this).val();
		 $.post("/json/quartie",
    {
    	id_commune: id_c
    },
    function(data, status){
    	var quartie = data.data;
    	if(data.SUCCESS == true){

    	for (var i = 0; i <quartie.length ; i++) {
    		out+='<option value="'+quartie[i].idquartie+'">'+quartie[i].nom_quartie+'</option>';
    	}
    	
    }else{
    	out ='<option>accune quartie</option>';
    }
    	$('#quartie').html(out);
        
      
    }, "json");
	});

    $('#wilaya1').change(function() {
        var out='';
        var id_w = $(this).val();
         $.post("/json/commune",
    {
        id_wilaya: id_w
    },
    function(data, status){
        var commune = data.data;
        if(data.SUCCESS == true){

        for (var i = 0; i <commune.length ; i++) {
            out+='<option value="'+commune[i].idcommune+'">'+commune[i].nom_commune+'</option>';
        }
        
    }else{
        out ='<option>accune commune</option>';
    }
        $('#commune1').html(out);
        
      
    }, "json");
    });

    
});