let status = false;
let menubutton = document.querySelector('.menu');
let sidebarblock = document.querySelector('.tablet-header-nav');
let menublock = document.querySelector('.tablet-header-nav-block');
let menublocklinks = document.querySelectorAll('.tablet-header-nav-block a');
let mobilesidebarblock = document.querySelector('.mobile-header-nav');
let mobilemenublock = document.querySelector('.mobile-header-nav-block');
let mobilemenublocklinks = document.querySelectorAll('.mobile-header-nav-block a');

let toogle = function () {
	if(status === false){
		menublock.style.visibility = "visible";
		sidebarblock.style.width = "50%";
		menubutton.style.opacity = "0.5";
		let length = menublocklinks.length;
		for (var b = 0; b < length; b++) {
			menublocklinks[b].style.opacity = "1";
		}
		status = true;
	}
	else if(status === true){
		sidebarblock.style.width = "50%";
		menubutton.style.opacity = "0.6";
		let length = menublocklinks.length;
		for (var b = 0; b < length; b++) {
			menublocklinks[b].style.opacity = "0";
		}
		status = false;
		menublock.style.visibility = "hidden";
	}
}
let mobile_toogle = function () {
	if(status === false){
		mobilemenublock.style.visibility = "visible";
		mobilesidebarblock.style.width = "50%";
		menubutton.style.opacity = "0.5";
		let length = mobilemenublocklinks.length;
		for (var b = 0; b < length; b++) {
			mobilemenublocklinks[b].style.opacity = "1";
		}
		status = true;
	}
	else if(status === true){
		mobilesidebarblock.style.width = "50%";
		menubutton.style.opacity = "0.6";
		let length = mobilemenublocklinks.length;
		for (var b = 0; b < length; b++) {
			mobilemenublocklinks[b].style.opacity = "0";
		}
		status = false;
		mobilemenublock.style.visibility = "hidden";
	}
}