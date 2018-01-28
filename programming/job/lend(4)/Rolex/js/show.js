/**
 * Created by anna on 06.10.17.
 */

if (screen.width < 481)  {
    $("#ladiesUrl[href]").attr("href", "#ladiesWatchForMbVersion");
    $("#MenSUrl[href]").attr("href", "#MenSWatchForMbVersion");
}
var model = '<div class="form-group model"><select required type="text" id="model"><option>ROLEX DAYTONA GOLD</option><option>ROLEX DATEJUST</option></select></div>';
var model1 = '<div class="form-group model"><select required type="text" id="model"><option>ROLEX DATEJUST</option><option>ROLEX DAYTONA GOLD</option></select></div>';
$('form input[name=phone]').closest('.form-group').after(model);
$('form input[name=phoneFOrLadies]').closest('.form-group1').after(model1);

var imgHead = ['img/bg-banner.png', 'img/2bg-banner.png'],
    i=1;
function csaHead(){
    if(i > (imgHead.length-1)){
        $('.back-containerForHero').animate({'opacity':'0'},400,function(){
            i=1;
            $('.back-containerForHero').css({'background':'url('+imgHead[0]+') no-repeat 50% 100%'});
            $('.back-containerForHero').css({'background-size' : 'cover'});
        });
        $('.back-containerForHero').animate({'opacity':'1'},400);
    }else{
        $('.back-containerForHero').animate({'opacity':'0'},400,function(){
            $('.back-containerForHero').css({'background':'url('+imgHead[i]+') no-repeat 50% 100%'});
            $('.back-containerForHero').css({'background-size' : 'cover'});
            i++;
        });
        $('.back-containerForHero').animate({'opacity':'1'},400);
    }
}
var intervalCsaHead = setInterval(csaHead,8000);

var dropdownMenu=document.getElementById("dropdown-menu");
var mdBefore=document.getElementById("md-before");
var mdAfter=document.getElementById("md-after");
var menu =document.getElementById("menu");

window.onload = function () {
  dropdownMenu.style.display = 'none';
  mdAfter.style.zIndex = '20000';
  mdBefore.style.zIndex = '20001';
};

function hiddenMenu (i) {
    if (i == 2 && dropdownMenu.style.display == 'none') {
        dropdownMenu.style.display = 'block';
        mdAfter.style.zIndex = '20001';
        mdBefore.style.zIndex= '20000';
    }
    if (i == 1 && dropdownMenu.style.display == 'block') {
        dropdownMenu.style.display = 'none';
        mdAfter.style.zIndex = '20000';
        mdBefore.style.zIndex = '20001';
    }
    if (i == 0   && dropdownMenu.style.display == 'block') {
        dropdownMenu.style.display = 'none';
        mdAfter.style.zIndex = '20000';
        mdBefore.style.zIndex= '20001';
    }
}