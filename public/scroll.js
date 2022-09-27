function smoothScroll(target, duration) {
    var target = document.querySelector(target);
    var scrollPad = window.innerWidth < 1000 ? 145 : 10;
    var targetPosition = target.offsetTop - scrollPad;
    var startPosition = window.scrollY;
    var distance = targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        var timeElapsed = currentTime - startTime;
        var run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) requestAnimationFrame(animation)
    }

    function ease (t, b, c, d) {
        return c * Math.sin(t / d * (Math.PI / 2)) + b;
    }

    requestAnimationFrame(animation)
}

document
    .querySelector('#nav-download-brochures')
    .addEventListener('click', function() {
        smoothScroll('#download-brochures', 500)
    })

document
    .querySelector('#nav-people-to-meet')
    .addEventListener('click', function() {
        smoothScroll('#people-to-meet', 500)
    })

document
    .querySelector('#nav-contact-us')
    .addEventListener('click', function() {
        smoothScroll('#contact-us', 500)
    })