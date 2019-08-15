$("#submit").click(function () {
    $.post("http://13.127.138.244/dropandrun/apply/index.php/submit/register",{},function (e) {
        e=JSON.parse(e);
        if (e.success) {
            a=window.location.href.split("/");
            i=a.pop();
            a.push("6");
            window.location=a.join("/");
        }
    });
});

$("#back").click(function () {
    var a=window.location.href.split("/");
    e=a.pop();
    a.push(String(e-1));
    window.location.href=a.join("/");
});

