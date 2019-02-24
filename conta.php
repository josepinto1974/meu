<script>
var timeleft = 20;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBar").value = 20 - --timeleft;
  if(timeleft <= 0)
    clearInterval(downloadTimer);
},1000);
</script>

<progress value="0" max="20" id="progressBar"></progress>