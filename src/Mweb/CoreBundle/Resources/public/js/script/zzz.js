$(document).ready(function () {

    $('#section-info').parallax("70% 50%", 0.45);
    $('#section-festival').parallax("70%", 0.45);


    $(window).scroll(function () {
        headerPosition();
    });

    $(window).resize(function () {
        borderSize();
        headerPosition();
    })

    headerPosition();
    mobileMenu();
    manageMenu();
    borderSize();
    contentSlideManage();



    $("body").click(function(){
        vibration()
    })
});
var active = false;
function vibration(){


    setTimeout('revert(true)', 0);
    setTimeout('revert(false)', 200);
    setTimeout('revert(true)', 500);
    if(active){
        setTimeout('revert(false)', 800);
        active = false;
    }else{
        active=true;
    }




}
function revert(mod){
    if(mod){
        $('body').addClass('revert');
    }else{
        $('body').removeClass('revert');

    }
}

function manageMenu(){0
    //Gestion des ancres du menu
    $('#menu a').click(function(){
        scrollTo($(this).attr('href').substr(1))
    });

    //si ancre existe on scroll jusqu'a la section demandé
    var hash = window.location.href.split('#')[1];
    if(hash)
    {
        scrollTo(hash);
    }

    // $(window).scrollStopped(function(){
    //     $('section').each(function(i,section){
    //         log($(section).position().top-100);
    //         log($(window).scrollTop());
    //         if($(section).position().top-150 <= $(window).scrollTop()){
    //             log($(section).attr('id').substr(8));
    //             showScrollPosition($(section).attr('id').substr(8));
    //         }
    //     });
    // });
}
//
function scrollTo(hash){
    if($('#section-'+hash).length) {
        posTop = $('#section-' + hash).position().top;
        posTop = posTop -165;
        $('html,body').animate({scrollTop: posTop}, '800');
        showScrollPosition(hash);
    }
}

//Higlight de la section survolé dans le menu
function showScrollPosition(hash){
    $('#menu a.active').removeClass('active');
    $('#menu a[href="#'+hash+'"]').addClass('active');
}


function headerPosition() {
    $('#section-info').height($(window).height()-150);

    if($(window).width()>1400) {
        if ($(window).scrollTop() > 0) {
            $('header').addClass('scroll-active');
        } else {
            $('header').removeClass('scroll-active');
        }
    }else{
        $('header').addClass('scroll-active');
    }
}


function mobileMenu() {
    $('button.mobile-menu').click(function () {
        if ($('#menu-wrap').is(':visible')) {
            $('#menu-wrap').hide();
        } else {
            $('#menu-wrap').show();
        }

    })

    if($('button.mobile-menu').is(':visible')){
        $('#menu a').click(function () {
            $('#menu-wrap').hide();
        })
    }
}

function borderSize(){
    $('.back-top-left, .back-bottom-left ').css('width', ($(window).width() - $('.container-fluid').width())/2 - 45);
    $('.back-top-right, .back-bottom-right').css('width', ($(window).width() - $('.container-fluid').width())/2 - 45);
    $('#contact-border').height($('#contact-border').parents('.content').height());
}



var slidePos = 0;

function contentSlideManage(){
    $('.slider-arrow.left').click(function () {contentSlide(-1)});
    $('.slider-arrow.right').click(function () {contentSlide(1)});

}
function contentSlide(side){
    slidePos = slidePos + side;
    if(slidePos>=$('.slider li.wrap').length)slidePos=0;
    $('.slider li.wrap').hide();
    $('.slider li.wrap:eq('+slidePos+')').fadeIn(300);


}
/*

var promise='';
var lines='';
$(window).load(function(){
    $('#console .text').hide();

     var lines = $('#console .text').val().split('\n');


    var promise = new Q();

    promise = promise.then(function () {
        lines.forEach(function (item, i) {


            if (item[0] == '%') {

                promise = promise.then(function () {
                    return addPrompt('root', 'circasimic');
                })

                promise = promise.then(function () {
                    return addInput(item.substr(1));
                })


            } else if (item[0] == "#") {
                promise = promise.then(function () {
                        return addPrompt('', false);
                    }
                )
                promise = promise.then(function () {
                    return addInput(item.substr(1));
                })
            }
            else {
                promise = promise.then(function () {
                    return addOutput(item);
                })
            }
            if(i>=15){
                promise = promise.then(function () {
                    vibration();
                });
            }

        })
    })
    promise.done();



    function getPrompt(usr, domain) {
        if (domain != false) {
            return usr + '@' + domain + ' %';
        } else {
            return usr;
        }

    }

    function addOutput(s) {
        $('<div>').text(s).appendTo(wnd);
        return Q.delay(100);
//  return addPrompt();
    }

    function addInput(s) {
        var l = $('.prompt:last');
        var e = $('<span>').addClass('cmd').appendTo(l);

        return addLettersRecursive(e, s);
    }

    function addPrompt(text, domain) {
        var l = $('<div>').text(getPrompt(text, domain)).addClass('prompt').appendTo(wnd);
        return Q.delay(10);
    }

    function addLettersRecursive(container, s) {
        container.append(s.charAt(0)); // dangerous :(
        var row_complete = Q.defer();
        Q.delay(100).then(function () {
            if (s.length <= 1) {
                row_complete.resolve();
            }
            addLettersRecursive(container, s.substr(1)).then(function () {
                row_complete.resolve();
            })
        });
        return row_complete.promise;
    }
});*/
