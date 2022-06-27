

$(".hello-world").on('click', function(event){
    
    $.ajax({
        url : "hello",
        success : function(result){
            alert(result);
        }
    })

});
