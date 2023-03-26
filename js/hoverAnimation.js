/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

if (window.innerWidth < 768) {
    [].slice.call(document.querySelectorAll('[data-bss-disabled-mobile]')).forEach(function (elem) {
        elem.classList.remove('animated');
        elem.removeAttribute('data-bss-hover-animate');
        elem.removeAttribute('data-aos');
        elem.removeAttribute('data-bss-parallax-bg');
        elem.removeAttribute('data-bss-scroll-zoom');
    });
}

document.addEventListener('DOMContentLoaded', function () {

    var hoverAnimationTriggerList = [].slice.call(document.querySelectorAll('[data-bss-hover-animate]'));
    var hoverAnimationList = hoverAnimationTriggerList.forEach(function (hoverAnimationEl) {
        hoverAnimationEl.addEventListener('mouseenter', function (e) {
            e.target.classList.add('animated', e.target.dataset.bssHoverAnimate)
        });
        hoverAnimationEl.addEventListener('mouseleave', function (e) {
            e.target.classList.remove('animated', e.target.dataset.bssHoverAnimate)
        });
    });
}, false);

