require('./bootstrap');

var slider = document.querySelector(".slider");
var thumbnailObj = document.getElementsByClassName('thumbnails')[0];
var sliderView = Number(window.getComputedStyle(thumbnailObj).width.slice(0, -2));
var projectItem = document.querySelectorAll('.slider li');
var pos = 0;
var sliderWidth = (Number(window.getComputedStyle(projectItem[0]).width.slice(0, -2)) + 20) * projectItem.length;
var maxRight = (-1 * sliderWidth) + sliderView;
slider.style.left = pos;

document.querySelector('body').onresize = function () {
    pos = 0;
    slider.style.left = pos;
    sliderView = Number(window.getComputedStyle(thumbnailObj).width.slice(0, -2));
    sliderWidth = (Number(window.getComputedStyle(projectItem[0]).width.slice(0, -2)) + 20) * projectItem.length;
    
    maxRight = (-1 * sliderWidth) + sliderView;
}

document.querySelector('.right').addEventListener('click', function () {
    sliderView = Number(window.getComputedStyle(thumbnailObj).width.slice(0, -2));
    sliderWidth = (Number(window.getComputedStyle(projectItem[0]).width.slice(0, -2)) + 20) * projectItem.length;
    elementWidth = Number(window.getComputedStyle(projectItem[0]).width.slice(0, -2)) + 20;

    maxRight = (-1 * sliderWidth) + sliderView;
    pos -= sliderView - sliderView % elementWidth;
    if (pos <= maxRight) pos = maxRight;
    slider.style.left = pos + 'px';
});

document.querySelector('.left').addEventListener('click', function () {
    sliderView = Number(window.getComputedStyle(thumbnailObj).width.slice(0, -2));
    sliderWidth = (Number(window.getComputedStyle(projectItem[0]).width.slice(0, -2)) + 20) * projectItem.length;
    elementWidth = Number(window.getComputedStyle(projectItem[0]).width.slice(0, -2)) + 20;

    pos += sliderView - sliderView % elementWidth;
    if (pos >= 0) pos = 0;
    slider.style.left = pos + 'px';
});
