function calcSize(){var e=$(window).outerHeight(),t=$(window).outerWidth();$("#hero").css({"min-height":e}),$(".off-canvas").css({height:e})}function showMeTooltip(){var e=window.location.toString(),t="https://twitter.com/intent/tweet?text="+getTextToShare()+"&via="+twitterAccount+"&url="+e;$("#MBLSharetip").show(),$("#MBLSharetip").animate({opacity:1},30),$("#sendToTwitter").attr("href",t)}function getTextToShare(){return shareTxt="",window.getSelection?(shareTxt=window.getSelection(),generateTooltipPosition()):document.getSelection&&(shareTxt=document.getSelection(),generateTooltipPosition()),shareTxt}function generateTooltipPosition(){var e=window.getSelection&&window.getSelection();e&&e.rangeCount>0&&(range=e.getRangeAt(0),pos=$(window).scrollTop(),selection_text=e.toString(),rect=range.getBoundingClientRect(),$("#MBLSharetip").css({top:rect.top+pos-60-32+"px",left:rect.left+rect.width/2+"px"}))}$(document).foundation(),calcSize(),$(window).resize(function(){calcSize()}),$("#further").on("click",function(){return $("html, body").animate({scrollTop:$($(this).attr("href")).offset().top},1e3),!1}),$(".hamburger").click(function(e){return e.preventDefault(),$(this).toggleClass("open"),$(".off-canvas").toggleClass("open").toggleClass("hidden"),$("#hero").toggleClass("open"),$(".sliding").toggleClass("open"),!1}),$("#hero.open").find(".row").click(function(){return $(this).parents("#hero").toggleClass("open"),$(this).parents("#hero").find(".hamburger").toggleClass("open"),$(".off-canvas").toggleClass("open").toggleClass("hidden"),!1}),$(document).scroll(function(){var e=$("#hero").outerHeight(),t=$(".image-wrapper").outerHeight();$(document).scrollTop()>=e/2?$("#small-hero").addClass("fixed"):$("#small-hero").removeClass("fixed"),$(document).scrollTop()>=t?($("#fixed-article-header").addClass("fixed"),$(".sliding-share").addClass("appeared")):($("#fixed-article-header").removeClass("fixed"),$(".sliding-share").removeClass("appeared"))}),$(document).ready(function(){textToShare="",$(document).mousemove(function(e){generateTooltipPosition()})}),$(".icon-search").click(function(){$(".search-form").addClass("active")}),$(document).mouseup(function(){$(document).mousemove(function(e){generateTooltipPosition()});var e=getTextToShare(),t=document.getElementById("MBLSharetip");""!=e&&showMeTooltip()}),$(document).click(function(){var e=getTextToShare(),t=null,o=$("#MBLSharetip").attr("title");""!=o&&(o!==t&&$("#MBLSharetip").animate({opacity:0},30),""!=e&&showMeTooltip())}),$(window).resize(function(){$("#MBLSharetip").show()&&$("#MBLSharetip").animate({opacity:0},30)});var paceOptions={ajax:!1,document:!1,eventLag:!1,elements:{selectors:["body"]}};