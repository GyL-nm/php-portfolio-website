function validateFormBeforeSubmit() {
    let titleField = document.getElementById("postTitle-field");
    let bodyField = document.getElementById("postBody-field");

    let pass = true;

    titleField.style.border = "none";
    if (titleField.value == "") {
        titleField.style.border = "solid .15rem red";
        pass = false;

        event.preventDefault(); 
    }

    bodyField.style.border = "none";
    if (bodyField.value == "") {
        bodyField.style.border = "solid .15rem red";

        pass = false;

        event.preventDefault(); 
    }

    let form = document.getElementById("addpost-form");
    form.submit();

    return pass;
}