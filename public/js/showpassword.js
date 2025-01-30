document.getElementById("showPassword").addEventListener("change", function () {
    let passwordField = document.getElementById("password");
    passwordField.type = this.checked ? "text" : "password"; //  the "text" : "password" is nag-gekan sila sa type= sa input which is checkbox
});
