<script type="text/javascript">
    var content = '<?php echo $page['content']?>';
    function test(editor){
        console.log(editor);
        editor.setContent(content);
    }
    tinymce.init({
        selector: "#tinyContainer",
        theme_url:'/js/theme.min.js',
        skin_url:'/css/',
        'height':'550px',
        'width':'700px',
        init_instance_callback: "test"
    });
    console.log(tinyMCE.editors);
</script>