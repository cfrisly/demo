$(document).ready(function(){
     $("#close-menu-responsive").click(function(){
         $("#show-responsive-header").hide(function(){
           $(".responsive-menu-header").animate({
             right: '500px',
           });
         });
     });
     $(".button-menu-header").click(function() {
       $("#show-responsive-header").toggle(function(){
         $(".responsive-menu-header").animate({
           right: '0'
         });
       });
     });
     $(".open-menu").click(function(){
       $("#show-responsive-header").show(function(){
         $(".responsive-menu-header").animate({
           right: '0',
         });
       });
     });
     $("#hide-menu-desktop").click(function(){
       $("#show-responsive-header").show(function(){
         $(".responsive-menu-header").animate({
           right: '0',
         });
       });
     });
     $(".open-style-post").click(function(){
       $(".sub-style").slideToggle();
     });
     $(".active-menu-mobile").click(function(){
       $(".menu-two-mobile").slideToggle();
     });
     $(".style-desktop").click(function(){
       $(".mega-black-menu").slideToggle();
     });
 });