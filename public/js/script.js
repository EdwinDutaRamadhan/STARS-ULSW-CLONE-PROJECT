$(function(){

    $(".edit").on('click', function(){
        console.log('edit');
    });
    $("#liveToastClose").on('click', function(){
        console.log('test');
        $('#liveToast').hide();
    });
});