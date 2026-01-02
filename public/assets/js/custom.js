// document.addEventListener("livewire:navigated", function () {
//     document.getElementById("hamburger").addEventListener("click", function () {
//         document.getElementById("offcanvas-menu").classList.add("show");
//     });

//     document
//         .getElementById("close-menu")
//         .addEventListener("click", function () {
//             document.getElementById("offcanvas-menu").classList.remove("show");
//         });

//     document.addEventListener("click", function (event) {
//         var offcanvasMenu = document.getElementById("offcanvas-menu");
//         var hamburger = document.getElementById("hamburger");
//         var closeMenu = document.getElementById("close-menu");

//         if (
//             !offcanvasMenu.contains(event.target) &&
//             !hamburger.contains(event.target) &&
//             !closeMenu.contains(event.target)
//         ) {
//             offcanvasMenu.classList.remove("show");
//         }
//     });

// });
// Back To Top Start
window.onscroll = function () {
    scrollFunction();
    const navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("bg-[#007e6f]");
        navbar.classList.add("top-0");
        navbar.classList.remove("bg-transparent");
    } else {
        navbar.classList.add("bg-transparent");
        navbar.classList.remove("bg-[#007e6f]");
        navbar.classList.remove("top-0");
    }
};

function scrollFunction() {
    var mybutton = document.getElementById("back-to-top");
    if (mybutton != null) {
        if (
            document.body.scrollTop > 500 ||
            document.documentElement.scrollTop > 500
        ) {
            mybutton.classList.add("opacity-100");
            mybutton.classList.remove("opacity-0");
        } else {
            mybutton.classList.add("opacity-0");
            mybutton.classList.remove("opacity-100");
        }
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

try {
    if (document.getElementById("days")) {
        // The data/time we want to countdown to

        var eventCountDown = new Date("June 04, 2026 08:37:52").getTime();

        // Run myfunc every second

        var myfunc = setInterval(function () {
            var now = new Date().getTime();

            var timeleft = eventCountDown - now;

            // Calculating the days, hours, minutes and seconds left

            var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));

            var hours = Math.floor(
                (timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );

            var minutes = Math.floor(
                (timeleft % (1000 * 60 * 60)) / (1000 * 60)
            );

            var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

            // Result is output to the specific element

            document.getElementById("days").innerHTML = days;

            document.getElementById("hours").innerHTML = hours;

            document.getElementById("mins").innerHTML = minutes;

            document.getElementById("secs").innerHTML = seconds;

            // Display the message when countdown is over

            if (timeleft < 0) {
                clearInterval(myfunc);

                document.getElementById("days").innerHTML = "";

                document.getElementById("hours").innerHTML = "";

                document.getElementById("mins").innerHTML = "";

                document.getElementById("secs").innerHTML = "";

                document.getElementById("end").innerHTML = "00:00:00:00";
            }
        }, 1000);
    }
} catch (err) {}
