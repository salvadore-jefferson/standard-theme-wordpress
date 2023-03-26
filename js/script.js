let toggler;
let menu;
let span_1;
let span_2;
let span_3;
document.addEventListener("DOMContentLoaded", () => {
	toggler = document.querySelector('.toggler-btn');
    menu = document.querySelector('.main-menu');
    span_1 = document.querySelector('#span-1');
    span_2 = document.querySelector('#span-2');
    span_3 = document.querySelector('#span-3');
});

function toggle() {
    if(toggler.classList.contains('expanded')) {
        menu.style.opacity = '0';
        toggler.classList.remove('expanded');
        span_1.style.transform = 'scaleX(80%)';
        span_2.style.transform = 'scaleX(80%)';
        span_3.style.transform = 'scaleX(80%)';
        menu.style.transform = "translateY(-10px)";

    } else {
        span_1.style.transform = 'scaleX(100%)';
        span_2.style.transform = 'scaleX(100%)';
        span_3.style.transform = 'scaleX(100%)';
        menu.style.opacity = '100%';
        menu.style.transform = 'translateY(20px)';
        toggler.classList.add('expanded');
    }
}
