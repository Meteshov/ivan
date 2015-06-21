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
    if($('a.login-btn').length > 0) {
        $('a.login-btn').colorbox({
            href: '#login-form',
            inline: 'true',/*
            minWidth : '80%',*/
            width: '30%'/*,
            height:'50%'*/
        });
    }
    /*console.log('bef');
    console.log($('div#login-error-msg').text());
    console.log('aft');*/
    if($('div#login-error-msg').text()!= '') {
        $.colorbox({
            href: '#login-error-msg',
            inline: 'true'
             /*minWidth : '80%',
            width: '30%',
             height:'50%'*/
        }).show();
    }
});

