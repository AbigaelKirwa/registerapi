$('form').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'post',
        url:'/api/newBook',
        data: $('form').serialize(),
        success: function(data){
            var json = JSON.parse(data);
            if(json.result === 'success'){
                alert('book added successfully');
                $('form')[0].reset();
            }else{
                alert('book failed');

            }
        }
    });
});
