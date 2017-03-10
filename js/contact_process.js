$(function() {
    $("input#cname,input#cemail,input#cphone,textarea#cmessage").jqBootstrapValidation({
        preventSubmit: !0,
        submitError: function(e, t, s) {},
        submitSuccess: function(e, t) {
            t.preventDefault();
            var s = $("input#cname").val(),
                a = $("input#cemail").val(),
                n = $("input#cphone").val(),
                r = $("textarea#cmessage").val(),
                c = s;
            c.indexOf(" ") >= 0 && (c = s.split(" ").slice(0, -1).join(" ")), $.ajax({
                url: "index.php",
                type: "POST",
                data: {
                    name: s,
                    phone: n,
                    email: a,
                    message: r
                },
                cache: !1,
                success: function() {
                    $("#success").html("<div class='alert alert-success'>"), $("#success > .alert-success").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"), $("#success > .alert-success").append("<strong>Your message has been sent. </strong>"), $("#success > .alert-success").append("</div>"), $("#contactForm").trigger("reset")
                },
                error: function() {
                    $("#success").html("<div class='alert alert-danger'>"), $("#success > .alert-danger").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"), $("#success > .alert-danger").append("<strong>Sorry " + c + ", it seems that my mail server is not responding. Please try again later!"), $("#success > .alert-danger").append("</div>"), $("#contactForm").trigger("reset")
                }
            })
        },
        filter: function() {
            return $(this).is(":visible")
        }
    }), $('a[data-toggle="tab"]').click(function(e) {
        e.preventDefault(), $(this).tab("show")
    })
}), $("#name").focus(function() {
    $("#success").html("")
});