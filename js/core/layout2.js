nextpg=(e)=>{
    var t=window.location.href.split("/");
    a=t.pop();
    t.push(parseInt(a)+1);
    window.location=t.join("/");
};
var appf={
    getBoolFromCHECKBOX:function (elem) {
        var y=$("[name='"+elem+"']:checked").parent().text().indexOf("Yes")>-1;
        var yy= $("[name='"+elem+"']:checked").parent().text().indexOf("No")>-1;
        return (y||yy) ? y : null;
    }
};
$("#submit").click(function (event) {
    jQuery.post("http://13.127.138.244/dropandrun/apply/index.php/submit/send/2", {
          valid_license:appf.getBoolFromCHECKBOX("valid_license"),
        lift_condition:appf.getBoolFromCHECKBOX("lift_condition"),
        phone_condition:appf.getBoolFromCHECKBOX("phone_condition"),
        dui_condition:appf.getBoolFromCHECKBOX("dui_condition"),
        crime_condition:appf.getBoolFromCHECKBOX("crime_condition"),
        insurance_condition:appf.getBoolFromCHECKBOX("insurance_condition")
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

