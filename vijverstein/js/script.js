$(document).ready(function () {

  // Javascript mobile nav ------------------------------------------------
      const container = document.getElementById("#container");
      const links = $("#navMobile ul").children();
      const a = links.children();

      $(a).each(function(){
          $(this).on("click", function(){
          
            
            if($(this).has("id") == "homeMobile"){
              $("#container").css("transform","translateX(273vw)");
            }

            if($(this).attr("id") == "accoMobile"){
              $("#container").css("transform","translateX(180.5vw)");
            }

            if($(this).attr("id") == "rijKmobile"){
              $("#container").css("transform","translateX(89.5vw)");
            }

            if($(this).attr("id") == "rijLmobile"){
              $("#container").css("transform","translateX(-89.5vw)");
            }

            if($(this).attr("id") == "pensionMobile"){
              $("#container").css("transform","translateX(-180.5vw)");
            }

            if($(this).attr("id") == "contMobile"){
              $("#container").css("transform","translateX(-273vw)");
            }

        })


        })
// NAvigation mobile end ------------------------------------------
// Navigation desktop javascript --------------------------------------

const linksDesk = $("#navDesktop ul").children();
const aDesk = linksDesk.children();

$(aDesk).each(function(){
  $(this).on("click", function(){
  


    if($(this).attr("id") == "rijkampdeskt"){
      $("#container").css("transform","translateX(241vw)");
    }


    if($(this).attr("id") == "accodesk"){
      $("#container").css("transform","translateX(144vw)");
    }

    if($(this).attr("id") == "rijkampdesk"){
      $("#container").css("transform","translateX(48vw)");
    }

    if($(this).attr("id") == "rijlesdesk"){
      $("#container").css("transform","translateX(-48vw)");
    }

    if($(this).attr("id") == "pensiondesk"){
      $("#container").css("transform","translateX(-144vw)");
    }

    if($(this).attr("id") == "contdesk"){
      $("#container").css("transform","translateX(-240vw)");
    }

})


})

// contact mobile -----------------------------------------------

$('#phoneCall').click(function(){
  $('.contentContact').toggleClass('openit');
})



$( "#openingsuren" ).click(function() {
  $( ".timeline" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});


$( "#lesrooster " ).click(function() {
  $( ".timeline" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});

// Rijlessen uitschuifbare onderwerpen -----------------------------------------------

$( ".plus" ).click(function() {
  event.preventDefault();
  $( ".subjects" ).slideToggle( "slow", function() {
       });
});

var card1 = document.getElementsByClassName('card-two');


$("#priveL").click(function(){
  $('.content').html("<h3> Privé lessen </h3> <p> Privé lessen kunnen te alle tijde op afspraak met de lesgever. </p>");
  $( ".subjects" ).slideUp("0.5s");
  event.preventDefault();
});


$("#Cursus").click(function(){
  $('.content').html("<h3> Cursussen </h3> <p> Cursussen worden ingelegd op bepaalde tijdstippen, met een beperkte groep ruiters en voor telkens een periode van 10 weken, telkens op dezelfde weekdag en uur. </p>");
  $( ".subjects" ).slideUp("0.5s");
  event.preventDefault();
});



//form uitschuifbaar

$( ".down" ).click(function() {
  event.preventDefault();
  $( ".form-style-6" ).slideToggle( "slow", function() {
    
  });
});


// Rijlessen uitschuifbare onderwerpen  ENDDDDDDDD-----------------------------------------------

//slidshow pistes

var elem = document.getElementById("myslide");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}


});


