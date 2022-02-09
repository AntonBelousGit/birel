import { bindTabs} from "../default/script.js";

bindTabs('#tabs1');

const activeBtnPassword = document.querySelectorAll('.box-input button');
activeBtnPassword.forEach(item=> {
	item.addEventListener('click', () => {
		item.classList.toggle('active');
		if(item.parentElement.firstElementChild.type === "password") {
			item.parentElement.firstElementChild.type = "text";
		} else {
			item.parentElement.firstElementChild.type = "password";
		}
	});
});
const privacyPolicy = document.querySelectorAll('.privacy-policy');
privacyPolicy.forEach(item => {
	item.onchange = () => {
	let btn = item.parentElement
			.parentElement
			.parentElement
			.parentElement
			.lastElementChild
			.firstElementChild;
		btn.disabled = !btn.disabled;
	}
});

