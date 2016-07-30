jQuery(document).ready(function($) {
    "use strict";
    var test = $('<li id="navbar-logo"><a class="header-logo" href="#" rel="home">'  +
            '<img id="navigation_menu_logo" class="navbar-brand float-none" src="' + php_vars.image_url + '"/></a></li>');
  $("#menu-main-menu :nth-child(4)").after(test);
});