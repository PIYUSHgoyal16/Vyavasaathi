<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Assurance</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  </head>
<div class='box'>
      <div class='wave -one'></div>
      <div class='wave -two'></div>
      <div class='wave -three'></div>
</div>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Web3.js -->
    <script src="web3.min.js"></script>

    <!-- QR Code Library-->
    <script src="./dist/qrious.js"></script>

    <!-- QR Code Reader -->
	<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>

    <script src="app.js"></script>
    <!-- Web3 Injection -->
    <script
  src="https://cdn.jsdelivr.net/npm/@portis/web3@4.0.0/umd/index.js"
  integrity="sha256-5Dbx+4PYiinsVz9dVbidtMV8ef8oo2BwViWUKDh3L2I="
  crossorigin="anonymous"></script>


<script>

    function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
      }

    function openQRCamera(node) {
		var reader = new FileReader();
		reader.onload = function() {
			node.value = "";
			qrcode.callback = function(res) {
			if(res instanceof Error) {
				alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
			} else {
				node.parentNode.previousElementSibling.value = res;
				document.getElementById('searchButton').click();
			}
			};
			qrcode.decode(reader.result);
		};
		reader.readAsDataURL(node.files[0]);
	}

  function showAlert(message){
      $("#alertText").html(message);
      $("#qrious").hide();
      $("#bottomText").hide();
      $(".customalert").show("fast","linear");
    }

        

    $("#aboutbtn").on("click", function(){
      showAlert("A Decentralised End to End Logistics Application for Vaccines.");
  });

  $("#closebutton").on("click", function(){
        $(".customalert").hide("fast","linear");
    });


</script>