$("#filter-field").on("keyup", function () {
    var userValue = $("#filter-field").val();
    $("#term-list tbody a").each(function (i, el) {
        var term = $(el).html();
        if (!term.contains(userValue)) {
            $(el).parent().parent().hide();
        } else {
            $(el).parent().parent().show();
        }
    });
});