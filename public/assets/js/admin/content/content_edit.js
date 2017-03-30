$(onReadyContent);

function onReadyContent(){
    var content = CKEDITOR.replace( 'content',  
                    {  
                        language: 'zh-cn',  
                        height: 450,  
                        filebrowserBrowseUrl : '/assets/libs/ckfinder/ckfinder.html',  
                        filebrowserImageBrowseUrl : '/assets/libs/ckfinder/ckfinder.html?type=Images',  
                        // filebrowserFlashBrowseUrl : '/assets/libs/ckfinder/ckfinder.html?type=Flash',  
                    });  
     CKFinder.setupCKEditor( content,'/assets/libs/ckfinder/');   
}
