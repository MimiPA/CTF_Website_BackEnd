//inport to menu1.html
//function for active class 
function myFunction() {
	var element = document.getElementById("myDIV");
	element.classList.toggle("active");
}
//changed link button "MULAI"
function changedLink(anything) {
	document.getElementById('linka').href = anything;
}
//function  for changed display of menu and background
function changedColor(color) {
	const cirle = document.querySelector('.circle');
	cirle.style.background = color;
}
function changedButton(color) {
	const button = document.querySelector('.button2');
	button.style.background = color;
}
function changedColorText(color) {
	const cirle = document.getElementById('h1ID');
	cirle.style.color = color;
}
//changed Text
function changedH1(anything) {
	document.getElementById('h1ID').innerHTML = anything;
}
function changedP(anything) {
	document.getElementById('pID').innerHTML = anything;
}
function changedIcon(anything) {
	var x = document.getElementById("ICmi");
	if (x.innerHTML === "pause_circle_filled") {
		x.innerHTML = "play_circle";
	} else {
		x.innerHTML = "pause_circle_filled";
	}
}