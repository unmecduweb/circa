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

    artistManage();

    $("body").click(function(){
        /*vibration()*/
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

function artistManage(){
    $('.filter').click(function (){
        if($(this).hasClass('selected'))$(this).removeClass('selected')
        else $(this).addClass('selected')

        $('.artist').hide().removeClass('toShow');

        $('.filter.day.selected').each(function(){
            $('.artist[data-day="'+$(this).data('filter-day')+'"]').addClass('toShow');
            $('.artist[data-allday="true"]').addClass('toShow');
            log('.artist[data-day="'+$(this).data('filter-day')+'"]');
        });
        if($('.artist.toShow').length == 0)$('.artist').addClass('toShow');

        if($('.filter.type.selected').length) {
            $('.filter.type.selected').each(function () {
                $('.artist.toShow[data-type="' + $(this).data('filter-type') + '"]').fadeIn();
                log('.artist.toShow[data-type="' + $(this).data('filter-type') + '"]');
            });
        }else{
            $('.artist.toShow').fadeIn();
        }


        if($('.filter.selected').length == 0)$('.artist').fadeIn();


    })
}
