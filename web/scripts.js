// scripts.js
function clickMe() {
	alert("Clicked!");
}

function div1chgColor() {
	var textbox_input = "userColor";
	var newColor = document.getElementById(textbox_input);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = newColor.value;
	div.style.backgroundColor = color;
}
function div2chgColor() {
	var textbox_input = "userColor";
	var newColor = document.getElementById(textbox_input);

	var div_id = "div2";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = newColor.value;
	div.style.backgroundColor = color;
}
function div3chgColor() {
	var textbox_input = "userColor";
	var newColor = document.getElementById(textbox_input);

	var div_id = "div3";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = newColor.value;
	div.style.backgroundColor = color;
}
{/* <script>
	$(document).ready(function(){
		$("button").click(function(){
		// jQuery methods go here...
		
		});
</script> */}