$(document).ready(function() {
    var stopleft = -4000 + window.innerWidth;
    var myVideo = document.getElementById("video"); 

    attachEvents();
    panning();

    function attachEvents(){
      attachOpenBoxEvent();
      attachPlayPauseEvent();
      attachMakeBigEvent();
      attachMakeNormalEvent();
      attachMakeSmallEvent();
    }

     function panning(){
      $('#curve').animate({
                           marginLeft: stopleft +'px'
                          },
                          45000,
                          "swing" ,  
                          function() {        
                            $('#curve').animate({
                                                  marginLeft: '0px'
                                                },
                                                15000,
                                                "linear" , 
                                               function() {panning();
           })
       });
    }


    function attachOpenBoxEvent(){
      $("#stamp").on("click",function(){
        $("#top-box,#bottom-box").animate({"height" : 0}, 1000, function(){
          $("#stamp").hide();
          $("#wrapper").removeClass("hidden");

          panning();
        });
      });
    }


  function attachPlayPauseEvent(){
    $('#play-pause').click(function(){
        if (myVideo.paused) 
          myVideo.play(); 
        else 
          myVideo.pause();
    });
  }

  function attachMakeBigEvent(){
    $('#make-big').click(function(){
        myVideo.width = 900;   
    });
  }

  function attachMakeNormalEvent(){
    $('#make-normal').click(function(){
        myVideo.width = 700; 
    });
  }

  function attachMakeSmallEvent(){
    $('#make-small').click(function(){
        myVideo.width = 500; 
    });
  }
});

   
