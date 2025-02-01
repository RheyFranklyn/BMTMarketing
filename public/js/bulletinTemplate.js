// public\js\bulletinTemplate.js
$(document).ready(function () {
    $("#bulletinForm").submit(function (e) {
        e.preventDefault(); // Prevent default form submission

        var formData = {
            pname: $("#itemName").val(),
            kind: $("#selectBulletinorTemplate").val(),
            content: $("#itemDescription").val(),
        };

        $.ajax({
            url: "/bulletin/store",
            method: "POST",
            data: formData,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                if (response.success) {
                    toastr.success(response.message);
                }
            },
            error: function (xhr) {
                toastr.error("Error: " + xhr.responseJSON.message);
            },
        });
    });
});
