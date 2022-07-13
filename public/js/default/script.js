"use strict";
const FUNCTIONS = {
	// no easing, no acceleration
	linear: t => t,
	// accelerating from zero velocity
	easeInQuad: t => t * t,
	// decelerating to zero velocity
	easeOutQuad: t => t * (2 - t),
	// acceleration until halfway, then deceleration
	easeInOutQuad: t => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t,
	// accelerating from zero velocity
	easeInCubic: t => t * t * t,
	// decelerating to zero velocity
	easeOutCubic: t => (--t) * t * t + 1,
	// acceleration until halfway, then deceleration
	easeInOutCubic: t => t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1,
	// accelerating from zero velocity
	easeInQuart: t => t * t * t * t,
	// decelerating to zero velocity
	easeOutQuart: t => 1 - (--t) * t * t * t,
	// acceleration until halfway, then deceleration
	easeInOutQuart: t => t < 0.5 ? 8 * t * t * t * t : 1 - 8 * (--t) * t * t * t,
	// accelerating from zero velocity
	easeInQuint: t => t * t * t * t * t,
	// decelerating to zero velocity
	easeOutQuint: t => 1 + (--t) * t * t * t * t,
	// acceleration until halfway, then deceleration
	easeInOutQuint: t => t < 0.5 ? 16 * t * t * t * t * t : 1 + 16 * (--t) * t * t * t * t,
	easeOutBounce: t => {
		const n1 = 7.5625;
		const d1 = 2.75;

		if (t < 1 / d1) {
			return n1 * t * t;
		} else if (t < 2 / d1) {
			return n1 * (t -= 1.5 / d1) * t + 0.75;
		} else if (t < 2.5 / d1) {
			return n1 * (t -= 2.25 / d1) * t + 0.9375;
		} else {
			return n1 * (t -= 2.625 / d1) * t + 0.984375;
		}
	},
};

function animateText(element, text, duration) {
	animateCore(p => {
		const length = Math.ceil(text.length * p);
		element.innerHTML = text.slice(0, length);

	}, duration, FUNCTIONS.linear, element);
}

function animateCore(render, duration, timingFn, element) {
	const timePerFrame = 1000 / 60;
	const startTime = Date.now();
	const timerId = setInterval(() => {
		const currentTime = Date.now();
		let fraction = (currentTime - startTime) / duration;

		if (fraction < 0) {
			fraction = 0;
		} else if (fraction > 1) {
			fraction = 1;
		}
		const percents = timingFn(fraction);
		render(percents);

		if (fraction === 1) {
			clearInterval(timerId);
			addGreenLine(element);
		}

	}, timePerFrame);

}

function addGreenLine(elem) {
	const text = elem.textContent;
	const textArr = text.split(' ');
	for (let i = 0; i < textArr.length; i++) {
		if (textArr[i] === 'secondary') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'market') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'without') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'brokers') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'and') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'intermediaries.') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'flexible') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'how') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'birel') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'is') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'free,') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'helps') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
		if (textArr[i] === 'mission') {
			textArr[i] = `<span>${textArr[i]}</span>`;
		}
	}

	elem.innerHTML = textArr.join(' ');
}

function animate(element, styleName, endValue, time) {
	const timePerFrame = 1000 / 60;

	const styles = getComputedStyle(element);
	const startValue = styles[styleName];
	let start = parseInt(startValue);
	const end = parseInt(endValue);

	const diff = end - start;
	let stepsLeft = Math.round(time / timePerFrame);
	const stepSize = diff / stepsLeft;

	const timerId = setInterval(() => {
		start += stepSize;
		stepsLeft--;

		element.style[styleName] = start + 'px';

		if (!stepsLeft) {
			clearInterval(timerId);
		}
	}, timePerFrame);
}

function createBg(column, count) {
	for (let i = 0; i < count; i++) {
		let divElement = document.createElement('div');
		divElement.classList.add('g-p');
		column.appendChild(divElement);
	}
	setTimeout(() => {
		elems(column);
	}, 1000);
}

function elems(column) {
	const box2 = column.querySelectorAll('.g-p');
	for (let i = 0; i < box2.length; i++) {
		let string = `g-p-${i}`;
		box2[i].classList.add(string);
	}
}

function isVisible(elem) {

	let coords = elem.getBoundingClientRect();

	let windowHeight = document.documentElement.clientHeight;

	let topVisible = coords.top > 0 && coords.top < windowHeight;
	let bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;

	return topVisible || bottomVisible;
}

function bindTabs(container) {
	if (typeof container === 'string') {
		container = document.querySelector(container);
	}

	const titles = container.querySelectorAll('.tab-btn');
	const contents = container.querySelectorAll('.tab-content');

	for (let i = 0; i < titles.length; i++) {
		const titleEl = titles[i];

		titleEl.addEventListener('click', () => {
			deactivate(titles);
			deactivate(contents);

			titles[i].classList.add('active');
			contents[i].classList.add('active');
		});
	}

	function deactivate(elements) {
		for (let i = 0; i < elements.length; i++) {
			const element = elements[i];
			element.classList.remove('active');
		}
	}
}

export {animateText, animate, createBg, isVisible, bindTabs};