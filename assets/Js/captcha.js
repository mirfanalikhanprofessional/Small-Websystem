const changeTextButton = document.querySelector('.captcha-button');
const code = document.querySelector('#code');

function createCaptcha(){
	let letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9'];
	let a1 = letters[Math.floor(Math.random() * letters.length)];
	let a2 = letters[Math.floor(Math.random() * letters.length)];
	let a3 = letters[Math.floor(Math.random() * letters.length)];
	let a4 = letters[Math.floor(Math.random() * letters.length)];
	let a5 = letters[Math.floor(Math.random() * letters.length)];
	let a6 = letters[Math.floor(Math.random() * letters.length)];
	let a7 = letters[Math.floor(Math.random() * letters.length)];
	let a8 = letters[Math.floor(Math.random() * letters.length)];
	let code = a1 + a2 + a3 + a4 + a5 + a6 + a7 + a8;
	return code; 
}

changeTextButton.addEventListener('click', () => {
	code.textContent = createCaptcha();
});
window.addEventListener('load', () => {
	code.textContent = createCaptcha();
});
