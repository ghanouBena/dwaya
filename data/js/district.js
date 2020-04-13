$(function () {
        //alert('hello');
        $('#saveNewSpe').click(function() {
            // body...
            var dataF = $('#fromNewSpe').serialize();
            $.post("/admin/addDistrict",
            {
                dataF
            },
            function(data, status){
                if(data.SUCCESS){

                document.getElementById("fromNewSpe").reset();
                alert("District Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
      
            }, "json");
            console.log(dataF);
        });

        $('#modifySpe').click(function() {
            // body...
            var dataF = $('#fromModSpe').serialize();
            $.post("/admin/modifyDistrict",
            {
                dataF
            },
            function(data, status){
                if(data.SUCCESS){

                document.getElementById("fromModSpe").reset();
                alert("District Saved with Success");
        
            }else{
                alert("Something wrong try again");
            }
      
            }, "json");
            console.log(data);
        });

        

       
});