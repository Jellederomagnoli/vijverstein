
$('#phoneCall').click(function(){
    $('.contentContact').toggleClass('openitp');
  })
  
  
  // navigatie -----------------------------------------------------------
  const container = document.getElementById("#container");
  const links = $("#navMobile ul").children();
  const a = links.children();

  $(a).each(function(){
      $(this).on("click", function(){
      
        
        if($(this).has("id") == "homeMobile"){
          $("#container").css("transform","translateX(273vw)");
        }

        if($(this).attr("id") == "accoMobile"){
          $("#container").css("transform","translateX(calc(-100vw))");
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
  