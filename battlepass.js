
window.onload = function() {
    move();
};

var i = 0;
var num = 0;
function move() {
  if (i == 0) {
    i = 1;

    var elem = document.getElementById("myBar");
    
    var h4_1 = document.getElementsByClassName("h4_1");
    var h4_2 = document.getElementsByClassName("h4_2");
    var h4_3 = document.getElementsByClassName("h4_3");
    var h4_4 = document.getElementsByClassName("h4_4");
    var h4_5 = document.getElementsByClassName("h4_5");
    var h4_6 = document.getElementsByClassName("h4_6");
    var h4_7 = document.getElementsByClassName("h4_7");
    var h4_8 = document.getElementsByClassName("h4_8");
    var h4_9 = document.getElementsByClassName("h4_9");
    var h4_10 = document.getElementsByClassName("h4_10");
    var h4_11 = document.getElementsByClassName("h4_11");
    var h4_12 = document.getElementsByClassName("h4_12");
    var h4_1_0 = document.getElementsByClassName("h4_1_0");
    var h4_2_0 = document.getElementsByClassName("h4_2_0");
    var h4_3_0 = document.getElementsByClassName("h4_3_0");
    var h4_3_0 = document.getElementsByClassName("h4_3_0");
    var h4_4_0 = document.getElementsByClassName("h4_4_0");
    var h4_5_0 = document.getElementsByClassName("h4_5_0");
    var h4_6_0 = document.getElementsByClassName("h4_6_0");
    var h4_7_0 = document.getElementsByClassName("h4_7_0");
    var h4_8_0 = document.getElementsByClassName("h4_8_0");
    var h4_9_0 = document.getElementsByClassName("h4_9_0");
    var h4_10_0 = document.getElementsByClassName("h4_10_0");
    var h4_11_0 = document.getElementsByClassName("h4_11_0");
    var h4_12_0 = document.getElementsByClassName("h4_12_0");

    if (h4_12_0[0] == undefined && h4_12[0].className == "h4_12") {
        num = 100;
    } else if (h4_11_0[0] == undefined && h4_11[0].className == "h4_11") {
        num = 92;
    } else if (h4_10_0[0] == undefined && h4_10[0].className == "h4_10") {
        num = 83;
    } else if (h4_9_0[0] == undefined && h4_9[0].className == "h4_9") {
        num = 75;
    } else if (h4_8_0[0] == undefined && h4_8[0].className == "h4_8") {
        num = 66;
    } else if (h4_7_0[0] == undefined && h4_7[0].className == "h4_7") {
        num = 58;
    } else if (h4_6_0[0] == undefined && h4_6[0].className == "h4_6") {
        num = 50;
    } else if (h4_5_0[0] == undefined && h4_5[0].className == "h4_5") {
        num = 41;
    } else if (h4_4_0[0] == undefined && h4_4[0].className == "h4_4") {
        num = 33;
    } else if (h4_3_0[0] == undefined && h4_3[0].className == "h4_3") {
        num = 24;
    } else if (h4_2_0[0] == undefined && h4_2[0].className == "h4_2") {
        num = 16;
    } else if (h4_1_0[0] == undefined && h4_1[0].className == "h4_1") {
        num = 8;
    }else {num = 1;}
    

    var width = 0;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= num) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}


