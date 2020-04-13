$(function () {
        //alert('hello');
        $('#saveNewSpe').click(function() {
            // body...
            var dataF = $('#fromNewSpe').serialize();
            $.post("/admin/addWilaya",
    		{
    			dataF
    		},
    		function(data, status){
    			
                if(data.SUCCESS){

                document.getElementById("fromNewSpe").reset();
                alert("Wilaya Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
      
    		}, "json");
            console.log(dataF);
        });

        $('#modifySpe').click(function() {
            // body...
            var dataF = $('#fromModSpe').serialize();
             $.post("/admin/modifyWilaya",
            {
                dataF
            },
            function(data, status){
                
                if(data.SUCCESS == true){

                document.getElementById("fromModSpe").reset();
                alert("Wilaya Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
      
            }, "json");

            console.log(data);
        });

       
});