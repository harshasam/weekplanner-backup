<?php 
include "header.php"; 
if ( !$sess->isLoggedIn() ) {
      header ("Location: login.php");
}
?>

<body>

<script>
$(".shopping-list").focus(function() {
    if(document.getElementById('shopping-list').value === ''){
        document.getElementById('shopping-list').value +='• ';
	}
});
$(".shopping-list").keyup(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        document.getElementById('shopping-list').value +='• ';
	}
	var txtval = document.getElementById('shopping-list').value;
	if(txtval.substr(txtval.length - 1) == '\n'){
		document.getElementById('shopping-list').value = txtval.substring(0,txtval.length - 1);
	}
});

function textAreaAdjust(o) {
    o.style.height = "100px";
    o.style.height = (25+o.scrollHeight)+"px";
}
</script>

<div id="shopping-lists">
<form>
        <textarea name="shopping-list" id="shopping-list" class="shopping-list"></textarea>
</form>
</div>
</br>

<button>Save</button>


</body>
