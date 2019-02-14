

<!DOCTYPE html>

<html>
  <head>
<title>Digital Clock</title>
      <style>
          body{
              background: white;
          }
          .clock{
              position: absolute;
              top:50%;
              left:50%;
              transform: translateX(-50%) translateY(-50%);
              color: #1d68a7;
              font-size: 25px;
                letter-spacing: 5px;
          }
      </style>
</head>
  <body>

<div id="Clock" class="clock">
  </div>
<div class="clock" style="margin-top:2%;">
<?php echo date('d m Y'); ?>
</div>
<script>
   function showTime(){
      var date= new Date();
      var h= date.getHours();
       var m= date.getMinutes();
       var s= date.getSeconds();
       var session= "AM";

       if (h== 0) {
          h =12;
    }
       if (h>12) {
      h = h-12;
      session= "PM"
     }
        h =(h < 10)? "0" + h :
         h;
        m =(m < 10)? "0" + m :
        m;
        s =(s < 10)? "0" + s :
        s;

       var time = h + ":" + m + ":" + s + " " + session;
       document.getElementById ("Clock").innerText = time;
      document.getElementById ("Clock").textContent = time;
     setTimeout(showTime,1000);
}
  showTime();


</script>



</body>
</html>
