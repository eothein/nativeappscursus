/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var ToC =
        "<div class='row'><div class='col-sm-12'><nav role='navigation' class='table-of-contents'>" +
        "<h2>Contents:</h2>" +
        "<ul>";

var newLine, el, title, link;

$("article h2").each(function () {

    el = $(this);
    title = el.text();
    link = "#" + el.attr("id");

    newLine =
            "<li>" +
            "<a href='" + link + "'>" +
            title +
            "</a>" +
            "</li>";

    ToC += newLine;

});

ToC +=
        "</ul>" +
        "</nav></div></div>";

$(".all-sections").prepend(ToC);