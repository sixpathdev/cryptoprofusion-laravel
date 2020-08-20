const sidenavOpenButton = document.querySelector("#top__nav__toggle");
const sidenav = document.querySelector("#sideNav");
const sideNavCloseButton = document.querySelector("#body__click");

sidenavOpenButton.addEventListener("click", () => {
    // body.classList.add('body__active');
    sidenav.classList.toggle("sidenav__active");
    sidenav.classList.toggle("sidenav__unactive");
    sideNavCloseButton.classList.add("body__click__active");
});

sideNavCloseButton.addEventListener("click", () => {
    sidenav.classList.add("sidenav__unactive");
    sideNavCloseButton.classList.remove("body__click__active");
});

$("#proceed_stepOne").on("click", function () {
    $("#step_one").hide();
    $("#upload_proof").show();
});
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

function clickToCopy() {
    /* Get the text field */
    var copyText = document.getElementById("refLink");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Referral link copied");
    // alert("Referral link copied" + copyText.value);
}
