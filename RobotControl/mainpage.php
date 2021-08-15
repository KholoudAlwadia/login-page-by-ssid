<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="RobotControl.css">


</head>
<body>
  <img src="chip.jpg" style="width:100%; height:440px" alt="">


<div id="mySidebar" class="sidebar" style="background-color: #000014;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

<div class="all">
<div class="cir">

<form action="mainpage.php" method="post">
<div class="mt-5 pt-4 position-relative d-flex flex-row justify-content-center align-items-center">
    <div class="circle position-absolute stop-inner"></div>

          <div class="circle stop-outer position-absolute">
            <input  type="submit"class="stop-outer" name="Stop"value="Stop" style="border:none; border-radius: 40%;background-color:#000014;">
</div>

          <input type="submit" name="right"  class="fas fa-caret-right position-absolute control-icon right" value="&#5125;" style="background-color: #000014;border:none;">
          <input type="submit" name="backward" value="&#5125;" class="fas fa-caret-right position-absolute backward" style="background-color: #000014;border:none;">
          <input type="submit" name="left" value="&#5125;" class="fas fa-caret-right position-absolute left" style="background-color: #000014;border:none;">
          <input type="submit" name="forward" value="&#5125;" class="fas fa-caret-right position-absolute  forward" style="background-color: #000014;border:none;">


          </div>

        </form>
      </div>
        <form  action="DB.php" method="post">
          <input type="submit" class="bt" name="ViewDB" value="ViewDB"  style="background-color: #000014;border-radius:30px;margin-right:30px;">
        </form>
</div>
</div>
<?php

include "connect.php";

if(isset($_POST['Stop']))
{
  $edit = mysqli_query($db, "UPDATE `robot-base` SET `Forward`='0',`Backward`='0',`leftt`='0',`rightt`='0',`Stop`='1' WHERE id='1'");
    if(!$edit)
    {
        echo mysqli_error($db);
    }
}
elseif(isset($_POST['right']))
{
  $edit = mysqli_query($db, "UPDATE `robot-base` SET `Forward`='0',`Backward`='0',`leftt`='0',`rightt`='1',`Stop`='0' WHERE id='1'");
    if(!$edit)
    {
        echo mysqli_error($db);
    }
}
elseif(isset($_POST['left']))
{
  $edit = mysqli_query($db, "UPDATE `robot-base` SET `Forward`='0',`Backward`='0',`leftt`='1',`rightt`='0',`Stop`='0' WHERE id='1'");
    if(!$edit)
    {
        echo mysqli_error($db);
    }
}elseif(isset($_POST['backward']))
{
  $edit = mysqli_query($db, "UPDATE `robot-base` SET `Forward`='0',`Backward`='1',`leftt`='0',`rightt`='0',`Stop`='0' WHERE id='1'");
    if(!$edit)
    {
        echo mysqli_error($db);
    }
}elseif(isset($_POST['forward']))
{
  $edit = mysqli_query($db, "UPDATE `robot-base` SET `Forward`='1',`Backward`='0',`leftt`='0',`rightt`='0',`Stop`='0' WHERE id='1'");
    if(!$edit)
    {
        echo mysqli_error($db);
    }
}

?>

<div id="main">

  <button class="openbtn" onclick="openNav()">&#8249;</button>
  <div class="sid1">
  <form action="mainpage.php" method="post">


  <div class="row">

    <div class="column">
      <div class="card" style = " height:300px" >
  <h2 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 1 </h2>
  <div class="center">

      <div class="slider">

          <div class="show-value">
            <span id="currentvalue"></span>
            </div>

    <input type="range" min="0" max="180" value="0" step="1" id="custom-slider" name="Engine1">

      <div class="range">
        <div>0</div>
        <div>180</div>
     </div>

  </div>
  </div>

    </div>
  </div>

    <div class="column">
      <div class="card" style = " height:300px; background-color: #5CAAEF;">
        <h2 style =" color: #0f0f24 ;  padding-left: 80px; padding-top: 30px;"> Engine 2 </h2>
        <div class="center">

          <div class="slider">

              <div class="show-value">
                <span id="currentvalue1"></span>
                </div>

        <input type="range" min="0" max="180" value="0" step="1" id="custom-slider1" name="Engine2">

          <div class="range">
            <div>0</div>
            <div>180</div>
         </div>

      </div>
      </div></div>
    </div>



    <div class="column ">
      <div class="card" style = " height:300px; background-color:#07A1C8">
        <h2 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 3 </h2>
        <div class="center">

          <div class="slider">

              <div class="show-value">
                <span id="currentvalue2"></span>
                </div>

        <input type="range" min="0" max="180" value="0" step="1" id="custom-slider2" name="Engine3">

          <div class="range">
            <div>0</div>
            <div>180</div>
         </div>

      </div>
      </div></div>
    </div>


    <div class="column" >
      <div class="card" style = " height:300px; ">
        <h2 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 4 </h2>
        <div class="center">

          <div class="slider">

              <div class="show-value">
                <span id="currentvalue3"></span>
                </div>

        <input type="range" min="0" max="180" value="0" step="1" id="custom-slider3" name="Engine4">

          <div class="range">
            <div>0</div>
            <div>180</div>
         </div>

      </div>
      </div></div>
    </div>



    <div class="column">
      <div class="card" style = " height:300px;  background-color: #5CAAEF;">
        <h2 style =" color: #0f0f24 ;  padding-left: 80px; padding-top: 30px;"> Engine 5 </h2>
        <div class="center">

          <div class="slider">

              <div class="show-value">
                <span id="currentvalue4"></span>
                </div>

        <input type="range" min="0" max="180" value="0" step="1" id="custom-slider4" name="Engine5">

          <div class="range">
            <div>0</div>
            <div>180</div>
         </div>

      </div>
      </div></div>
    </div>



    <div class="column">
      <div class="card" style = " height:300px;background-color: #07A1C8;">
        <h3 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 6 </h3>
        <div class="center">

          <div class="slider">

              <div class="show-value">
                <span id="currentvalue5"></span>
                </div>

        <input type="range" min="0" max="180" value="0" step="1" id="custom-slider5" name="Engine6">

          <div class="range">
            <div>0</div>
            <div>180</div>
         </div>

      </div>
      </div></div>
    </div>
    <div class="btr">


    <input type="submit" name="save" value="save" style="background-color:#5CAAEF ; width:70px; height:28px;border-radius: 13%;margin-left:30px;margin-bottom:10px">


    </form>

    <form  action="run.php" method="post">
      <input type="submit" name="run" value="run"style="background-color:#07A1C8 ; width:70px; height:28px ;border-radius: 13%; margin-left:30px;margin-bottom:10px">
    </div>
  </div>


  </form>

  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "400px";
  document.getElementById("main").style.marginRight = "300px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginRight= "0";
}
</script>

<script>

   document.getElementById("custom-slider").addEventListener("input",function(event){let value = event.target.value;
   document.getElementById("currentvalue").innerText = value;
    document.getElementById("currentvalue").classList.add("active");
   document.getElementById("currentvalue").style.left='${value/2}%'; });

 document.getElementById("custom-slider").addEventListener("blur",function(event){
     document.getElementById("currentvalue").classList.remove("active");


 });

 document.getElementById("custom-slider1").addEventListener("input",function(event){let value = event.target.value;
 document.getElementById("currentvalue1").innerText = value;
  document.getElementById("currentvalue1").classList.add("active");
 document.getElementById("currentvalue1").style.left='${value/2}%'; });

document.getElementById("custom-slider1").addEventListener("blur",function(event){
   document.getElementById("currentvalue1").classList.remove("active");


});


document.getElementById("custom-slider2").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue2").innerText = value;
 document.getElementById("currentvalue2").classList.add("active");
document.getElementById("currentvalue2").style.left='${value/2}%'; });

document.getElementById("custom-slider2").addEventListener("blur",function(event){
  document.getElementById("currentvalue2").classList.remove("active");


});



document.getElementById("custom-slider3").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue3").innerText = value;
 document.getElementById("currentvalue3").classList.add("active");
document.getElementById("currentvalue3").style.left='${value/2}%'; });

document.getElementById("custom-slider3").addEventListener("blur",function(event){
  document.getElementById("currentvalue3").classList.remove("active");


});




document.getElementById("custom-slider4").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue4").innerText = value;
 document.getElementById("currentvalue4").classList.add("active");
document.getElementById("currentvalue4").style.left='${value/2}%'; });

document.getElementById("custom-slider4").addEventListener("blur",function(event){
  document.getElementById("currentvalue4").classList.remove("active");


});


document.getElementById("custom-slider5").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue5").innerText = value;
 document.getElementById("currentvalue5").classList.add("active");
document.getElementById("currentvalue5").style.left='${value/2}%'; });

document.getElementById("custom-slider5").addEventListener("blur",function(event){
  document.getElementById("currentvalue5").classList.remove("active");


});



</script>

<?php

include "conection.php";

if(isset($_POST['save']))
{
  $Engine1 = $_POST['Engine1'];
  $Engine2 = $_POST['Engine2'];
  $Engine3 = $_POST['Engine3'];
  $Engine4 = $_POST['Engine4'];
  $Engine5 = $_POST['Engine5'];
  $Engine6 = $_POST['Engine6'];


$off=0;
    $edit = mysqli_query($db, "UPDATE `robot-arm` SET `Engine 1`='$Engine1',`Engine 2`='$Engine2',`Engine 3`='$Engine3',`Engine 4`='$Engine4',`Engine 5`='$Engine5',`Engine 6`='$Engine6',`Status`='$off' WHERE id='1'");

    if(!$edit)
    {
        echo mysqli_error($db);
    }
}

?>
<div class="chat">

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "1aebc76e-57d8-4100-ad4c-be7b1ad9bf9d", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "95ccabbe-29e3-4318-8255-0b5387ff2f0e", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</div>

</body>
</html>
