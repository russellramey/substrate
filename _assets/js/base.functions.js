// BASE JS FUNCTIONS
jQuery( document ).ready(function($) {
// Hide Header on on scroll down
$.fn.bt_headerScroll = function(){
    // Variables
    var $this = $(this);
    var didScroll;
    var lastScrollTop = 0;
    var delta = 50;
    var navbarHeight = $this.outerHeight();
    $(window).scroll(function(event){
        didScroll = true;
    });
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $this.removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $this.removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
    }
};
// Accordion
$.fn.bt_accordion = function(){
    // Set your action element
    var action = $('.bt-accordion--action');
    // Set you hidden content element
    var moredetails = $('.bt-accordion--content');
    $(action).click(function(){
        if (!$(this).hasClass('active')){
            $(action).removeClass('active');
            $(this).parent().parent().find(moredetails).slideUp(150).removeClass('active');
            $(this).parent().find(moredetails).slideDown(150).addClass('active');
            $(this).addClass('active');
        } else {
            $(action).removeClass('active');
            $(this).parent().parent().find(moredetails).slideUp(150).removeClass('active');
        }
        return false;
    });
};
// Expand & Collapes
$.fn.bt_expand = function(){
    // Set your action element
    var action = $('.bt-expand--action');
    $(action).click(function(){
        var moredetails = $(this).parent().parent().children('.bt-expand--content');
        var viewmore = $(this);
        var txt = moredetails.is(':visible') ? 'View more +' : 'View less -';
        $(this).parent().find(viewmore).text(txt);
        $(this).parent().parent().find(moredetails).slideToggle(150);
        return false;
    });
};
// Expand & Collapes list
$.fn.bt_expand_list = function(){
    // Set your action element
    var action = $('.bt-expand--list-action');
    $(action).click(function(){
        var moredetails = $(this).parent().children('.bt-expand--list-content');
        var viewmore = $(this);
        $(this).parent().find(moredetails).slideToggle(150);
        $(this).toggleClass('active');
        return false;
    });
};
// Tabs
$.fn.bt_tabs = function (){
    var $this = $(this);
    $(".bt-tab--nav li").click(function(e){
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum+1;
            $(".bt-tab--nav li.active").removeClass("active");
            $(this).addClass("active");
            $(".bt-tab--panels li.active").removeClass("active");
            $(".bt-tab--panels li:nth-child("+nthChild+")").addClass("active");
        }
    return false;
    });
};
// Form Infield Labels
$.fn.bt_form_labels = function (){

    // Find inputs
    var inputs = $(this).find('input, textarea, select');

    // Find labels
    var labels = $(this).find('label.bt-label');
        $(labels).parent().css('position', 'relative');

    // Set active class
    var active = "has-value";

    // For each input
    $(inputs).each(function(){
        // On focus
        $(this).focus(function() {
            if(!$(this).val()) {
                $(this).parent().find(labels).addClass(active);
            }
        });

        // On blur
        $(this).blur(function() {
            if($(this).val()) {
                $(this).parent().find(labels).addClass(active);
            } else {
                $(this).parent().find(labels).removeClass(active);
            }
        });
    });
};
});
