$(document).ready(function(){
        //floating labels
        $("label.down").click(function(){
            $(this).next().focus();
        });
    
        $(".form-control").focus(function(){
            $(this).prev().removeClass("down");
                $(this).prev().addClass("up");
            
        });
    
        $(".form-control").blur(function(){                 
            if($(this).val() == ""){
                $(this).prev().removeClass("up");
                $(this).prev().addClass("down");
            }
            else{
                $(this).prev().addClass("up");
                $(this).prev().removeClass("down");
            }
    
        });
    
        //floating label end
    
});