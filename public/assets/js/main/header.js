$(onReadyHeader);;

function onReadyHeader(){
   $('.header-item').on('mouseover',onHeaderLiMouseOver) 
   $('.header-item').on('mouseout',onHeaderLiMouseOut) 
}
function onHeaderLiMouseOver(e){
    var li = e.currentTarget;
    var span = $(li).find('span:last');
    span.css({'display':'block'});
    
}
function onHeaderLiMouseOut(e){
    var li = e.currentTarget;
    var span = $(li).find('span:last');
    span.css({'display':'none'});
}
