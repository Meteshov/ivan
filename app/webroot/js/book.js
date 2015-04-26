/**
 * Created by Артем on 26.04.2015.
 */
$(document).on('click','.add-more-author',function(e){
    var html = $(this).parents('div.authors-block').find('div.author-template').html();
    $(this).parent().after(html);
})