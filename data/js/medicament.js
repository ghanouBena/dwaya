$(function () {
        //alert('hello');
        $('#saveNewMed').click(function() {
            // body...
            var dataF = $('#fromNewMed').serialize();
            $.post("/admin/addMedicament",
    		{
    			dataF
    		},
    		function(data, status){
    			//var clients = data.data;
    			if(data.SUCCESS == true){

                document.getElementById("fromNewMed").reset();
                alert("Medicament Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
    			
        
      
    		}, "json");
            console.log(dataF);
        });

        $('#modifyMed').click(function() {
            // body...
            var dataF = $('#fromModMed').serialize();
            $.post("/admin/modifyMedicament",
            {
                dataF
            },
            function(data, status){
                //var clients = data.data;
                if(data.SUCCESS == true){

                document.getElementById("fromModMed").reset();
                alert("Medicament Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
               
        
      
            }, "json");
            console.log(data);
        });
        $('#saveNewType').click(function() {
            // body...
            var dataF = $('#fromNewType').serialize();
            $.post("/admin/addType",
            {
                dataF
            },
            function(data, status){
                //var clients = data.data;
                if(data.SUCCESS == true){

                document.getElementById("fromNewType").reset();
                alert("Type Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
                
        
      
            }, "json");
            console.log(data);
        });

        $('#modifyType').click(function() {
            // body...
            var dataF = $('#fromModifyType').serialize();
            $.post("/admin/modifyType",
            {
                dataF
            },
            function(data, status){
                //var clients = data.data;
                if(data.SUCCESS == true){

                document.getElementById("fromModifyType").reset();
                alert("Type Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
                        
      
            }, "json");
            console.log(data);
        });
        
        $('#tp').change(function() {
            // body...
            var out = '<option>Select Medicament</option>';
            var dataF = $(this).val();
            $.post("/json/type",
            {
                id_type:dataF
            },
            function(data, status){
                if(data.SUCCESS == true){
                var Medicament = data.data;

                for(var i=0;i<Medicament.length;i++){
                    out+='<option value='+Medicament[i].idmedicament+'>'+Medicament[i].nom_medicament+'</option>';
                }
               $('#med').html(out);
            }else{
               out ='<option>No Medicament founded</option>';
               $('#med').html(out);
            }
                         
      
            }, "json");
            console.log(data);
        });
});