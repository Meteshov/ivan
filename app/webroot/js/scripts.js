/**
 * Created by Артем on 26.04.2015.
 */
/**Login/Register Form switch **/
$(document).on('click','.register-open',function(e){
    $('.register').show();
    $('.login').hide();
    return false;
});
$(document).on('click','.login-open',function(e){
    $('.register').hide();
    $('.login').show();
    return false;
});
$(document).on('mouseover','.avatar-container',function(){
    $('.shadow-text').css('display','block');
});
$(document).on('mouseleave','.avatar-container',function(){
    $('.shadow-text').css('display','none');
});
$(document).ready(function(){
    $('.nav-list-item').click(function(){
        window.location = $(this).find('a').attr('href');
    });
    if($('#main-page-slider').length > 0){
        $('#main-page-slider').owlCarousel({
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true
        });
    }
});

