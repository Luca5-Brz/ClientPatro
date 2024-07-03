let page = window.location.pathname.split("/").pop();

if (page == "menu.php") {
    $("#menu").addClass("select");
    $("#info").removeClass("select");
}else if (page == "infos.php") {
    $("#menu").removeClass("select");
    $("#info").addClass("select");
}