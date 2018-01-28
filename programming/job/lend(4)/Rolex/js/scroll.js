/**
 * Created by anna on 04.10.17.
 */
$("body").on("click",".menu a",function(){var e=$($(this).attr("href")).offset().top;return $("html,body").animate({scrollTop:e - 50 + 'vw'},800),!1});
$("body").on("click",".dropdown-menu a",function(){var e=$($(this).attr("href")).offset().top;return $("html,body").animate({scrollTop:e - 40 + 'vw'},800),!1});
$("body").on("click",".hero a",function(){var e=$($(this).attr("href")).offset().top;return $("html,body").animate({scrollTop:e - 50 + 'vw'},800),!1});
