
// $(window).on('scroll', function(){
// var  winTop = $(window).scrollTop();
// if (winTop >= 1) {    $('.nav').addClass('fixed').removeClass('top');
// } else if (winTop <= 0) {    $('.nav').addClass('top').removeClass('fixed');    
// }
// });

$(document).ready(function () {
    var containerr_height = $('.containerr').height();  
    var typewriter_height = $(".containerr .videoText").height();
    $(".containerr .videoText").css("top", containerr_height / 2 - typewriter_height / 2);
});

$(function() {
  

    // dislay or hide the menu if the user resize the window
    $(window).resize(function() {
        var wi = $(window).width();
        if (wi >= 992) {
            $('#topbar-menu').css({'display':'block'});
            $('#topbar-menu-icon i').removeClass('fa-times');
            $('#topbar-menu-icon i').addClass('fa-bars');
        }
        else {
            $('#topbar-menu').css({'display':'none'});            
            $('#topbar-menu-icon i').removeClass('fa-times');
            $('#topbar-menu-icon i').addClass('fa-bars');
        }
    });
    
    // Change the menu icon, and show or hide the menu
    $('#topbar-menu-icon').click(function(){
        if ($('#topbar-menu').css('display') == 'none') {
            $('#topbar-menu').css({'display':'block'});
            
            $('#topbar-menu-icon i').removeClass('fa-bars');
            $('#topbar-menu-icon i').addClass('fa-times');
        } 
        else {
            $('#topbar-menu').css({'display':'none'});
            
            $('#topbar-menu-icon i').removeClass('fa-times');
            $('#topbar-menu-icon i').addClass('fa-bars');
        }
    });
});



// progress bar script STARTS

  document.onreadystatechange = function(e) {
    if(document.readyState=="interactive")
    {
      var all = document.getElementsByTagName("*");
      for (var i=0, max=all.length; i < max; i++)  {
        set_ele(all[i]);
      }
    }
  }

function check_element(ele) {
  var all = document.getElementsByTagName("*");
  var totalele=all.length;
  var per_inc=100/all.length;
  if($(ele).on()) {
    var prog_width=per_inc+Number(document.getElementById("progress_width").value);
    document.getElementById("progress_width").value=prog_width;
    $("#bar1").animate({width:prog_width+"%"},10,function(){
      if(document.getElementById("bar1").style.width=="100%") {
        $(".progress").fadeOut("slow");
      }			
    });
  }
  else  { set_ele(ele); }
}
function set_ele(set_element) {
  check_element(set_element);
}
// progress bar script ENDS