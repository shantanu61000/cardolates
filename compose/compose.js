let recID;
let recEmail;
$(document).ready(() => {
    $("#message").on("keyup", () => {
        $("#previewMessage").text($("#message").val());
        console.log("keyup");
    });
    $("#song").on("keyup", () => {
        $("#previewSong").text($("#song").val());
        console.log("keyup");
    })

    $("#searchRec").keyup(() => {
        if ($("#searchRec").val().length != 0) {
            $.ajax({
                url: "searchRecepient.php",
                type: "POST",
                data: {
                    text: $("#searchRec").val(),
                    searchBtn: true
                },
                success: (res) => {
                    var recepients = JSON.parse(res);
                    var size = Object.keys(recepients)
                    var temp = "";
                    size.forEach(e => {
                        temp += `<p class='rec_row' data-recepient-email="${recepients[e].email}" data-recepient-id="${recepients[e].user_id}">${recepients[e].name} &nbsp; (${recepients[e].year} ${recepients[e].dept_name})</p>`;
                    });
                    $(".search-rec-wrapper").html(temp);
                    $(".rec_row").click(function () {
                        $("#searchRec").val($(this).text());
                        recID = $(this).attr("data-recepient-id");
                        recEmail = $(this).attr("data-recepient-email");
                        $(".search-rec-wrapper").html("");
                    });
                }
            });
        }
        else {
            $(".search-rec-wrapper").html("");
        }
    });

    $(".template").on("click", () => {
        var x = $(".template:checked").val();
        var imgLink = "img/templates/" + x + ".jpg";
        $(".letter").css("background-image", "url('" + imgLink + "')");
    });

    function sendCard() {
        var spinner = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div> Sending ..';
        $(".send-btn").html(spinner);
        var formData = new FormData(document.getElementById("composeForm"));
        formData.append("sendBtn", true);
        formData.append("recID", recID);
        formData.append("recEmail", recEmail);
        $.ajax({
            url: "email.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false
        }).done((response) => {
            if (response == 1) {
                $(".send-btn").text("Send");
                $("#searchRec").val("");
                $("#composeForm").trigger("reset");
            }
            else {
                console.log(response);
            }

        });
    }

    $("#composeForm").on("submit", (e) => {
        e.preventDefault();
        console.log("form submitted");
        if ($("#searchRec").val() != "") {
            if ($("#song").val() == "") {
                if (!confirm("Dedicate a song field is empty. Do you still want to proceed ?")) {
                    $("#song").focus();
                }
                else {
                    sendCard();
                }
            }
            else {
                sendCard();
            }
        }
        else {
            alert("No recepient found. The field cannot be empty");
        }
    });
});
