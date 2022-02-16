document.addEventListener('DOMContentLoaded', function(){

    // Elements
    var nav = document.getElementById('navigation');
    var hamburger = document.getElementById('hamburger');

    // Nav open
    nav.addEventListener('show.bs.collapse', function (event) {
        hamburger.classList.add('open');
        console.log('nav show');
    });

    // Nav close
    nav.addEventListener('hide.bs.collapse', function (event) {
        hamburger.classList.remove('open');
        console.log('nav hide');
    });

}, false);
