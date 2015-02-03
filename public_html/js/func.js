$( function() {
    $( '#cd-dropdown' ).dropdown( {
            gutter : 5,
            stack : false,
            slidingIn : 100
    } );

});
//animations for trailer
$(document).ready(function(){
  $(".trailer").click(function(){
    $(".player").addClass("visible");
    $(".shade").addClass("visible");    
    $(".player").addClass("anim_open");
    $(".shade").addClass("anim_open");
    $(".player").removeClass("anim_close");
    $(".shade").removeClass("anim_close");
  });
});
$(document).ready(function(){
  $(".trailer_stop_button").click(function(){
    $(".player").removeClass("visible");
    $(".shade").removeClass("visible");
    $(".player").addClass("anim_close");
    $(".shade").addClass("anim_close");
    $(".player").removeClass("anim_open");
    $(".shade").removeClass("anim_open");
  });
});
//adding class selected for row
$(document).ready(function(){
  $(".row").click(function(){          
    $(".row").removeClass("row_selected");
    $(this).addClass("row_selected");
  });
});
$(document).ready(function() {
    $('.tooltip_img').tooltipster({
        contentAsHTML: true,
        position: 'left',
        maxWidth: 300,
        interactive: true
    });
});
$(document).ready(function() {
    $('.tooltip').tooltipster({
        contentAsHTML: true
    });
});
$(document).ready(function() {
    $(".cd-active.cd-dropdown ul").click(function(){
        $("#password").addClass("visible");
    });
});

//confirm and submit
//$(document).ready(function(){
//    $(".delete_admin").click(function(){
//        if(confirm("Obrisati film?")){
//            $(".delete_admin").submit();
//        };
//    });
//});