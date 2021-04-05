var profileFound = false;
window.onload = function () {
    $.ajax({
        url: "getProfile.php",
        type: "GET",
        data: {
            getPorfile: true
        },
        success: (response) => {
            var profile = JSON.parse(response);
            console.log(profile)
            if (profile.name != null) {
                profileFound = true;
                $("#name").val(profile.name);
                $("#gender").val(profile.gender);
                $("#college").val(profile.college);
                $("#uid").val(profile.uid);
                $("#year").val(profile.year);
                $("#course").val(profile.course);
                $("#dept").val(profile.dept);
                $(".user-email").text(profile.email);
                $(".user-plan").text("Plan - " + profile.plan);
            }
            else {
                $(".user-email").text(profile.email);
                $(".profileError").removeClass("d-none");
                $(".profileError").text("Please fill the information below so that people on this portal can identify you");
                $(".edit-profile-btn").addClass("d-none");
                $(".save-profile-btn").removeClass("d-none");
                $(".save-profile-btn").prop("disabled", false);
                $("input").prop("readonly", false);
                $("select").prop("disabled", false);
            }
        }
    })
}
$(document).ready(() => {
    $(".edit-profile-btn").on("click", () => {
        $(".edit-profile-btn").addClass("d-none");
        $(".save-profile-btn").removeClass("d-none");
        $(".save-profile-btn").prop("disabled", false);
        $("input").prop("readonly", false);
        $("select").prop("disabled", false);

    });
    $("#profileForm").on("submit", (e) => {
        e.preventDefault();
        if (validate()) {
            var spinner = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>';
        $(".profileError").addClass("d-none");
        $(".profileError").text("");
        $(".save-profile-btn").prop("disabled", true);
        $("input").prop("readonly", true);
        $("select").prop("disabled", true);
        $(".save-profile-btn").html(spinner);
        var formData = new FormData(document.getElementById("profileForm"));
        if (profileFound) {
            formData.append("updateProfile", true);
        }
        else {
            formData.append("addProfile", true);
        }
        formData.append("gender", $("#gender").val());
        formData.append("college", $("#college").val());
        formData.append("dept", $("#dept").val());
        $.ajax({
            url: "updateProfile.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: (res) => {
                console.log(res)
                $(".save-profile-btn").text("Save");
                $(".save-profile-btn").prop("disabled", true);
                $(".save-profile-btn").addClass("d-none");
                $(".edit-profile-btn").removeClass("d-none");
                if (res == 1) {
                    alert("Profile Updated");
                    // location.reload();
                }
                else {
                    $(".profileError").removeClass("d-none");
                    $(".profileError").text("Update Failed. Please try again later");
                }
            }
        })
        }
        else {
            $(".profileError").removeClass("d-none");
            $(".profileError").text("None of the fields can be blank");
        }
        

    });

});


function validate() {
    if ($("#name").val() == "" || $("#gender").val() == "null" || $("#college").val() == "null" || $("#uid").val() == "" || $("#year").val() == "" || $("#course").val() == "" || $("#dept").val() == "null") {
        return false;
    }
    else
        return true;
}