$(document).ready(function () {
  var body = $("body");
  var normalwidth = 0;
  var scrollwidth = 0;
  if (body.prop("scrollHeight") > body.height()) {
    normalwidth = window.innerWidth;
    scrollwidth = normalwidth - body.width();
    $("#wrapper").css({ marginRight: "-" + scrollwidth + "px" });
  }
});
