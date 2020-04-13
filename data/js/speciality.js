$(function () {
          
        $('#saveNewSpe').click(function() {
            // body...
            var dataF = $('#fromNewSpe').serialize();

            $.post("/admin/addSpeciality",
    		{
    			dataF
    		},
    		function(data, status){
    			var spe = data.data;
    			if(data.SUCCESS == true){
               
                document.getElementById("fromNewSpe").reset();
    			alert("Speciality Saved with Success");
                $('#tb').append('<tr><td>'+spe.id+'</td><td>'+spe.name+'</td></tr>');

    	
    		}else{
    			alert("Something wrong try again");
    		}
    		}, "json");
            console.log(dataF);
        });

        $('#modifySpe').click(function() {
            // body...
            var dataF = $('#fromModSpe').serialize();
             $.post("/admin/modifySpeciality",
            {
                dataF
            },
            function(data, status){
                //var spe = data.data;
                if(data.SUCCESS == true){
               
                document.getElementById("fromModSpe").reset();
                alert("Speciality Saved with Success");
                window.location.href = "/admin/speciality";
                
        
            }else{
                alert("Something wrong try again");
            }
            }, "json");
            
        });

       
});