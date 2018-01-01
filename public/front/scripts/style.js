
$(".dropdown-2").click(function () {
    $(".table").fadeToggle().css({
        "z-index": "99"
    });
    $(".big-overlay").toggleClass("z-big-overlay");
});

$("#search-field").keyup(function(){
        var search_field=$("#search-field").val();
        var developers=$('#developers').is(':checked');
        var properties=$('#properties').is(':checked');
        var brokers=$('#brokers').is(':checked');
        var all_website=$('#all-the-website').is(':checked');
       var url="/search/name";
       $.ajax({

            url: url,
            data: "search_field="+search_field+"&developers="+developers+
                    "&properties="+properties+"&brokers="+brokers+"&all_website="+all_website,
            success: function (msg) {

                $(".search-result").html(msg);
                

            }
        });
    });






// $(document).ready(function () {
//     $('.close').click(function () {
//         $(this).parent().fadeOut()
//         if ($('.big-overlay').css('display', 'block')) {
//             $('.big-overlay').hide()
//         }
//     })
//     windowWidth = $(window).width()
//     if (windowWidth = 1023) {

//     }
// })








$('.header-left-bottom ul li').click(function () {
    $(this).addClass('active-nav');
    $(this).siblings().removeClass('active-nav')
})

$(document).ready(function () {
    var windowHeight = $('body').height()
    $('.big-overlay').css('height', windowHeight)
})

//////////////pro service afix
$(document).ready(function () {
    var windowWidth = $(window).width()
    if (windowWidth > 1024) {
        $('.dock').affix({
            offset: {
                top: 1400,
            }
        })
    }
})






$('.big-overlay').click(function () {
    if ($('.table2').css('z-index', '2')) {
        $('.table2').hide('fade');
    }
    $('.big-overlay').parent('section').attr("hidden", "hidden");
    $('.big-overlay').next('div').hide('slide');
    $('.big-overlay').fadeToggle()
    $('.side-bar-item').css('background-color','#121420');
});




/////////////////////////// slider range
$(function () {
    $("#slider-range").slider({
        range: true,
        min: 1,
        max: 100,
        values: [10, 90],
        slide: function (event, ui) {
            $("#min-amount").val(ui.values[0] + "M");
            $("#max-amount").val(+ui.values[1] + "M");
        }
    });
    $("#min-amount").val($("#slider-range").slider("values", 0) + "M");
    $("#max-amount").val($("#slider-range").slider("values", 1) + "M");
});



/////////////////////////// slider range
$(function () {
    $("#slider-range-s").slider({
        range: true,
        min: 1,
        max: 100,
        values: [10, 90],
        slide: function (event, ui) {
            $("#min-amount-s").val(ui.values[0] + "M");
            $("#max-amount-s").val(+ui.values[1] + "M");
        }
    });
    $("#min-amount-s").val($("#slider-range-s").slider("values", 0) + "M");
    $("#max-amount-s").val($("#slider-range-s").slider("values", 1) + "M");
});



//////////responsive menue header btn
$(document).ready(function () {
    $('#nav-icon4').click(function () {
        $(this).toggleClass('open');
    });
});

//////menu btn
$(".menu-btn").click(function () {
    $(".responsive-menu").animate({
        'width': 'toggle'
    });
});



////////////////////responsive  side-bar ///////////////////
$(".filter-responsive").click(function () {
    $(".filter-holder").show();
});
$(".close").click(function () {
    $(".filter-holder").fadeOut();
});

$(".search-responsive").click(function () {
    $(".search-holder").show();
});
$(".close").click(function () {
    $(".search-holder").fadeOut();
});


$(".calc-responsive").click(function () {
    $(".calc-holder").show();
});
$(".close").click(function () {
    $(".calc-holder").fadeOut();
});

$("#pro-sevices").click(function () {
    $(".table-holder").fadeIn();
});






//////////////////////////////////////side-bar  icons/////////////////////////////////
$('.filter').click(function () {
    if ($('#filteration').attr('hidden')) {
        $('section#filteration').removeAttr('hidden');
        $('.big-overlay').css({
            'z-index': '2',
            'display': 'block',
            'left': '0'
        });
        $('.filter').css({
            'z-index': '5',
            'background-color': '#dc3f4d'
        });
        $('.side-bar-item-1').css({
            'z-index': '9',
        });
        $('.filter-list').css({
            'z-index': '3'
        });
        $('#filteration').removeAttr("hidden");
        $('.filter-list').show('slide');
    } else if ($('#filteration').attr("hidden", "hidden")) {
        $('.filter-list').hide('slide');
        $('.big-overlay').css({
            'z-index': '-4'
        });
        $('.filter').css({
            'z-index': '0',
            'position': 'relative',
            'background-color': '#121420'
        });
        $('.filter-list').css({
            'z-index': '0'
        });
        $("#filteration").attr("hidden");
    }
});
// Hide Filter menu
$('.header-container a').click(function () {
    $('.filter-list').hide('slide');
    $('.big-overlay').css({
        'z-index': '-4'
    });
    $('.filter').css({
        'z-index': '0',
        'background-color': '#121420'
    });
    $('.filter-list').css({
        'z-index': '0'
    });
    if ($('.filter-list').css('display', 'none')) {
        $("#filteration").attr("hidden", "hidden");
    }
});




// Search Menu Interactivity
$('.search').click(function () {
    if ($('#search').attr('hidden')) {
        $('#search').removeAttr('hidden');
        $('.big-overlay').css({
            'z-index': '2',
            'display': 'block'
        });
        $('.search').css({
            'z-index': '5',
            'background-color': '#dc3f4d'
        });
        $('.searching').css({
            'z-index': '3',
        });
        $('.searching').show('slide');
        $('#search').removeAttr('hidden');
    } else if ($('#search').attr('hidden', 'hidden')) {
        $('.searching').hide('slide');
        $('.big-overlay').css({
            'z-index': '-4'
        }).fadeToggle();
        $('.search').css({
            'z-index': '0',
            'background-color': '#121420'
        });
        $('.searching').css({
            'z-index': '0'
        });
        $("#search").attr("hidden");
    }
});
// Hide Search Menu
$('.search-container a').click(function () {
    $('.searching').hide('slide');
    $('.big-overlay').css({
        'z-index': '-4'
    }).fadeToggle();
    $('.search').css({
        'z-index': '0',
        'background-color': '#121420'
    });
    $('.searching').css({
        'z-index': '0'
    });
    if ($('.seaching').css('display', 'none')) {
        $("#search").attr("hidden", "hidden");
    }
});


/////////////////// calculator menu interactivity
$('.calc').click(function () {
    if ($('#calculator').attr('hidden')) {
        $('section#calculator').removeAttr('hidden');
        $('.big-overlay').css({
            'z-index': '2',
            'display': 'block'
        });
        $('.calc').css({
            'z-index': '5',
            'background-color': '#dc3f4d'
        });
        $('.calculator-list').css({
            'z-index': '3'
        });
        $('#calculator').removeAttr("hidden");
        $('.calculator-list').show('slide');
    } else if ($('#calculator').attr("hidden", "hidden")) {
        $('.calculator-list').hide('slide');
        $('.big-overlay').css({
            'z-index': '-4'
        });
        $('.calc').css({
            'z-index': '0',
            'background-color': '#121420'
        });
        $('.calculator-list').css({
            'z-index': '0'
        });
        $("#calculator").attr("hidden");
    }
});
// Hide calculator menu
$('.header-container a').click(function () {
    $('.filter-list').hide('slide');
    $('.big-overlay').css({
        'z-index': '-4'
    });
    $('.calc').css({
        'z-index': '0',
        'background-color': '#121420'
    });
    $('.calculator-list').css({
        'z-index': '0'
    });
    if ($('.calculator-list').css('display', 'none')) {
        $("#calculator").attr("hidden", "hidden");
    }
});




////////////// Search Bar home page 
$('#search_icon').on('click', function () {
    $(this).fadeOut('fast');
    $('#properity_search').fadeIn('fast');
});
$(document).click(function (e) {
    if (e.target.className == 'icon-search') {
        return false;
    } else if (e.target.className == 'search-input-custom') {
        return false;
    } else {
        $('#properity_search').fadeOut('fast');
        $('#search_icon').fadeIn('fast');
    }

    if (e.target.className == 'table') {
        return false;
    } else if (e.target.className == 'dropdown-toggle') {
        return false;
    } else {
        $('.table').fadeOut('fast');
        $(".big-overlay").removeClass("z-big-overlay");
    }
})

////// class active for language
$('.language').click(function () {
    $(this).addClass('active-lang');
    $(this).siblings().removeClass('active-lang')
})


$('.pagination').click(function () {
    $(this).addClass('active-pagination');
    $(this).siblings().removeClass('active-pagination')
})


//////add property upload img
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        var icon = $(input).siblings('i')

        reader.onload = function (e) {
            $(input).parents('.img-holder').find('img').attr('src', e.target.result);
            $(input).siblings('i').show()
            console.log()
        }
        icon.click(function () {
            console.log('clicked')
            $(this).parents('.img-holder').find('img').attr('src', '')
            $(this).hide()
        })
        reader.readAsDataURL(input.files[0]);
    } else {
        $(input).parents('.img-holder').find('img').attr('src', '/assets/no_preview.png');
    }
}
$('.inputfile').on('change', function (e) {
    readURL(this);
})
/////////////contact the seller
$(".contact-the-seller-h").click(function () {
    $(".seller-form").slideToggle();
});
$("#close-seller").click(function () {
    $(".seller-form").slideUp();
});
$("#send-seller-message").click(function () {
    $(".contact-the-celler").slideToggle();
    $(".contact-the-celler-form").slideToggle();
    $(".thanks-message").css('display', 'block');
});

////////////sodick follow deopdown
// $('a#follow_').click(function (e) {
//     if ($(this).parents('.dropdown.open')) {
//         e.stopPropagation();
//     }
//     $(this).parents('.dropdown').addClass('open');
//     $(this).addClass('followed');
//     $('#followed').show('fade');
// })


$("#follow_").click(function () {
    $(this).css({ 'background-color': '#39c11a' });

    let text = $(this).children("a").find('.custom-follow').html();

    if (text == "follow") {
        $(this).children("a").find('.custom-follow').html('unfollow');
        $("#followed").show();
        $(".follow").css({ 'display': 'flex' });
        $(".border-ball").addClass("custum-span");
    } else {
        $(this).children("a").find('.custom-follow').html('follow');
        $("#followed").hide();
        $(".follow").css({ 'display': 'none' });
        $(".border-ball").removeClass("custum-span");
    }
    $(this).parents('.dropdown').addClass('open');
    $(this).addClass('followed');
    $('#followed').show('fade');
})






////////// favorite property function init red heart
$(document).ready(function () {
    var liked = [];
    var heart = $('.like');
    var likedProp = $(this).hasClass('liked');
    heart.click(function () {
        if ($(this).hasClass('liked')) {
            $(this).removeClass('liked');
            liked.splice($(this));
        } else {
            $(this).addClass('liked');
            liked.push($(this));
        }
    })
})

//////////////counter in add property
$('.counter').on('click', function (e) {
    const target = e.target.className;
    if (target == 'counter-minus btn btn-primary') {
        let input = $(this).children('input');
        let inputValue = Number($(this).children('input').val());
        inputValue--;
        if (inputValue <= 0) {
            inputValue = 0;
        }
        input.val(inputValue);

        $(this).children('.current-value').html(input.val())
    }
    if (target == 'counter-plus btn btn-primary') {
        let input = $(this).children('input');
        let inputValue = Number($(this).children('input').val());
        inputValue++;
        if (inputValue <= 0) {
            inputValue = 0;
        }
        input.val(inputValue);
        $(this).children('.current-value').html(input.val())
    }
})

////////// open close message
$(".open-message").click(function () {
    $(this).closest('.min-container').find(".messaging").slideToggle();
    $(this).closest('.min-container').find(".open-message").css({
        'display': 'none'
    });
    $(this).closest('.min-container').find(".close-message").css({
        'display': 'block'
    });
    $(this).closest('.min-container').find(".min").css({
        'background-color': '#fff'
    })
});
$(".close-message").click(function () {
    $(this).closest('.min-container').find(".messaging").slideUp();
    $(this).closest('.min-container').find(".open-message").css({
        'display': 'block'
    });
    $(this).closest('.min-container').find(".close-message").css({
        'display': 'none'
    });
    $(this).closest('.min-container').find(".min").css({
        'background-color': '#eaeaea'
    })
});

/// select all let all checkbox checked
$("#checkAll").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
});

//delete  sellected message
$('#delete-messager').click(function () {
    $('.checkbox3:checked').parents('.message-left').remove()
})



/////follow the brokers
$(".follow-broker").click(function () {
    let title = $(this).parents('.parent-dev').find('.developer-title').children('h2').html();

    $(this).children("a").css({
        'background-color': ' #39c11a'
    }).empty().append("<span> </span>" + "You are following " + title + "<i class='icon-search'></i>");
});






/////follow the developers
$(".follow-broker").click(function () {
    let title = $(this).parents('.parent-dev').find('.designer-title').children('h2').html();

    $(this).children("a").css({
        'background-color': ' #39c11a'
    }).empty().append("<span> </span>" + "You are following " + title + "<i class='icon-search'></i>");
});


/////follow the designer
$(".follow-broker").click(function () {
    let title = $(this).parents('.designer-dev').find('.broker-title').children('h2').html();

    $(this).children("a").css({
        'background-color': ' #39c11a'
    }).empty().append("<span> </span>" + "You are following " + title + "<i class='icon-search'></i>");
});


/// select all let all checkbox checked
$("#all-the-website").on('click', function () {
    $(".search-checked").prop("checked", false)
});

$(".search-checked").on('click', function () {
    $("#all-the-website").prop("checked", false)
});


$("#all-the-website-s").on('click', function () {
    $(".search-checked").prop("checked", false)
});

$(".search-checked").on('click', function () {
    $("#all-the-website-s").prop("checked", false)
});


//////mail box taps 


$("#inbox").click(function () {
    $(this).addClass('active-box');
    $(this).siblings().removeClass('active-box');
    $(".main-inbox").fadeIn(800);
    $(".main-sent-mail").fadeOut(0);
    $(".main-trash").fadeOut(0);
});

$("#sent-mail").click(function () {
    $(this).addClass('active-box');
    $(this).siblings().removeClass('active-box');
    $(".main-sent-mail").fadeIn(800);
    $(".main-inbox").fadeOut(0);
    $(".main-trash").fadeOut(0);
});

$("#trash").click(function () {
    $(this).addClass('active-box');
    $(this).siblings().removeClass('active-box');
    $(".main-trash").fadeIn(800);
    $(".main-sent-mail").fadeOut(0);
    $(".main-inbox").fadeOut(0);
});


$('.message-left').click(function () {
    $(this).addClass('active-message');
    $(this).siblings().removeClass('active-message')
});





//////////////////map modal//////////////////
var map;
var defaultLat = 30.0074;
var defaultLng = 31.4913;
function initMap(lat = 30.0074, lng = 31.4913) {
    var defaultLat = 30.0074;
    var defaultLng = 31.4913;

    var latLng = { lat: Number(defaultLat), lng: Number(defaultLng) };
    map = new google.maps.Map(document.getElementById('map2'), {
        center: latLng,
        zoom: 10,
        mapTypeId: 'terrain',
        mapTypeControl: true,
        zoomControl: true,
        fullscreenControl: true
    });
    var marker = new google.maps.Marker({
        position: { lat: Number(defaultLat), lng: Number(defaultLng) },
        map: map,
        draggable: true,
    });
    google.maps.event.addListener(marker, 'dragend', function (event) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'latLng': {
                lat: Number(event.latLng.lat()),
                lng: Number(event.latLng.lng())
            }
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    document.getElementById('input_search').value = results[0].formatted_address;
                    $('#select_position').on('click', function () {
                        $('#txtAddress').val(results[0].formatted_address);
                        $("#myModal2").modal('hide');

                    });
                    $('#input_search').val(results[0].formatted_address)

                } else {
                    alert('No results found');
                }
            } else {
                alert('Some Thing Wlanguage=arrong');
            }
        });

        $('#addressLat').val(event.latLng.lat());
        $('#addressLang').val(event.latLng.lng());
        console.log('=== event lat up ====', event.latLng.lat());
    });

    console.log(map)
}
$(document).ready(function () {
    $('#myModal2').on('shown.bs.modal', function () {
        google.maps.event.trigger(map, "resize");
        map.setCenter(new google.maps.LatLng(defaultLat, defaultLng));

    });

    function initNewMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {
                lat: 30.0074,
                lng: 31.4913
            },
            mapTypeId: 'hybrid'
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 30.0074,
                lng: 31.4913
            },
            map: map,
        });
    }

    initNewMap();
    
//    if($('.min-container').length >= 0) {
//        $('.min-container').children('.messaging').css({
//            "display" : "block"
//        });
//    }

});


//////////////// init a map

// ///////////message popup
$("#have-message").click(function () {
    $(".masseage-holder").fadeToggle();
    $(".big-overlay").fadeToggle().css({ 'z-index': '1' });
});

$("#messg-s").click(function () {
    $(".masseage-holder").fadeToggle();
    $(".big-overlay").fadeToggle().css({ 'z-index': '1' });
});


$('.big-overlay').click(function () {
    if ($('.masseage-holder').css('z-index', '2')) {
        $('.masseage-holder').hide('fade');
    }
});


/////have no message
$("#messg").click(function () {
    $(".have-no-message").fadeToggle();
    $(".big-overlay").fadeToggle().css({ 'z-index': '1' });
});

$("#messg-s").click(function () {
    $(".have-no-message").fadeToggle();
    $(".big-overlay").fadeToggle().css({ 'z-index': '1' });
});


$('.big-overlay').click(function () {
    if ($('.have-no-message').css('z-index', '2')) {
        $('.have-no-message').hide('fade');
    }
});




/////////////////////////////////

$("#edit-your-list").click(function () {
    $(this).css({ 'background-color': ' #2cc4cd', 'color': '#000' });
    $(".delete-properties").css({ 'display': 'flex' });
    $(".delete-property").show();
});






$(".company-arrow").click(function () {
    $(this).parents('.property-sq').find(".designer-detalis").fadeToggle();
});
//////////developers   taps////////////////
$("#sodic-projects").click(function () {
    $(".sodic-projects").fadeIn();
    $(".sodic-properties").fadeOut();
    $(".sodic-profile").fadeOut();
    $(".sodic-project-header").css({ 'display': 'flex' });
    $(".sodic-properties-header").css({ 'display': 'none' });
    $(".sodic-profile-header").css({ 'display': 'none' });

});

$("#sodic-properties").click(function () {
    $(".sodic-projects").fadeOut();
    $(".sodic-properties").fadeIn();
    $(".sodic-profile").fadeOut();
    $(".sodic-project-header").css({ 'display': 'none' });
    $(".sodic-properties-header").css({ 'display': 'flex' });
    $(".sodic-profile-header").css({ 'display': 'none' });


});

$("#sodic-profile").click(function () {
    $(".sodic-profile").fadeIn();
    $(".sodic-projects").fadeOut();
    $(".sodic-properties").fadeOut();
    $(".sodic-project-header").css({ 'display': 'none' });
    $(".sodic-properties-header").css({ 'display': 'none' });
    $(".sodic-profile-header").css({ 'display': 'flex' });


});


$('#sodic-projects').click(function () {
    $(this).addClass(' active-properties');
    $(this).siblings().removeClass(' active-properties')
});

$('#sodic-properties').click(function () {
    $(this).addClass(' active-properties');
    $(this).siblings().removeClass(' active-properties')
});

$('#sodic-profile').click(function () {
    $(this).addClass(' active-properties');
    $(this).siblings().removeClass(' active-properties')
});




/// Highlight sidebar items
// $(document).ready(function () {
//     var baseColor = '#121420',
//         redColor = '#dc3f4d',
//         sideBar = $('.side-bar');
//     sideBar.click(function (e) {
//         var toggledEvent = e.target.id;
//         console.log(toggledEvent)
//         switch (toggledEvent) {
//             case 'show-filteration':
//                 $(toggledEvent).css({ 'z-index': '5', 'background-color': redColor });
//                 $('.big-overlay').toggle().css('z-index', '2');
//                 $('#filteration').toggle();
//                 $('.filter-list').css('z-index', '3');
//                 break;
//             case 'show-search':
//                 $(toggledEvent).css({ 'z-index': '5', 'background-color': redColor });
//                 $('.big-overlay').show().css('z-index', '2');
//                 $('#search').show().css('z-index', '3');
//                 break;
//             case 'show-calc':
//                 $(toggledEvent).css({ 'z-index': '5', 'background-color': redColor });
//                 $('.big-overlay').show().css('z-index', '2');
//                 $('#calculator').show().css('z-index', '3');
//                 break;

//             default:
//                 return
//         }
//     })
// })




$("#radio-brokers").click(function(){
    $(".radio-brokers").fadeIn();
    $(".radio-developers").fadeOut();
    $(".radio-designer").fadeOut();
});


$("#radio-designer").click(function(){
    $(".radio-brokers").fadeOut();
    $(".radio-developers").fadeOut();
    $(".radio-designer").fadeIn();
});


$("#radio-developers").click(function(){
    $(".radio-brokers").fadeOut();
    $(".radio-developers").fadeIn();
    $(".radio-designer").fadeOut();
});











$(".your-profile").click(function(){
    $(".profile-profile").fadeIn();
    $(".profile-your-list").fadeOut();
    $(".profile-favorities").fadeOut();
    $(".profile-properties").fadeOut();

    $(".my-prof-header").css({'display':'flex'});
    $(".my-folloing-header").css({'display':'none'});
    $(".my-fav-header").css({'display':'none'});
    $(".my-pro-header").css({'display':'none'});
});



$(".my-properties").click(function(){
    $(".profile-profile").fadeOut();
    $(".profile-your-list").fadeOut();
    $(".profile-favorities").fadeOut();
    $(".profile-properties").fadeIn();

    $(".my-prof-header").css({'display':'none'});
    $(".my-folloing-header").css({'display':'none'});
    $(".my-fav-header").css({'display':'none'});
    $(".my-pro-header").css({'display':'flex'});
});



$(".your-favoriteies").click(function(){
    $(".profile-profile").fadeOut();
    $(".profile-your-list").fadeOut();
    $(".profile-favorities").fadeIn();
    $(".profile-properties").fadeOut();

    $(".my-prof-header").css({'display':'none'});
    $(".my-folloing-header").css({'display':'none'});
    $(".my-fav-header").css({'display':'flex'});
    $(".my-pro-header").css({'display':'none'});
});



$(".following-list").click(function(){
    $(".profile-profile").fadeOut();
    $(".profile-your-list").fadeIn();
    $(".profile-favorities").fadeOut();
    $(".profile-properties").fadeOut();

    $(".my-prof-header").css({'display':'none'});
    $(".my-folloing-header").css({'display':'flex'});
    $(".my-fav-header").css({'display':'none'});
    $(".my-pro-header").css({'display':'none'});
});



$('.your-profile').click(function () {
    $(this).addClass(' active-properties');
    $(this).siblings().removeClass(' active-properties')
});

$('.my-properties').click(function () {
    $(this).addClass(' active-properties');
    $(this).siblings().removeClass(' active-properties')
});

$('.your-favoriteies').click(function () {
    $(this).addClass(' active-properties');
    $(this).siblings().removeClass(' active-properties')
});

$('.following-list').click(function () {
    $(this).addClass(' active-properties');
    $(this).siblings().removeClass(' active-properties')
});











