/**
 * Created by Артем on 26.04.2015.
 */
$(document).on('click','.add-more-author',function(e){
    var html = $(this).parents('div.authors-block').find('div.author-template').html();
    $(this).parent().after(html);
});
$(document).ready(function(){
    if($('.attached-file-list').length > 0){
        if($('.attached-file-list li').length > 0){
            $('.attached-file-list').css('max-height',($(window).height() - ($(window).height() / 5)));
        }

    }
});
$(window).on('resize',function(){
    if($('.attached-file-list').length > 0){
        if($('.attached-file-list li').length > 0){
            $('.attached-file-list').css('max-height',($(window).height() - ($(window).height() / 5)));
        }
    }
});