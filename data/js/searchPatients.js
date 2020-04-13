$(function() {
	
	
	/*$('#sPatient').keyup(function() {
		var name = $(this).val();
		var out = '';
		if(name.length >=3){
			
		
			$.post('/json/patients',
			{
				nPatient : name
			},
			function (data,status) {
				var allPatients = data.data;
				if(data.SUCCESS == true){
					
				for(i=0;i< allPatients.length;i++){
					out +=allPatients[i].nom_user+' '+allPatients[i].prenom_user+' '+allPatients[i].sexe;
				}
			}
			$(this).val(out);
			$('.listPatient').css({'display':'block'});
				
			},'json');
			
		}
	});*/
  var index = 0;
	
});