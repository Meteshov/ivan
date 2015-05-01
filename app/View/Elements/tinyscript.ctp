<script type="text/javascript">
    var inst = tinymce.init({
        selector: "textarea",
        theme_url:'/js/theme.min.js',
        skin_url:'/css/',
        'height':'550px',
        'width':'700px'
    });
    $(document).on('click','.save-page',function(e){
        e.preventDefault();
        console.log(tinyMCE.activeEditor.getContent());
    });
</script>