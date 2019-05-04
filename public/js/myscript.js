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
        });

        $('.dark-badge').click(function() {
            $('body').removeClass('white-content');
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


$("form input[name='redirect']").val("/activity/promote");
$(document).ready(function() {
    if (parseInt(pn.userLevel) >= 6 || parseInt(pn.userLevel) === 0) {
        $('.pbc').hide();
        $('.sections .content-area2').css("height", "678px");
    }

    if (pn.userName) {
        $.request({
            url: "/api/rebate/bet-amount",
            data: { "cycleType": "WEEK" }
        }).done(function(res) {
            if (!res.successful) {
                if (res.data === "PROVIDER_ERROR") {
                    $('.pbc').hide();
                    $('.sections .content-area2').css("height", "678px");
                }
            } else {
                var loginStatus = res.data.LOGIN_STATUS;
                if (loginStatus === 'Y') {
                    var currentLevel = res.data.USER_LEVEL;
                    var weekBetAmount = res.data.TOTAL_BET_AMOUNT;
                    if (parseInt(currentLevel) >= 6 || parseInt(currentLevel) === 0) {
                        $('.pbc').hide();
                    } else {
                        levelAnimation(weekBetAmount.toFixed(2));
                    }
                } else {
                    $('.pbc').hide();
                    $('.sections .content-area2').css("height", "678px");
                }
            }
        });
    } else {
        $('.pbc').hide();
        $('.sections .content-area2').css("height", "678px");
    }
    if (!isNaN(parseInt(pn.userLevel))) {
        $(".sel").addClass("sel" + pn.userLevel);
    }
    $(".table-striped tr:odd").css('background-color', '#9a8b74');
    $(".table-striped tr:even").css('background-color', '#90816b');

    function levelAnimation(money) {
        var $wrap = $('.level-line');
        var $line = $wrap.find('.pbcf');
        var $line2 = $wrap.find('.pbpd');
        var $line3 = $wrap.find('.pbdd');
        var width = $wrap.width();
        var alpha = 207;
        var _width = 0;
        var n = 0;
        var st = $('.st');
        var sa = $('.sa');
        var aa = $('.aa');
        var amount = $('.amount');
        var money_week = parseInt(money, 10);
        money = parseInt(money, 10);
        amount.text(utils.amountFormatter(money_week));
        if (money < 100000) {
            _width = money / 100000 * alpha;
        } else if (money >= 100000 && money < 500000) {
            _width = (money - 100000) / 400000 * alpha;
            n = 1;
        } else if (money >= 500000 && money < 1000000) {
            _width = (money - 500000) / 500000 * alpha;
            n = 2;
        } else if (money >= 1000000 && money < 3000000) {
            _width = (money - 1000000) / 2000000 * alpha;
            n = 3;
        } else if (money >= 3000000 && money < 6000000) {
            _width = (money - 3000000) / 3000000 * alpha;
            n = 4;
        } else if (money >= 6000000) {
            n = 5;
        }

        if (parseInt(pn.userLevel) === 1) {
            st.text('一星级');
            sa.text('二星级');
            if (money_week > 100000) {
                aa.text(0);
            } else {
                aa.text(utils.amountFormatter(100000 - money_week));
            }
            $('.vp2').addClass('active');
            $('.vp2').append("<div class='noti'>下一级别</div>");
        } else if (parseInt(pn.userLevel) === 2) {
            $('.vp1').hide();
            st.text('二星级');
            sa.text('三星级');
            if (money_week > 500000) {
                aa.text(0);
            } else {
                aa.text(utils.amountFormatter(500000 - money_week));
            }
            $('.vp3').addClass('active');
            $('.vp3').append("<div class='noti'>下一级别</div>");
        } else if (parseInt(pn.userLevel) === 3) {
            $('.vp1').hide();
            $('.vp2').hide();
            st.text('三星级');
            sa.text('VIP 4');
            if (money_week > 1000000) {
                aa.text(0);
            } else {
                aa.text(utils.amountFormatter(1000000 - money_week));
            }
            $('.vp4').addClass('active');
            $('.vp4').append("<div class='noti'>下一级别</div>");
        } else if (parseInt(pn.userLevel) === 4) {
            $('.vp1').hide();
            $('.vp2').hide();
            $('.vp3').hide();
            st.text('VIP 4');
            sa.text('VIP 5');
            if (money_week > 3000000) {
                aa.text(0);
            } else {
                aa.text(utils.amountFormatter(3000000 - money_week));
            }
            $('.vp5').addClass('active');
            $('.vp5').append("<div class='noti'>下一级别</div>");
        } else if (parseInt(pn.userLevel) === 5) {
            $('.vp1').hide();
            $('.vp2').hide();
            $('.vp3').hide();
            $('.vp4').hide();
            st.text('VIP 5');
            sa.text('VIP 6');
            if (money_week > 6000000) {
                aa.text(0);
            } else {
                aa.text(utils.amountFormatter(6000000 - money_week));
            }
            $('.vp6').addClass('active');
            $('.vp6').append("<div class='noti'>下一级别</div>");
        } else if (parseInt(pn.userLevel) >= 6) {
            $('.pbc').hide();
            _width = 206;
        }

        var m = 0;
        var anim = function() {
            $line.animate({
                'width': _width + alpha * m
            }, 300, 'linear', function() {
                if (m < n) {
                    m++;
                    anim(m);
                } else {
                    $line.animate({
                        'width': _width + alpha * m
                    }, 'slow');
                }
            });
            $line2.animate({
                'left': _width + 15 + alpha * m
            }, {
                duration: 300,
                easing: 'linear',
                step: function(now, fx) {
                    var pos = $line2.position();
                    var data = pos.left;
                    // console.log(data);
                    if (data >= 200) {
                        $('.pbpd-pbb').fadeOut();
                        if (data >= 200) {
                            $('.pbcf-pd').fadeIn();
                        }
                    }

                }

            });
            var nwidth = _width + alpha * n;
            $line3.animate({
                'left': _width + 15 + alpha * m
            }, {
                duration: 300,
                easing: 'linear',
                step: function(now, fx) {
                    var pos = $line2.position();
                    var data = pos.left;
                    if (screen.width >= 2560) {
                        if (data >= 1140) {
                            $line3.stop();
                            var pos1 = nwidth;
                            var pos2 = $line3.position().left + 10;
                            var mleft = pos1 - 814;
                            $line3.find('.arrow').animate({
                                'left': mleft + 110
                            }, {
                                duration: 380,
                                easing: 'linear',
                                step: function(now, fx) {
                                    var posi = $line3.find('.arrow').position();
                                    var dt = posi.left;
                                    if (dt >= 400) {
                                        $line3.find('.arrow').stop();
                                    }
                                }
                            });
                        }
                    } else {
                        if (data >= 860) {
                            $line3.stop();
                            var pos1 = nwidth;
                            var pos2 = $line3.position().left + 10;
                            var mleft = pos1 - pos2;
                            $line3.find('.arrow').animate({
                                'left': mleft + 95
                            }, {
                                duration: 320,
                                easing: 'linear',
                                step: function(now, fx) {
                                    var posi = $line3.find('.arrow').position();
                                    var dt = posi.left;
                                    if (dt >= 310) {
                                        $line3.find('.arrow').stop();
                                    }
                                }
                            });
                        }
                    }
                }
            });
        }
        anim(m);
    };

    $('#carousel-showcase .carousel-indicators .flip-container').on('mouseover', function() {
        $(this).trigger('click');
    });
});