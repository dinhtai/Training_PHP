function get_dimensions()
{
    var dims = {width: 0, height: 0};

    if (typeof (window.innerWidth) == 'number') {
        //Non-IE
        dims.width = window.innerWidth;
        dims.height = window.innerHeight;
    } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
        //IE 6+ in 'standards compliant mode'
        dims.width = document.documentElement.clientWidth;
        dims.height = document.documentElement.clientHeight;
    } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        //IE 4 compatible
        dims.width = document.body.clientWidth;
        dims.height = document.body.clientHeight;
    }

    return dims;
}

function set_feedback(text, classname, keep_displayed)
{
    if (text != '')
    {
        $('#feedback_bar').removeClass();
        $('#feedback_bar').addClass(classname);
        $('#feedback_bar').text(text);
        $('#feedback_bar').slideDown(250);
        var text_length = text.length;
        var text_lengthx = text_length * 50;

        if (!keep_displayed)
        {
            $('#feedback_bar').show();

            setTimeout(function ()
            {
                $('#feedback_bar').slideUp(250, function ()
                {
                    $('#feedback_bar').removeClass();
                });
            }, text_lengthx);
        }
    }
    else
    {
        $('#feedback_bar').hide();
    }
}

function set_notice(text, classname, keep_displayed)
{
    if (text != '')
    {
        $('#notice_bar').removeClass();
        $('#notice_bar').addClass(classname);
        $('#notice_bar').text(text);
        $('#notice_bar').slideDown(500);
        $('#notice_bar').css("top", ($(window).height() - 100) / 2);
        $('#notice_bar').css("left", ($(window).width() - 500) / 2);

        if (!keep_displayed)
        {
            $('#notice_bar').show();

            setTimeout(function ()
            {
                $('#notice_bar').slideUp(500, function ()
                {
//					$('#notice_bar').removeClass();
                });
            }, 5000);
        }
    }
    else
    {
        $('#notice_bar').hide();
    }
}
/**
 * Ham show loading
 * */
function show_loading() {
    $(".waiting-front").show();
}
/**
 * Ham hide loading
 * */
function hide_loading() {
    $(".waiting-front").hide();
}
$(document).keydown(function (event)
{
    if (event.keyCode == 113)
    {
//		window.location = SITE_URL + "/help";
    }
});
$(document).ready(function () {
    $(".waiting-front").click(function () {
        $(this).hide();
    });
});

function goBack() {
    window.history.back();
}
function emptyData(mixed_var) {
    var undef, key, i, len;
    if (typeof mixed_var === 'object') {
        for (key in mixed_var) {
            return false;
        }
        return true;
    } else if (typeof mixed_var === 'undefined') {
        return true;
    } else {
        mixed_var = mixed_var.toString();
//        var emptyValues = [undef, null, false, 0, "", '0'];
        var emptyValues = [undef, null, false, ""];
        for (i = 0, len = emptyValues.length; i < len; i++) {
            if (mixed_var.trim() === emptyValues[i]) {
                return true;
            }
        }
    }
    return false;
}

var urlParams;
(window.onpopstate = function () {
    var match,
            pl = /\+/g, // Regex for replacing addition symbol with a space
            search = /([^&=]+)=?([^&]*)/g,
            decode = function (s) {
                return decodeURIComponent(s.replace(pl, " "));
            },
            query = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query))
        urlParams[decode(match[1])] = decode(match[2]);
})();

var navbarHeight = $('.header').outerHeight();
var didScroll;
var lastScrollTop = 0;
var delta = 5;
$(window).scroll(function (event) {
    didScroll = true;
});
setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);
function hasScrolled() {
    var st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta)
        return;
    if (st > lastScrollTop && st > navbarHeight) {
        $('._header').removeClass('nav-down').addClass('nav-up');
    } else {
        if (st + $(window).height() < $(document).height()) {
            $('._header').removeClass('nav-up').addClass('nav-down');
        }
        if (st == 0) {
            $('._header').removeClass('nav-down');
        }
    }
    lastScrollTop = st;
}
function closeMenu() {
    $(".mm-close").trigger("click");
}

function checkDate(start_date, end_date) {
    var _start_date = start_date.split("-");
    var _end_date = end_date.split("-");

    var _m_start_date = _start_date[2].split(" ");
    var _m_end_date = _end_date[2].split(" ");

    var fromDate = (new Date( _start_date[0], _start_date[1], _m_start_date[0], 0, 0, 0, 0 )).getTime();
    var toDate = (new Date( _end_date[0], _end_date[1], _m_end_date[0], 0, 0, 0, 0 )).getTime();

    if(toDate < fromDate) {
        return false;
    }
    return true;
}

function submitDel() {
    $('.modal-footer').hide();
    $('.modal-body').html('Waiting...');
}

function searchSubmit(e) {
    if (e.keyCode == 13) {
        submitForm();
    }
}