var submitButton = document.getElementById("post-submit");
var previewButton = document.getElementById("post-preview");
var editButton = document.getElementById("post-edit");
var clearButton = document.getElementById("post-reset");

var postTitle = document.getElementById("postTitle-field"); 
var postBody = document.getElementById("postBody-field");

var previewBlog = document.getElementById("previewWindow");
var formFields = document.getElementById("addpost-fields");

var formTitle = document.getElementById("form-title");

function showPreview() {
    previewButton.style.display = "none";
    clearButton.style.display = "none";
    submitButton.style.display = "block";
    editButton.style.display = "block";
    
    formFields.style.display = "none";
    previewBlog.style.display = "block";

    formTitle.innerHTML = "Preview Post";
    
}

function showAddpost() {
    submitButton.style.display = "none";
    editButton.style.display = "none";
    previewButton.style.display = "block";
    clearButton.style.display = "block";

    previewBlog.style.display = "none";
    formFields.style.display = "block";

    formTitle.innerHTML = "Add Post";
}

function previewPost() {
    const timestamp = new Date();

    if (!validateForm()) { return; }
    
    let title = postTitle.value;

    let body = postBody.value;
    
    let dayHalf = (timestamp.getHours() >= 12 ? 'pm' : 'am');

    let formatTime = timestamp.getHours()%12+ ":" +timestamp.getMinutes()+ " " +dayHalf;
    let formatDate = timestamp.getDate()+ " " +timestamp.toLocaleString('default',{month: 'long'})+ " " +timestamp.getFullYear();

    let titleElement = document.getElementById("blogTitle");
    let bodyElement = document.getElementById("blogBody");
    let timestampElement = document.getElementById("blogTimestamp");

    titleElement.innerHTML = title;
    bodyElement.innerHTML = body;
    timestampElement.innerHTML = "posted </br>" +formatTime+ "</br>" +formatDate;

    showPreview();
}

function validateForm() {
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

    return pass;
}

function validateFormBeforeSubmit() {
    if (validateForm) {     
        let form = document.getElementById("addpost-form");
        form.submit();
    }

    return pass;
}

function clearBorders() {
    let titleField = document.getElementById("postTitle-field");
    let bodyField = document.getElementById("postBody-field");
    let errorMsg = document.getElementById("error-msg");
    let successMsg = document.getElementById("success-msg");

    titleField.style.border = "none";
    bodyField.style.border = "none";
}

showAddpost();