function getSelected(){
    var node = $('#tt').tree('getSelected');
	if (node){
		var id = node.id;
		$.ajax({
			url:'views/data.php?r='+id,
			success:function(data){
				$('#content').html(data);
			}
		});			
	}
	  clearconsole();
}
function clearconsole() {
	console.log(window.console);
	if(window.console || window.console.firebug) {
		console.clear();
	}
} 
function submitForm(){
	$('#ff').form('submit',{
		onSubmit:function(){
			var r =$(this).form('enableValidation').form('validate');
			if(r==true){
				$.ajax(
				{
				   url:'views/data.php?r=99',
					cache: false
				})
				.done(function(result)
				{
					var session_credentials = $.parseJSON(result);
					var con= console.log(session_credentials);
					//alert(con);
				});
			 
				window.location='index.php'
			} 
			//return $(this).form('enableValidation').form('validate');
		}
	});
}
function clearForm(){
	$('#ff').form('clear');
}