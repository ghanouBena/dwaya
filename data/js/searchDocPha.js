$(function () {
        //alert('hello');
        
        $('#search').keyup(function() {
            // body...
            var outDoc = '';
            var outPha = '';
            var name = $(this).val();
            if(name.length > 2){
            $.post("/json/searchDP",
    		{
    			name:name
    		},
    		function(data, status){
    			//var clients = data.data;
    			if(data.SUCCESS == true){
                    var users = data.data;
                    outDoc = '';
                    outPha = '';
                    for(var i=0; i<users.length;i++){
                        if(users[i].niveau == 1){
                            outDoc += '<a class="dummy-media-object" href=/patient/profile/'+users[i].idusers+'> <img style="width:40px;height:40px;" class="round" src="'+'/'+users[i].url_pic+'" alt=""/><h3>'+users[i].nom_user+' '+users[i].prenom_user+'</h3></a>';
                        }else{
                            outPha += '<a class="dummy-media-object" href=/patient/profile/'+users[i].idusers+'> <img style="width:40px;height:40px;" class="round" src="'+'/'+users[i].url_pic+'" alt=""/><h3>'+users[i].nom_user+' '+users[i].prenom_user+'</h3></a>';
                        }
                    }
               $('#doc').html(outDoc);
               //alert(outDoc);
               $('#ph').html(outPha);
        
            }else{
                $('#doc').html(outDoc);
               //alert(outDoc);
               $('#ph').html(outPha);
            }
    			
        
      
    		}, "json");}else{
                
            $('#doc').html(outDoc);
               //alert(outDoc);
               $('#ph').html(outPha);
            }
        });

        
});