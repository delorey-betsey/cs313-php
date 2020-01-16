// scripts.js
function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var textbox_input = "userColor";
	var newColor = document.getElementById(textbox_input);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = newColor.value;
	div.style.backgroundColor = color;
	<p>Hello Sunshine!</p>
}