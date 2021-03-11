$('.bi-gear').click(function () {
    $(this).addClass('rotate');
});
$('.toggle1').click(function () {
    $('.toggle-circle1').toggleClass('move');
});
$('.toggle2').click(function () {
    $('.toggle-circle2').toggleClass('move');
});
$('.toggle3').click(function () {
    $('.toggle-circle3').toggleClass('move');
});




// Get the modal
var modal = document.getElementById('id01');
var gear = document.querySelector('.bi-gear');

// When the user clicks anywhere outside of the modal, close it

modal.addEventListener('click', function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        gear.classList.remove('rotate');
    }
})

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
var dropdownContainer = document.getElementsByClassName("dropdown-container");

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");

var i;


for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.classList.toggle('block');
        }
    });
}
