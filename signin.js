$(document).ready(function() {
    $('form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url:'/api/signin',
            data: $('form').serialize(),
            success: function(data){
                console.log(data);
                var json = JSON.parse(data);
                if(json.result === 'success'){
                    
                    window.location.href = json.role
                }else{
                    alert('login Failed \n Invalid Pasword or Email');
                }
            }
        });
    });
	
});