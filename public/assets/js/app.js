$("#myonoffswitch34").on("click", function () {
    if (this.checked) {
        sidemenudropdown();
        $("body").removeClass("horizontal");
        $("body").removeClass("horizontal-hover");
        $(".main-content").removeClass("hor-content");
        $(".main-content").addClass("app-content");
        // $(".main-container").removeClass("container");
        // $(".main-container").addClass("container-fluid");
        $(".app-header").removeClass("hor-header");
        $(".hor-header").addClass("app-header");
        $(".app-sidebar").removeClass("horizontal-main");
        $(".main-sidemenu").removeClass("container");
        $("#slide-left").removeClass("d-none");
        $("#slide-right").removeClass("d-none");
        $("body").addClass("sidebar-mini");
        localStorage.setItem("noasidebarMini", "true");
        localStorage.removeItem("noahorizontal");
        localStorage.removeItem("noahorizontalHover");
        // menuClick();
        responsive();
    }
});

function header() {
    // if (this.checked) {
    sidemenudropdown();
    if (window.innerWidth >= 992) {
        let li = document.querySelectorAll(".side-menu li");
        li.forEach((e, i) => {
            e.classList.remove("is-expanded");
        });
        var animationSpeed = 300;
        // first level
        var parent = $("[data-bs-toggle='sub-slide']").parents("ul");
        var ul = parent.find("ul:visible").slideUp(animationSpeed);
        ul.removeClass("open");
        var parent1 = $("[data-bs-toggle='sub-slide2']").parents("ul");
        var ul1 = parent1.find("ul:visible").slideUp(animationSpeed);
        ul1.removeClass("open");
    }
    $("body").addClass("horizontal");
    $(".main-content").addClass("hor-content");
    $(".main-content").removeClass("app-content");
    // $(".main-container").addClass("container");
    // $(".main-container").removeClass("container-fluid");
    $(".app-header").addClass("hor-header");
    $(".hor-header").removeClass("app-header");
    $(".app-sidebar").addClass("horizontal-main");
    $(".main-sidemenu").addClass("container");
    $("body").removeClass("sidebar-mini");
    $("body").removeClass("sidenav-toggled");
    $("body").removeClass("horizontal-hover");
    $("body").removeClass("default-menu");
    $("body").removeClass("icontext-menu");
    $("body").removeClass("icon-overlay");
    $("body").removeClass("closed-leftmenu");
    $("body").removeClass("hover-submenu");
    $("body").removeClass("hover-submenu1");
    $("#slide-left").removeClass("d-none");
    $("#slide-right").removeClass("d-none");
    document.querySelector(".horizontal .side-menu").style.flexWrap = "nowrap";
    // $('#slide-left').addClass('d-none');
    // $('#slide-right').addClass('d-none');
    // document.querySelector('.horizontal .side-menu').style.flexWrap = 'wrap'
    // menuClick();
    localStorage.setItem("noahorizontal", "true");
    localStorage.removeItem("noasidebarMini");
    localStorage.removeItem("noahorizontalHover");
    checkHoriMenu();
    responsive();
    // }
}

// Header Menu Closing
window.addEventListener("click", function (e) {
    if (!document.getElementById("main-menu").contains(e.target)) {
        $(".side-menu li").removeClass("is-expanded");
        $(".side-menu li ul").removeClass("open");
        $(".side-menu li ul").slideUp()
    }
    $(".side-menu li").removeClass("is-expanded");
});

window.addEventListener("click", function (e) {
    if (!document.getElementById("main-menu_student").contains(e.target)) {
        $(".side-menu-student ol").toggleClass("is-expanded");
        $(".side-menu-student ol ul").toggleClass("open");
        $(".side-menu-student ol ul").slideUp()
    }
    $(".side-menu li").removeClass("is-expanded");
});

function edit_profile() {
    var input = $(".profile_edit");
    var i = $("#edit_profilebtn_01");
    if ($(input).attr("type") == "password") {
        $(input).attr("type", "text");
        $(i).attr("class", "zmdi zmdi-eye");
    } else {
        $(i).attr("class", "zmdi zmdi-eye-off");
        $(input).attr("type", "password");
    }
}
function edit_profile_02() {
    var input = $(".profile_edit_2");
    var i = $("#edit_profilebtn_02");
    if ($(input).attr("type") == "password") {
        $(input).attr("type", "text");
        $(i).attr("class", "zmdi zmdi-eye");
    } else {
        $(i).attr("class", "zmdi zmdi-eye-off");
        $(input).attr("type", "password");
    }
}

// login profile
function admindropdown() {
    $(".admindropdown").toggle("d-'block");
}
window.addEventListener("click", function (e) {
    if (
        !document
            .querySelector(".admindropdown-btn")
            .contains(e.target)
    ) {
        $(".admindropdown").slideUp();
    $(".side-menu li").removeClass("is-expanded");

    }
});
// login profile



// userdiv

function hideuserDiv() {
    $(".userdiv").slideUp();
    $(".side-menu li").removeClass("is-expanded");
    $(".side-menu li ul").removeClass("open");
    $(".side-menu li ul").css("display", "none");
}
function hideuserDiv_student() {
    $(".userdiv_student").slideUp();
    $(".side-menu ol").removeClass("is-expanded");
    $(".side-menu ol slide_menu_top").removeClass("open");
    $(".side-menu ol slide_menu_top").css("display", "none");
}



// userdiv





