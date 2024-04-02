// $('.slidebutton').click(function(){ 
//     $('#image').fadeToggle(300);
//     $("#title").fadeToggle(300);

// });

// $(document).ready(function () {
//     // Set initial position
//     $(".arrow").css("top", "0px");

//     // Set up continuous animation
//     setInterval(function () {
//         $(".arrow").animate({ top: '15px' }).delay(400).animate({ top: '0px' });
//     }, 1500 ,'easeInOutQuint'); // Adjust the duration as needed
// });

function bottom() {
    
    var body = document.getElementById("all");
    body.style.transitionDelay = "3s"; // Geçiş gecikmesini 3 saniye olarak ayarlayın
    body.style.transition = ".82s";
    body.style.backgroundPosition = "0 50px";

}
function topp() {
    var body = document.getElementById("all");
    body.style.transitionDelay = "3s"; // Geçiş gecikmesini 3 saniye olarak ayarlayın
    body.style.transition = ".3s";
    body.style.backgroundPosition = "0 0";
}