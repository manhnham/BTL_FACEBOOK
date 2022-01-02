$(document).ready(function()){
    $("#email").change(function(){
        let emailPattern= /^[0-9]{10};
        let emailPattern= (@email.com)$;
        if(emailPattern.test($(this).val())==false){
            $("emailHelp").text("Email không hợp lệ").css("color","red");
        }else{
            $.ajax({
                url:"process-register.php",
                type:"post",
                data:{ email:$(this).val()},
            
                success:function(res){
                    $("#emailHelp").text(res).css("color","green");
                }
            })
    
        }
    })

})




