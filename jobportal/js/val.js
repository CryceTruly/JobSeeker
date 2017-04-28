$(document).ready(function(){
	var data="";
	console.log(data);

$('#username').keyup(function(){
var name=$(this).val();
$.post('auth/validate.php',{name:name},function(data){
	
	$('#tips').html(data);
});

}).blur(function(){
	$('#tips').html(data);
});

//mail

$('#email').keyup(function(){
var email=$(this).val();

$.post('auth/validatemail.php',{email:email},function(data){
	$('#emailcheck').html(data);

});

}).blur(function(){
$('#emailcheck').html(data);
});



//fname

$('#firstname').keyup(function(){
	let fname=$(this).val();
	
	$.post('auth/fname.php',{firstname:fname},function(data){
		$('#tipsone').html(data);
	});
}).blur(function(){
	$('#tipsone').html(data);
});

//sname


$('#lastname').keyup(function(){
	let last=$(this).val();
	$.post('auth/sname.php',{lastname:last},function(data){
			$('#tiptwoo').html(data);
			
	});
}).blur(function(){
	$('#tiptwoo').html(data);
});
//paasss

$('#password').keyup(function(){
var password=$(this).val();
$.post('auth/checkpass.php',{password:password},function(data){
	$('#passs').html(data);
	mydata+=data;

});

}).blur(function(){
$('#passs').html(data);
});


//passcomfirm

$('#passwordagain').keyup(function(){
	var again=$(this).val();
var password=$('#password').val();
$.post('auth/comfirm.php',{password:password,again:again},function(data){
$('#return').html(data);
// To Disable Submit Button By Default
if(data==null){
	$("input[type=submit]").attr('disabled','disabled');
}else{
	// When User Fills Out Form Completely
$("form").keyup(function(){
$("input[type=submit]").removeAttr('disabled');
});
}


});

}).blur(function(){
$('#return').html(data);

});





});