function profilePicPreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            console.log(e.target.result);
            document.getElementById('profile-pic-preview').src =  e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}

/**
 * Initialize the file input#profile-photo when the button #photo-changer is clicked
 */
document.getElementById('photo-changer').addEventListener('click', function () {
    var input = document.getElementById('profile-photo');
    input.addEventListener('change', function () {
        profilePicPreview(input);
    });
    input.click();
});
