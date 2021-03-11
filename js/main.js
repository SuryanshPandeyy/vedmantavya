$('.bi-gear').click(function () {
    $(this).addClass('rotate');
});
$('.toggle1').click(function () {
    $('.toggle-circle1').toggleClass('move');
    $('.hindi').toggleClass('lang');
    $('.english').toggleClass('lang');
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