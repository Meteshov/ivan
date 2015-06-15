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
    if($('#BookFiles').lenght > 0){
        $('#BookFiles').change(function(){
            var fileCount = this.files.length;
        });
    }
});
$(document).on('click','.new-attach',function(e){
    $('#BookFiles').trigger('click');
    return false;
});
$(document).on('click','.save-page',function(e){
    e.preventDefault();
    /*var form = $('#BookSavePageForm');
    form.find('#BookContent').val(tinyMCE.activeEditor.getContent({format : 'raw'}));
    form.submit();*/
});