document.addEventListener('DOMContentLoaded', function(){

    // Elements
    var nav = document.getElementById('navigation');
    var hamburger = document.getElementById('hamburger');

    // Nav open
    nav.addEventListener('show.bs.collapse', function (event) {
        hamburger.classList.add('open');
        header.classList.add('nav-open');
        console.log('nav show');
    });
    // Nav close
    nav.addEventListener('hide.bs.collapse', function (event) {
        hamburger.classList.remove('open');
    });
    nav.addEventListener('hidden.bs.collapse', function (event) {
        header.classList.remove('nav-open');
    });

}, false);
