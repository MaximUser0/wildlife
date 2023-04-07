let state = false;
function showBlock(){
    if(state){
        state = false;
        $('.hidden').fadeOut(1000);
    } else {
        state = true;
        $('.hidden').fadeIn(1000);
    }
}