$(document).foundation();


$(function () {
    var showClass = 'show';

    $('input').on('checkval', function () {
        var label = $(this).prev('label');
        if(this.value !== '') {
            label.addClass(showClass);
        } else {
            label.removeClass(showClass);
        }
    }).on('keyup', function () {
        $(this).trigger('checkval');
    });
});

function showHideForget() {
    var x = document.getElementById("a-forgot");
    var y = document.getElementById("forgot");

    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}

$('.slider').on('changed.zf.slider', function() {


    var range = $(this).children('.slider-handle').attr('aria-valuenow');
    var finaLevel;

    range = range/3;

    if (isNaN(range)){
        range = 10;
    }

    if(range===10){
        finaLevel = "baby";
    }

    else if (range === 20) {

        finaLevel = "regular";
    }

    else if (range === 30)
    {
        finaLevel ="expert"
    }




    $("#level").attr("src","../../webroot/images/"+finaLevel+".png");
    $("#plevel").html(finaLevel);


    // console.log(level);
   // level.innerHTML=finaLevel;
});

function hidetext(){

}