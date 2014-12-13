/**
 * Created by Nick on 12/13/2014.
 */


if (!document.cookie) {
    $(".hide").slideDown('2800');
    document.cookie = "SlideCookie=YES; expires=60; path=/";
} else  {
    $(".hide").show();
}

$(document).ready(function(){
    $(".hide").slideDown('2800');
});
