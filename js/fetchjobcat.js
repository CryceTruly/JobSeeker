$(document).ready(function(){
$('#category a').click(function (e){
	e.preventDefault();

	let action=$this.attr('href');
	alert action;

	$.get('catjobs.php',{})


});

	});
	
