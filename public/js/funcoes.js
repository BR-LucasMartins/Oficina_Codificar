$("#check").click(function(){
	
    if($(this).val()=="false"){
        $(".botao").css("visibility","hidden");
        $(this).val("true");
        }
        else{
                $(".botao").css("visibility","visible");
                $(this).val("false");
            }

    
    });