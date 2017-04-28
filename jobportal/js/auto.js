
	let x='';
$('input').keydown(function(){
	
	x=$(this).val();
	$.ajax({
url:'auto.php',
type:'post',
data:x,
success:function(response){
console.log(response);

}

});
});