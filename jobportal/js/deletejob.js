$(document).ready(function(){
	$('ul li #delbtn').each(function(){
		$(this).click(function(e){
			


			e.preventDefault();

$.ajax({
	url:'includes/deletefeed.html',
	success:function(data){
		$('#sect #feed').html(data);
	}
}).error(function(){

})


		});
	});
});