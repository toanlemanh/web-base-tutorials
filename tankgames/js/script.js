$(document).ready(function(){
    var current = $("#car").position();
    //console.log(current)
    placeBombRandomly();
    $("button").click(function(){
        $('#car').css('animation', 'flicker 0.2s ease');
        setTimeout(function() {
            $('#car').css('animation', 'none'); // Remove flicker effect after the animation
        }, 200); // 200ms duration for the flicker
    
        isExploded()
    })

    $("#right").click(function(){
       moveTo(current, "right")
    });
    $("#left").click(function(){
        moveTo(current, "left")
    });
    $("#up").click(function(){
       moveTo(current, "up")
    });
    $("#down").click(function(){
       moveTo(current, "down")
    });
    function moveTo (position, direction) {
        switch (direction) {
            case "up" : {
                position.top -= 19;
                console.log(position.top)
                $("#car").css('top', position.top);
            };
            break;
            case "down" : {
                position.top += 19;
                console.log(position.top)
                $("#car").css('top', position.top);
            };
            break;
            case "right" : {
                position.left += 19;
                console.log(position.left)
                $("#car").css('left', position.left);
            };
            break;
            case "left" : {
                position.left -= 19;
                console.log(position.left)
                $("#car").css('left', position.left);
            };
            break;
            default: alert("Error");
        }
    }

    function placeBombRandomly () {
       var playground = document.getElementById("playground");
       
       for (var i = 1; i < 5; i++){
            const bomb = Object.assign(document.createElement('img'), {
                id: i,
                src: "./assets/img/boom.png",
                alt: "bomb",
                
              });
              bomb.setAttribute("class", "bomb img-fluid")
              bomb.setAttribute("style", `top: ${randomX()}px; left: ${randomX()}px`)
              playground.appendChild(bomb);
       }
       //console.log(playground)
    }

    function randomX (max = 190, min = 0) {
        return parseInt(Math.random() * (max-min + 1) + min);
    }

    function isExploded () {
        // check overlapping
        //for (var i = 1; i < 5; i++){
          console.log ( checkOverlap() === true ? "boom" : "no" )
        //}
    }

    function checkOverlap() {

        const rect1 = document.getElementById("car")?.getBoundingClientRect();
        const el2 = document.getElementsByClassName("bomb");

        for (var i = 0; i < 4; i++) {
           const rect2 = el2[i].getBoundingClientRect();
           console.log("rect1", rect1)
           console.log("rect2", rect2)
            if  ((rect1?.right < rect2?.left || 
                        rect1?.left > rect2?.right || 
                        rect1?.bottom < rect2?.top || 
                        rect1?.top > rect2?.bottom) ) return false;
        }
       return true;
    }

    
    // function(){
    //     alert("click 3")
    // }); 
    });
