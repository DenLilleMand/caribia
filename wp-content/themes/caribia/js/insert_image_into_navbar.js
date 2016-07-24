jQuery(document).ready(function($) {
    "use strict";
    var test = $('<li id="navbar-logo"> <div class="col-md-4 header-logo-container"><a class="header-logo" href="#" rel="home">'  +
            '<img id="navigation_menu_logo" class="navbar-brand float-none" src="' + php_vars.image_url + '"></img></a></div></li>');
  $("#menu-main-menu :nth-child(4)").after(test);
});