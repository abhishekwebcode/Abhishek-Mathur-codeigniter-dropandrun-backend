nextpg=()=>{
    var t=window.location.href.split("/");
    a=t.pop();
    t.push(parseInt(a)+1);
    window.location=t.join("/");
};
    $("#submit").click(function (event) {
        var fname = $("#fname").val();
        var email = $("#email_inline").val();
        var lname = $("#lname").val();
        var pass = $("#pass").val();
        var country = $("#coun").val();
        var postal = $("#post").val();
        var dob = $("#dob").val();
        var mobile = $("#mobile").val();
        var province = $("#pro").val();
        var city = $("#city").val();
        jQuery.post("http://13.127.138.244/dropandrun/apply/index.php/submit/send/1", {
                fname: fname,
                email: email,
                lname: lname,
                pass: pass,
                country: country,
                postal: postal,
                dob: dob,
                mobile: mobile,
                province: province,
                city: city
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
    });

