$(document).ready(function() {
    $().ready(function() {
        $('body').addClass('white-content');
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = false;
        white_color = true;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
            if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                    event.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
            }
        });

        $('.fixed-plugin .background-color span').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data', new_color);
            }

            if ($main_panel.length != 0) {
                $main_panel.attr('data', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data', new_color);
            }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
            var $btn = $(this);

            if (sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                sidebar_mini_active = false;
                blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
            } else {
                $('body').addClass('sidebar-mini');
                sidebar_mini_active = true;
                blackDashboard.showSidebarMessage('Sidebar mini activated...');
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
                clearInterval(simulateWindowResize);
            }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
            var $btn = $(this);

            if (white_color == true) {

                $('body').addClass('change-background');
                setTimeout(function() {
                    $('body').removeClass('change-background');
                    $('body').removeClass('white-content');
                    $('body').addClass('change-background');
                }, 900);
                white_color = false;
            } else {

                $('body').addClass('change-background');
                setTimeout(function() {
                    $('body').removeClass('change-background');
                    $('body').addClass('white-content');
                }, 900);

                white_color = true;
            }


        });

        $('.light-badge').click(function() {
            $('body').addClass('white-content');
            $('body').removeClass('dark-content');
            blackDashboard.showSidebarMessage('White-Themes...');
        });

        $('.dark-badge').click(function() {
            $('body').removeClass('white-content');
            $('body').addClass('dark-content');
            blackDashboard.showSidebarMessage('Dark-Themes...');
        });


        $('#bg-primary').click(function() {
            // $('nav').addClass('bg-success');
            // $('nav').removeClass('bg-primary');
            $('.color-bg').css('background-color', '#e14eca');
            // blackDashboard.showSidebarMessage('bg-primary...');
        });
        $('#bg-info').click(function() {
            $('.color-bg').css('background-color', '#1d8cf8');
            // blackDashboard.showSidebarMessage('bg-success...');
        });
        $('#bg-success').click(function() {
            $('.color-bg').css('background-color', '#00bf9a');
            // blackDashboard.showSidebarMessage('bg-success...');
        });
        $('#bg-danger').click(function() {
            $('.color-bg').css('background-color', '#fd5d93');
            // blackDashboard.showSidebarMessage('bg-success...');
        });
        $('#bg-orange').click(function() {
            $('.color-bg').css('background-color', '#fb6340');
            // blackDashboard.showSidebarMessage('bg-success...');
        });
    });
});


$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    // demo.initDashboardPageCharts();

    // demo.initVectorMap();

});

// Mouseover of Carousel in the welcome page
$(".carousel-indicators  li").on("mouseover", function() {
    $(this).trigger("click");
});

// Auto Modal for login

// $(document).ready(function() {
//     $("#loginModal").modal("show");
// });




// $("form input[name='redirect']").val("/activity/promote");
// $(document).ready(function() {

//     if (parseInt(pn.userLevel) >= 6 || parseInt(pn.userLevel) === 0) {
//         $('.pbc').hide();
//         $('.sections .content-area2').css("height", "678px");
//     }

//     if (pn.userName) {
//         $.request({
//             url: "/api/rebate/bet-amount",
//             data: { "cycleType": "WEEK" }
//         }).done(function(res) {
//             if (!res.successful) {
//                 if (res.data === "PROVIDER_ERROR") {
//                     $('.pbc').hide();
//                     $('.sections .content-area2').css("height", "678px");
//                 }
//             } else {
//                 var loginStatus = res.data.LOGIN_STATUS;
//                 if (loginStatus === 'Y') {
//                     var currentLevel = res.data.USER_LEVEL;
//                     var weekBetAmount = res.data.TOTAL_BET_AMOUNT;
//                     if (parseInt(currentLevel) >= 6 || parseInt(currentLevel) === 0) {
//                         $('.pbc').hide();
//                     } else {
//                         levelAnimation(weekBetAmount.toFixed(2));
//                     }
//                 } else {
//                     $('.pbc').hide();
//                     $('.sections .content-area2').css("height", "678px");
//                 }
//             }
//         });
//     } else {
//         $('.pbc').hide();
//         $('.sections .content-area2').css("height", "678px");
//     }
//     if (!isNaN(parseInt(pn.userLevel))) {
//         $(".sel").addClass("sel" + pn.userLevel);
//     }
//     $(".table-striped tr:odd").css('background-color', '#9a8b74');
//     $(".table-striped tr:even").css('background-color', '#90816b');

//     $('#carousel-showcase .carousel-indicators .flip-container').on('mouseover', function() {
//         $(this).trigger('click');
//     });
// });



// javascript init 
// $('.bootstrap-switch').each(function() {
//     $this = $(this);
//     data_on_label = $this.data('on-label') || '';
//     data_off_label = $this.data('off-label') || '';

//     $this.bootstrapSwitch({
//         onText: data_on_label,
//         offText: data_off_label
//     });
// });


// Foter Fixed
var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
navItems.forEach(function(e, i) {
    e.addEventListener("click", function(e) {
        navItems.forEach(function(e2, i2) {
            e2.classList.remove("mobile-bottom-nav__item--active");
        })
        this.classList.add("mobile-bottom-nav__item--active");
    });
});