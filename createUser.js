$('form').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'post',
        url:'/api/newUser',
        data: $('form').serialize(),
        success: function(data){
            var json = JSON.parse(data);
            if(json.result === 'success'){
                alert('User Added successfully');
                $('form')[0].reset();
            }else{
                alert('Fail');
                console.log(json);

            }
        }
    });
});
