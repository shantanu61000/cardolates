$(document).ready(()=>{
    $(".letter").click(function(){
        var cardID = $(this).attr("data-card-id");
        $.ajax({
            url:"getCardDetails.php",
            type:"GET",
            data:{
                cardID:cardID
            }
        }).done((response)=>{
            console.log(response);
            card = JSON.parse(response);
            $(".modal-song").text(card.song);
            $(".modal-message").text(card.message);
            $(".modal-body").css(`background-image`,`url('../compose/img/templates/${card.template}.jpg')`);
            $("#cardFullscreen").modal("show");
            $.ajax({
                url:"getCardDetails.php",
                type:"POST",
                data:{
                    cardID:cardID,
                    updateCardStatus:true
                }
            }).done((res)=>{
                if(res >= 0){
                    $(".card-noti").text(res);
                }
            })
        }); 
    });
});