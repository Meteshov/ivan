/**
 * Created by Артем on 26.04.2015.
 */
$(document).ready(function(){
    var owl = $(".attached-files");
    owl.owlCarousel({
        items : 3, //10 items above 1000px browser width
        itemsDesktop : [1000,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,3], // betweem 900px and 601px
        itemsTablet: false, //2 items between 600 and 0
        itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
    });
    // Custom Navigation Events
    $(".right-arrow").click(function(){
        owl.trigger('owl.next');
    })
    $(".left-arrow").click(function(){
        owl.trigger('owl.prev');
    });
    var drop = new Dropzone("div#drop",{
        url:'/books/attachFile'
    });
    drop.on('complete',function(data){
        console.log(data);
    })
});
$(document).on('click','.new-attach',function(e){
    e.preventDefault();
    $('#drop').trigger('click');
})
$(window).on('resize',function(){
    if($('.attached-file-list').length > 0){
        if($('.attached-file-list li').length > 0){
            $('.attached-file-list').css('max-height',($(window).height() - ($(window).height() / 5)));
        }
    }
});
$(document).on('click','.save-page',function(e){
    e.preventDefault();
    $.ajax({
        url:'/books/savePage',
        type:'POST',
        data:{
            b_id: $('.book_id').val(),
            num: $('.page_num').val(),
            content: tinyMCE.activeEditor.getContent({format : 'raw'})
        },
        success:function(data){
            alert(data);
        }
    });
});