$(document).ready(function() {
    $('form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url:'/ajax_example_with_jquery-main/api/signup.php',
            data: $('form').serialize(),
            success: function(data){
                console.log(data);
                var json = JSON.parse(data);
                if(json.result === 'success'){
                    alert('Signup Succesfull \n Please Login');
                }else{
                    alert('Signup Failed \n'+ json.msg);
                    console.log(json);

                }
            }
        });
    });
	
});