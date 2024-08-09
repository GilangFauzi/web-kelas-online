AOS.init();

$(document).ready(function () {
    $("#lms-content").show();
    $("#featured-content").hide();
    $("#video-content").hide();
    $("#inquiry-content").hide();

    $("#kelas-com-content").show();
    $("#kelas-work-content").hide();
    $("#bootcamp-content").hide();

    $("#lms").click(function () {
        $("#lms-content").show();
        $("#featured-content").hide();
        $("#inquiry-content").hide();
        $("#video-content").hide();
        $("#video-learning").removeClass("active-tab");
        $("#inquiry-learning").removeClass("active-tab");
        $("#featured").removeClass("active-tab");
        $("#lms").addClass("active-tab");
    });

    $("#featured").click(function () {
        $("#lms-content").hide();
        $("#inquiry-content").hide();
        $("#video-content").hide();
        $("#featured-content").show();
        $("#lms").removeClass("active-tab");
        $("#video-learning").removeClass("active-tab");
        $("#inquiry-learning").removeClass("active-tab");
        $("#featured").addClass("active-tab");
    });

    $("#video-learning").click(function () {
        $("#lms-content").hide();
        $("#featured-content").hide();
        $("#inquiry-content").hide();
        $("#video-content").show();
        $("#lms").removeClass("active-tab");
        $("#featured").removeClass("active-tab");
        $("#inquiry-learning").removeClass("active-tab");
        $("#video-learning").addClass("active-tab");
    });

    $("#inquiry-learning").click(function () {
        $("#lms-content").hide();
        $("#featured-content").hide();
        $("#video-content").hide();
        $("#inquiry-content").show();
        $("#lms").removeClass("active-tab");
        $("#featured").removeClass("active-tab");
        $("#video-learning").removeClass("active-tab");
        $("#inquiry-learning").addClass("active-tab");
    });

    $("#kelas-com").click(function () {
        $("#kelas-com-content").show();
        $("#kelas-work-content").hide();
        $("#bootcamp-content").hide();
        $("#kelas-work").removeClass("active-tab");
        $("#bootcamp").removeClass("active-tab");
        $("#kelas-com").addClass("active-tab");
    });

    $("#kelas-work").click(function () {
        $("#kelas-com-content").hide();
        $("#kelas-work-content").show();
        $("#bootcamp-content").hide();
        $("#kelas-com").removeClass("active-tab");
        $("#bootcamp").removeClass("active-tab");
        $("#kelas-work").addClass("active-tab");
    });

    $("#bootcamp").click(function () {
        $("#kelas-com-content").hide();
        $("#kelas-work-content").hide();
        $("#bootcamp-content").show();
        $("#kelas-com").removeClass("active-tab");
        $("#bootcamp").addClass("active-tab");
        $("#kelas-work").removeClass("active-tab");
    });
});

// JavaScript to show/hide the button and scroll to top
document.addEventListener('DOMContentLoaded', function () {
    var backToTopBtn = document.getElementById('backToTopBtn');

    // Show the button when scrolled down 100px
    window.addEventListener('scroll', function () {
        if (window.scrollY > 100) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    // Smooth scroll to top when the button is clicked
    backToTopBtn.addEventListener('click', function (event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
