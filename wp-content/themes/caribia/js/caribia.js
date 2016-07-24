function getBlogPost(url){
   
  window.open(url,'_self');
}
function setNavbar($){
var test = $('<li id="navbar-logo"> <div class="col-md-4 header-logo-container"><a class="header-logo" href="#" rel="home"><img id="navigation_menu_logo" class="navbar-brand float-none" src="http://localhost/caribia/wp-content/themes/caribia/images/logo.png"></img></a></div></li>');

$("#menu-main-menu :nth-child(4)").after(test);

}
jQuery(document).ready(function($) {
setNavbar($);
});
