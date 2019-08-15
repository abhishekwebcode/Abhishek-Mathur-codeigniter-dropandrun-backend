    /*
    $.post("http://13.127.138.244/dropandrun/apply/index.php/submit/send/4", formData, function(e) {
        // success
        console.log(JSON.parse(e));
    });
    */

    $("form#fies-form").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "http://13.127.138.244/dropandrun/apply/index.php/submit/send/4",
            type: 'POST',
            data: formData,
            success: function (data) {
                data=JSON.parse(data);
                if (data.success) {
                    extpg=(e)=>{
                        var t=window.location.href.split("/");
                        a=t.pop();
                        t.push(parseInt(a)+1);
                        window.location=t.join("/");
                    };
                    extpg.call(null);
                } else {
                    alert("ERROR");
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });

    $("#back").click(function () {
        var a=window.location.href.split("/");
        e=a.pop();
        a.push(String(e-1));
        window.location.href=a.join("/");
    });


