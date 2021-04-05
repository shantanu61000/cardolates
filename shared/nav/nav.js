$(document).ready(function () {
    //open close sidebar
    $(".ham-burger").click(() => {
        $(".sidebar-wrapper").addClass("show");
        $(".sidebar-wrapper .sidebar").addClass("slide")
    });
    $(".close-menu").click(function () {
        $(".sidebar-wrapper").removeClass("show");
        $(".sidebar-wrapper .sidebar").removeClass("slide")
    })
    $(".sidebar-items").click(function () {
        $(".sidebar-wrapper").removeClass("show");
        $(".sidebar-wrapper .sidebar").removeClass("slide")
    })
});
