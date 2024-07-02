let page = window.location.pathname.split("/").pop();

if (page == "menu.php") {
    $("#menu").addClass("select");
    $("#info").removeClass("select");
    console.log("a")
}else if (page == "infos.php") {
    $("#menu").removeClass("select");
    $("#info").addClass("select");
    console.log("b")
}