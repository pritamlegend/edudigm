function addtocart(t,o){var e=[];let a=localStorage.getItem("list");if(console.log("temp"+a),"product"==o){if(null!=a&&""!=a&&"[]"!=a)if("course"!=(e=JSON.parse(a))[0].split(":")[1]){let a=!1;for(let i=0;i<e.length;i++)if(e[i].split(":")[0]==t&&e[i].split(":")[1]==o){a=!0;break}a||(e.push(t+":"+o+":1"),localStorage.setItem("list",JSON.stringify(e)))}else localStorage.clear(),(e=[]).push(t+":"+o+":1"),localStorage.setItem("list",JSON.stringify(e));else e.push(t+":"+o+":1"),localStorage.setItem("list",JSON.stringify(e))}else{localStorage.getItem("list");localStorage.clear(),e.push(t+":"+o+":1"),localStorage.setItem("list",JSON.stringify(e))}cartcount(),addtocartanimation()}function cartcount(){var t=localStorage.getItem("list");t&&(JSON.parse(t)&&$("#cart-data").attr("data-count",JSON.parse(localStorage.getItem("list")).length))}function addtocartanimation(){$("body").append('<div class="addtocartanimation"><p>Added To Cart</p></div>'),setTimeout(function(){$(".addtocartanimation").hide(500)},1e3)}function carteastapply(t,o,e){var a=[];localStorage.clear(),a.push(t+":"+o+":1:"+e),localStorage.setItem("list",JSON.stringify(a))}window.onload=function(){$(window).scroll(function(){$(window).scrollTop()>=100?$("nav").addClass("fixed-header"):$("nav").removeClass("fixed-header"),$(window).scrollTop()>=300?($(".floating-connector").css({position:"fixed",top:"16%"}),$(".right_bar").css({position:"fixed",top:"10%"})):($(".floating-connector").css({position:"absolute",top:"59%"}),$(".right_bar").css({position:"absolute",top:"53%"}))})},window.onload=function(){jQuery(document).ready(function(){$(".more-items").find("div").length>2&&$(".more-items").append('<div class="text-center"><a href="javascript:;" class="btn mt-5 ndbutton showMore global-box-shadow hover-shadow"></a></div>'),$(".more-items .more-card").slice(0,2).addClass("shown"),$(".more-items .more-card").not(".shown").hide(),$(".more-items .showMore").on("click",function(){$(".more-items .more-card").not(".shown").toggle(300),$(this).toggleClass("showLess")})})},window.onload=function(){var t=$("header").height(),o=$(window).height();$(".flex-container .flex-slide").height(o-t)},window.onload=function(){$(document).on("click",".thumb",function(){var t=$(this).find("img").attr("src");$(".preview img").attr("src",t)})},cartcount();var code,getUrlParameter=function(t){var o,e,a=window.location.search.substring(1).split("&");for(e=0;e<a.length;e++)if((o=a[e].split("="))[0]===t)return void 0===o[1]||decodeURIComponent(o[1])};function heightofslider(){var t=$(window).width(),o=window.innerHeight;if(t>768){var e=o-$("header").height()-$(".navigation-w3ls").height();$(".home").css("height",e)}else $(".home").css("height","auto")}(heightofslider(),$(window).resize(function(){heightofslider()}),$("#captcha").length>0)&&createCaptcha();function createCaptcha(){document.getElementById("captcha").innerHTML="";for(var t="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*",o=[],e=0;e<6;e++){var a=Math.floor(Math.random()*t.length+1);-1==o.indexOf(t[a])?o.push(t[a]):e--}var i=document.createElement("canvas");i.id="captcha",i.width=150,i.height=50;var r=i.getContext("2d");r.font="25px Georgia",r.strokeText(o.join(""),0,30),code=o.join(""),document.getElementById("captcha").appendChild(i)}function validateCaptcha(){event.preventDefault(),document.getElementById("cpatchaTextBox").value==code?alert("Valid Captcha"):(alert("Invalid Captcha. try Again"),createCaptcha())}function validateMobile(t){return/^\d{10}$/.test(t)}function validateZipcode(t){return/^\d{6}$/.test(t)}function validateEmail(t){return/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(t)}function checknumber(t){return/^\d+$/.test(t)||/^((\d+(\.\d *)?)|((\d*\.)?\d+))$/.test(t)?"number":"text"}$(document).ready(function(){var t=parseInt($(".photo.modal img").attr("data-index"));function o(){t+1>=$(".fancybox").length?$(".gallery_next").css("display","none"):$(".gallery_next").css("display","block")}function e(){var o=t-1;$(".fancybox").length;o<0?$(".gallery_prev").css("display","none"):$(".gallery_prev").css("display","block")}$(".fancybox").click(function(){var a=$(this).attr("data-href");$(this).attr("data-title");$(".photo.modal").css("display","block"),$(".photo.modal").css("height",$(document).height()),$(".photo.modal img").attr("src",a),$(".photo.modal img").attr("data-index",$(".fancybox").index(this)),t=parseInt($(".photo.modal img").attr("data-index")),e(),o()}),$(".gallery_close").click(function(){$(".photo.modal img").attr("src",""),$(".photo.modal").css("display","none")}),$(".gallery_next").click(function(){t+=1;var a=$(".fancybox").eq(t).attr("data-href");$(".photo.modal img").attr("src",a),$(".photo.modal img").attr("data-index",t),o(),e()}),$(".gallery_prev").click(function(){t-=1;var a=$(".fancybox").eq(t).attr("data-href");$(".photo.modal img").attr("src",a),$(".photo.modal img").attr("data-index",t),o(),e()})}),$(".numberonly").keypress(function(t){if(t.charCode<48||t.charCode>57)return!1}),$(".accept_letter").bind("keyup keydown blur",function(t){if(t.shiftKey||t.ctrlKey||t.altKey)t.preventDefault();else{var o=t.keyCode;8==o||32==o||46==o||o>=35&&o<=40||o>=65&&o<=90||t.preventDefault()}}),$(".mobile").on("input",function(){var t=$(this).val();""!=t?validateMobile(t)?($(this).css("border-bottom-color","#008000"),$(this).parent().find(".error_msg").remove()):($(this).css("border-bottom-color","#ff4343"),$(this).parent().find(".error_msg").remove(),$(this).parent().append('<span class="error_msg" style="color:red;">Please Enter A Valid Mobile Number</span>')):$(this).css("border-bottom-color","#ff4343")}),$(".zipcode").on("input",function(){var t=$(this).val();""!=t?validateZipcode(t)?($(this).css("border-bottom-color","#008000"),$(this).parent().find(".error_msg").remove()):($(this).css("border-bottom-color","#ff4343"),$(this).parent().find(".error_msg").remove(),$(this).parent().append('<span class="error_msg" style="color:red;">Please Enter A Valid Pin Code</span>')):$(this).css("border-bottom-color","#ff4343")}),$(".email").on("input",function(){var t=$(this).val();t?validateEmail(t)?($(this).css("border-bottom-color","#008000"),$(this).parent().find(".error_msg").remove()):($(this).css("border-bottom-color","#ff4343"),$(this).parent().find(".error_msg").remove(),$(this).parent().append('<span class="error_msg" style="color:red;">Please Enter A Valid Email Id</span>')):$(this).css("border-bottom-color","#ff4343")}),$(window).scroll(function(){$(window).scrollTop()>=100?($("nav").addClass("fixed-header"),$(".sticky-logo").css("display","inline")):($("nav").removeClass("fixed-header"),$(".sticky-logo").css("display","inline")),$(window).scrollTop()>=300?($(".floating-connector").css({position:"fixed",top:"16%"}),$(".right_bar").css({position:"fixed",top:"10%"})):($(".floating-connector").css({position:"absolute",top:"59%"}),$(".right_bar").css({position:"absolute",top:"53%"}))}),$(window).scroll(function(){$(this).scrollTop()>=400?$("#return-to-top").fadeIn(200):$("#return-to-top").fadeOut(200)}),$("#return-to-top").click(function(){$("body,html").animate({scrollTop:0},2e3)});