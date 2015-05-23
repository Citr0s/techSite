var hamburger = document.getElementById('hamburger');
var menu = document.getElementById('menu-small');

if(hamburger.addEventListener){
	hamburger.addEventListener('click', showMenu);
	menu.addEventListener('click', hideMenu);
}else{
	hamburger.attachEvent("onclick", showMenu);
}

function showMenu(){
	menu.style.height = 'auto';
	if(hamburger.addEventListener){
		hamburger.removeEventListener('click', showMenu);
		hamburger.addEventListener('click', hideMenu);
	}else{
		hamburger.attachEvent("onclick", hideMenu);
	}
}

function hideMenu(){
	menu.style.height = '0px';
	if(hamburger.addEventListener){
		hamburger.removeEventListener('click', hideMenu);
		hamburger.addEventListener('click', showMenu);
	}else{
		hamburger.attachEvent("onclick", showMenu);
	}
}