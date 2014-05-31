
$(document).ready(function() {

    $("#trivia").find("div.preguntas:last").addClass("ultima");
    
    setInterval( listener , 1000 );


});

function empezar() {
    $('#iniciar').hide();
    $('#cuestionario').show("slow", function() {
        timer();
    });
}
function ranking() {
    $('#mensaje').hide("fast", function() {

        $("#seccion-trivia").css('background-image', 'url(../bundles/celmediasite/img/BG/IMG-BG-trivia.jpg)');
        $("#seccion-trivia").css('background-color', 'transparent');

    });
    $('#ranking').show();
}
function continuar() {
    $("#mensaje-continuar").hide();


    $('.preguntas:hidden:not(.contestada):eq(0)').show();
    $("#cuestionario").show("fast", function() {
        $("#seccion-trivia").css('background-image', 'url(../bundles/celmediasite/img/BG/IMG-BG-trivia.jpg)');
        $("#seccion-trivia").css('background-color', 'transparent');
    });
}


function empezar() {
    $('#iniciar').hide();
    $('#cuestionario').show("", function() {
        timer();
    });
}
function ranking() {
    $('#mensaje').hide("fast", function() {

        $("#seccion-trivia").css('background-image', 'url(../bundles/celmediasite/img/BG/IMG-BG-trivia.jpg)');
        $("#seccion-trivia").css('background-color', 'transparent');

    });
    $('#ranking').show();
}
function regresar() {
    $("#mensaje-erroneo").hide();
    $("#cuestionario").show("fast", function() {
        $("#seccion-trivia").css('background-image', 'url(../bundles/celmediasite/img/BG/IMG-BG-trivia.jpg)');
        $("#seccion-trivia").css('background-color', 'transparent');
    });
}

var totalSeconds = 121,
        timer_handle;

function setTime() {
    --totalSeconds;
    document.getElementById("seconds").innerHTML = pad(totalSeconds % 60);
    document.getElementById("minutes").innerHTML = pad(parseInt(totalSeconds / 60, 10));
}

function pad(val) {
    var valString = val + "";
    if (valString.length < 2) {
        return "0" + valString;
    } else {
        return valString;
    }
}

function timer() {
    if (!timer_handle) {
        timer_handle = setInterval(setTime, 1000);
    }
}

function clearTimer() {
    if (timer_handle) {
        clearInterval(timer_handle);
    }
    // alert(document.getElementById("minutes").innerHTML + ':' + document.getElementById("seconds").innerHTML);
}
