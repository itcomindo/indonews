jQuery(function () {
    var toggleSlideMenu = jQuery('.toggle-allcat');
    var slideMenu = jQuery('#mn-sm');
    jQuery(toggleSlideMenu).click(function () {
        jQuery(slideMenu).toggleClass('slide-menu-off slide-menu-on');
    });
});