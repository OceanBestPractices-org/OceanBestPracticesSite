jQuery( document ).ready(function() {
    jQuery(".fittext").fitText(1.2);
    jQuery(".fittext-obps").fitText(1.5);

    jQuery("#parallax").height(jQuery("#feature-1").height());

    jQuery(".caret").click(function(){
        var li = jQuery(this).parent().parent();
        var dropdown = li.find(" > .dropdown-menu");
        if(dropdown.hasClass("show")){
            dropdown.removeClass("show");
        }else{
            dropdown.addClass("show");
        }
    });
});