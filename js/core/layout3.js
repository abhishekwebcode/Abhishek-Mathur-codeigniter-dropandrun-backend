nextpg=(e)=>{
    var t=window.location.href.split("/");
    a=t.pop();
    t.push(parseInt(a)+1);
    window.location=t.join("/");
};
$("#submit").click(function (event) {
    jQuery.post("http://13.127.138.244/dropandrun/apply/index.php/submit/send/3", {
        model:$(".model")[0].value,
        make:$(".make")[0].value,
        year:$(".year")[0].value,
        color:$(".color")[0].value,
        type:$(".type")[0].value
        }, function (e) {
            e = JSON.parse(e);
            if (e.success) {
                nextpg.call();
            }
            else {
                alert(e.message);
            }
        }
    );
    return false;
});

$("#back").click(function () {
    var a=window.location.href.split("/");
    e=a.pop();
    a.push(String(e-1));
    window.location.href=a.join("/");
});


