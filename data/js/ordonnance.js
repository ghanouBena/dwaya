$(function() {
	// body...

	$('.bg-green').click(function () {
		// body...
		var id = $(this).attr('data-id');
		var out = '';
		$.post('/json/ordonnance',
			{
				ordId : id
			},
			function (data,status) {
				var OrdDetails = data.data;
				if(data.SUCCESS == true){
					
				for(i=0;i< OrdDetails.length;i++){
					out +='';
				}
			}
			
				
			},'json');

	});
});