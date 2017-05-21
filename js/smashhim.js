function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
var timer_id;
var count_evil=50;
var checkTime=60;
var final_count_evil=4;
var final_check_time=6;
intervalTimer=1000;
$(document).ready(function(){
    clearTimeout();
    callFunctionStart();
    count_evil=50;
});
function clearTimeout(){
    clearInterval(timer_id)
}
$('#how-to-play').live('click',function(){
    $('#info-div').toggle('fast','swing');
});
function callFunctionStart(){
    alertify.confirm("Are you ready to play again..?<div id='how-to-play' onclick=''>How to Play .. " +
        "<span  class='glyphicon glyphicon-info-sign'></span>" +
        " <div id='info-div'>kill " +count_evil+
        " evil smilies in " +checkTime+
        " Seconds ,Killing an non evil smiley make you lose,number of evils to kill reduces as you lose</div></div>", function (e) {
        if (e) {
                    clearTimeout();
                    timeCalculator(checkTime);
                    $('#evil').html(count_evil);
                    timer_id=setInterval(function(){
                        $.ionSound.stop("cry");
                        $('.box-container').removeClass('laugh smile cry');
                        var r1=getRandomNumber(1,5);
                        var c1=getRandomNumber(1,6);
                        var r2=getRandomNumber(1,5);
                        var c2=getRandomNumber(1,6);
                        var r3=getRandomNumber(1,5);
                        var c3=getRandomNumber(1,6);
                        var r4=getRandomNumber(1,5);
                        var c4=getRandomNumber(1,6);
                        var r5=getRandomNumber(1,5);
                        var c5=getRandomNumber(1,6);
                        $('#r'+r1+c1+' .box-container').addClass('laugh');
                        $('#r'+r3+c3+' .box-container').addClass('laugh');
                        $('#r'+r2+c2+' .box-container').addClass('smile');
                        $('#r'+r4+c4+' .box-container').addClass('smile');
                        $('#r'+r5+c5+' .box-container').addClass('laugh');
                        $('#time').html(checkTime);
                        checkTime--;
                        if(checkTime<0){
                            clearTimeout();
                            var lost_info=$('.lost-info');
                            lost_info.show();
                            if(final_check_time==6){
                                count_evil=40;
                                final_check_time=5;
                                checkTime=50;
                            }
                            else if(final_check_time==5){
                                count_evil=20;
                                checkTime=40;
                                final_check_time=4;
                            }
                            else if(final_check_time==4){
                                count_evil=15;
                                checkTime=30;
                                final_check_time=3;
                            }
                            else if(final_check_time==3){
                                count_evil=50;
                                checkTime=60;
                                final_check_time=6;
                            }
                            $('span',lost_info).html('You Lost!! Wanna try to kill '+count_evil+' evil in '+checkTime+' sec..?')
                            lost_info.removeClass('animated lightSpeedOut');
                            lost_info.addClass('animated lightSpeedIn');
                            var lost_container=$('.lost-container');
                            lost_container.show();
                            lost_container.addClass('add-z-index');
                        }
                    },intervalTimer);
            }
 });
}

function playAgain(){
    clearTimeout();
    if(final_check_time==4 || final_check_time==3){
        intervalTimer=700;
    }
    else{
        intervalTimer=1000;
    }
    callFunctionStart();
    var lost_info=$('.lost-info');
    lost_info.removeClass('animated lightSpeedIn');
    lost_info.addClass('animated lightSpeedOut');
    setTimeout(function(){
        lost_info.hide();
    },1000);
    var lost_container=$('.lost-container');
    lost_container.removeClass('add-z-index');
    lost_container.hide();
}
function callFunctionStartRestart(){
    alertify.confirm("Are you ready to play again..?", function (e) {
        if (e) {
                checkTime=60;
                final_check_time=6;
                clearTimeout();
                timeCalculator(checkTime);
                intervalTimer=1000;
                var lost_info=$('.lost-info');
                lost_info.removeClass('animated lightSpeedIn');
                lost_info.addClass('animated lightSpeedOut');
                setTimeout(function(){
                    lost_info.hide();
                },1000);
                var lost_container=$('.lost-container');
                lost_container.removeClass('add-z-index');
                lost_container.hide();
                $('#restart',lost_info).show();
                count_evil=50;
                $('#evil').html(count_evil);
                timer_id=setInterval(function(){
                    $.ionSound.stop("cry");
                    $('.box-container').removeClass('laugh smile cry');
                    var r1=getRandomNumber(1,5);
                    var c1=getRandomNumber(1,6);
                    var r2=getRandomNumber(1,5);
                    var c2=getRandomNumber(1,6);
                    var r3=getRandomNumber(1,5);
                    var c3=getRandomNumber(1,6);
                    var r4=getRandomNumber(1,5);
                    var c4=getRandomNumber(1,6);
                    var r5=getRandomNumber(1,5);
                    var c5=getRandomNumber(1,6);
                    $('#r'+r1+c1+' .box-container').addClass('laugh');
                    $('#r'+r3+c3+' .box-container').addClass('laugh');
                    $('#r'+r2+c2+' .box-container').addClass('smile');
                    $('#r'+r4+c4+' .box-container').addClass('smile');
                    $('#r'+r5+c5+' .box-container').addClass('laugh');
                    $('#time').html(checkTime);
                    if(checkTime<0){
                        clearTimeout();
                        var lost_info=$('.lost-info');
                        lost_info.show();
                        lost_info.removeClass('animated lightSpeedOut');
                        lost_info.addClass('animated lightSpeedIn');
                        var lost_container=$('.lost-container');
                        lost_container.show();
                        lost_container.addClass('add-z-index');
                    }
                },intervalTimer);
            }
    });
}

function timeCalculator(checkTime){
    setInterval(function(){
        checkTime--
    },1000);
}

$.ionSound({
    path:'music/',
    sounds: [
        "slap:",
        "cry"
    ]
});
var total_count={
    '30':'10',
    '40':'15',
    '50':'20',
    '60':'30'
}
function checkIt(that){
    var lost_info=$('.lost-info');
    lost_info.show();
    var getClass=$(that).attr('class');
    if(getClass.indexOf('smile')>=0){
        clearTimeout();
        $(that).addClass('cry')
        $.ionSound.play("cry:1.0");
        if(final_check_time==6){
            count_evil=40;
            final_check_time=5;
            checkTime=50;
        }
        else if(final_check_time==5){
            count_evil=20;
            checkTime=40;
            final_check_time=4;
        }
        else if(final_check_time==4){
            count_evil=15;
            checkTime=30;
            final_check_time=3;
        }
        else if(final_check_time==3){
            count_evil=50;
            checkTime=60;
            final_check_time=6;
        }
        $('span',lost_info).html('You Lost!! Wanna try to kill '+count_evil+' evil in '+checkTime+' sec..?')
        lost_info.removeClass('animated lightSpeedOut');
        lost_info.addClass('animated lightSpeedIn');
        var lost_container=$('.lost-container');
        lost_container.show();
        lost_container.addClass('add-z-index');
    }
    else if(getClass.indexOf('laugh')>=0){
        $(that).addClass('mad');
        setTimeout(function(){
            $('.box-container').removeClass('mad');
        },5000);
        count_evil--;
        if(count_evil<=0){
            $('span',lost_info).html('Congrats You Won');
            lost_info.removeClass('animated lightSpeedOut');
            lost_info.addClass('animated lightSpeedIn');
            var lost_container=$('.lost-container');
            lost_container.show();
            lost_container.addClass('add-z-index');
            $('#restart',lost_info).hide();
            clearTimeout();
        }
        $('#evil').html(count_evil);
        $.ionSound.play("slap:1.0");
    }
    else if(getClass.indexOf('mad')>=0){
        //do nothing
    }
}