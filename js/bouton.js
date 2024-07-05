let page = window.location.pathname.split("/").pop().split(".").slice(0, -1)[0];

$("#navbar a").removeClass("select");
$("#"+page).addClass("select");
