
$("#loginForm").on("submit", (e) => {
    e.preventDefault();
    console.log("login")
    $("#loginError").addClass("d-none");
    $("#loginError").text("");
    $("#loginBtn").prop("disabled",true);
    var spinner = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>';
    $("#loginBtn").html(spinner)
    var formData = new FormData(document.getElementById("loginForm"));
    formData.append("loginBtn", true);
    $.ajax({
        url: "auth.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: (response) => {
            console.log(response);
            $("#loginBtn").prop("disabled",false);
            $("#loginBtn").html("");
            $("#loginBtn").text("Login");
            if(response == 1){
                location.href = "../compose";
            }
            else{
                $("#loginError").removeClass("d-none");
                $("#loginError").text("Invalid email or password");
            }
        }
    })
})

$("#signUpForm").on("submit", (e) => {
    e.preventDefault();
    $("#signUpError").addClass("d-none");
    $("#signUpError").text("");
    $("#signUpError").prop("disabled",true);
    var spinner = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>';
    $("#signUpError").html(spinner)
    if ($("#signUpPass").val() === $("#signUpCnfPass").val()) {
        e.preventDefault();
        var formData = new FormData(document.getElementById("signUpForm"));
        formData.append("signUpBtn", true);
        $.ajax({
            url: "signup.php",
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success: (response) => {
                console.log(response);
                $("#signUpError").prop("disabled",false);
                $("#signUpError").html("");
                $("#signUpError").text("Sign Up");
                if(response == 1){
                    console.log("Signup Success");
                    location.href = "../profile";
                }
                else if(response == 2){
                    $("#signUpError").removeClass("d-none");
                    $("#signUpError").text("User already registered. Please login");
                }
                else if(response == 0){
                    $("#signUpError").removeClass("d-none");
                    $("#signUpError").text("Sign up failed. Please try again later");
                }
            }
        })
    }
    else{
        $("#signUpError").removeClass("d-none");
        $("#signUpError").text("Passwords do not match");
    }
});

$(".forgotSubmitBtn").click(function(e){
    e.preventDefault();
    $(".forgotPassError").addClass("d-none");
    $(".emailSentSuccess").addClass("d-none");
    if($("#forgotEmail").val() == ""){
        $(".forgotPassError").removeClass("d-none");
        $(".forgotPassError").html("Email is required");
    }
    else{
        $(".forgotPassSpinner").addClass("spinner-border spinner-border-sm");
        var formData = new FormData();
        formData.append("forgotPass",true);
        formData.append("email",$("#forgotEmail").val());
        $.ajax({
            url: "forgotPass.php",
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success:function(response){
                $(".forgotPassSpinner").removeClass("spinner-border spinner-border-sm");
                if(response == 1){
                    console.log("email sent");
                    $(".emailSentSuccess").removeClass("d-none");
                    $(".emailSentSuccess").html("Confirmation link sent. Please check your inbox.");
                }
                else if(response == 0){
                    $(".forgotPassError").removeClass("d-none");
                    $(".forgotPassError").html("Email not sent. Errors Encountered");
                }
                else if(response == 2){
                    console.log("token not set");
                }
                else if(response==3){
                    $(".forgotPassError").removeClass("d-none");
                    $(".forgotPassError").html("Account not found !");
                }
                else{
                    console.log("error executing select query");
                }
                console.log(response);
            }
        });
    }
});