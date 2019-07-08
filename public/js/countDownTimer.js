// Countdown time on HOTDEAl
(function countDownTimer(){
var countDownData = new Date(2019,12,30).getTime();

// Update the count down every 1 second
  var x  = setInterval(
    function(){
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownData - now;

      // Time calculations for days,hours,minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
      var minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
      var seconds = Math.floor(distance % (1000 * 60) / (1000));

      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

      // If the count down is over, write some text
      if(distance < 0){
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Expired";
      }

    }, 1000);
}());
