<?php 
  session_start();
  include 'function.php'
?>
  <?php
  if(isset($_SESSION['role'])){
  ?>
  <body class="green">
    <?php
    include "navbar.php"
    ?>
    <center>
      <div class="customalert">
          <div class="alertcontent">
              <div id="alertText"> &nbsp </div>
              <img id="qrious">
              <div id="bottomText" style="margin-top: 10px; margin-bottom: 15px;"> &nbsp </div>
              <button id="closebutton" class="formbtn"> OK </button>
          </div>
      </div>
    </center>
    <div>
      <center>
        <div class="centered">
          <form role="form" autocomplete="off">
              <input type="text" id="searchText" class="searchBox" placeholder="Enter Vaccine Code" onkeypress="isInputNumber(event)" required>
              <label class=qrcode-text-btn style="width:4%;display:none;">
				<input type=file accept="image/*" id="selectedFile" style="display:none" capture=environment onchange="openQRCamera(this);" tabindex=-1>
			  </label>
			  <button type="submit" id="searchButton" class="searchBtn"><i class="fa fa-search"></i></button>
          </form>
			
		<button class="qrbutton" onclick="document.getElementById('selectedFile').click();">
		<i class='fa fa-qrcode'></i> Scan QR code
		</button>
	
          <br><br>
          <p id="database" class="cardstyle">
            No Data to Display
          </p>
        </div>
      </center>
    </div>



  <?php }else{
    include 'redirection.php';
    redirect("index.php");
  } ?>

  

  <script>
      const myPrivateEthereumNode = {
      nodeUrl:  'https://rpc-mumbai.matic.today',
      chainId: 8001,
      };
      const portis = new Portis('8c93990a-ae85-481c-9ad2-09411b9b60a1', myPrivateEthereumNode);
      const web3 = new Web3(portis.provider); 

      // Set the Contract
      var contract = new web3.eth.Contract(contractAbi, contractAddress);


      $(".cardstyle").hide();
      // Change the Data
      $('form').on('submit', function(event) {
        event.preventDefault(); // to prevent page reload when form is submitted
        greeting = $('input').val();
        console.log(greeting)
        //$("#database").text(greeting);

        contract.methods.searchVaccine(greeting).call(function(err, result) {
          console.log(err, result)
          $(".cardstyle").show("fast","linear");
          $("#database").html(result);
        });

      });
  </script>

  </body>
</html>