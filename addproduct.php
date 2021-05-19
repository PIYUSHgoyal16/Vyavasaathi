<?php 
session_start(); 
$color="navbar-light orange darken-4";
include 'function.php'
?>
  <?php
    if( $_SESSION['role']==0 ){
  ?>
  <body class="violetgradient">
    <?php include 'navbar.php'; ?>
    <center>
        <div class="customalert">
            <div class="alertcontent">
                <div id="alertText"> &nbsp </div>
                <img id="qrious">
                <div id="bottomText" style="margin-top: 10px; margin-bottom: 15px;"> &nbsp </div>
                <button id="closebutton" class="formbtn"> Done </button>
            </div>
        </div>
    </center>

    <div class="bgrolesadd">
      <center>
        <div class="mycardstyle">
            <div class="greyarea">
                <h5> Please fill Vaccine details  </h5>
                <form id="form1" autocomplete="off">
                    <div class="formitem">
                        <label type="text" class="formlabel"> Vaccine Name </label>
                        <input type="text" class="forminput" id="prodname" required>
                        <input type="hidden" class="forminput" id="user" value=<?php echo $_SESSION['username']; ?> required>
                    </div>
                    <button class="formbtn" id="mansub" type="submit">Register Item</button>
                </form>
            </div>
        </div>


      </center>
      <?php
        }else{
            include 'redirection.php';
            redirect('index.php');
        }
    ?>


    <script>
      // Initialize Web3
      const myPrivateEthereumNode = {
      nodeUrl:  'https://rpc-mumbai.matic.today',
      chainId: 8001,
      };
      const portis = new Portis('8c93990a-ae85-481c-9ad2-09411b9b60a1', myPrivateEthereumNode);
      const web3 = new Web3(portis.provider); 

    var contract = new web3.eth.Contract(contractAbi, contractAddress);



    $("#manufacturer").on("click", function(){
        $("#districard").hide("fast","linear");
        $("#manufacturercard").show("fast","linear");
    });

    $("#distributor").on("click", function(){
        $("#manufacturercard").hide("fast","linear");
        $("#districard").show("fast","linear");
    });

    $("#closebutton").on("click", function(){
        $(".customalert").hide("fast","linear");
    });

    $('#form1').on('submit', function(event) {
        event.preventDefault(); // to prevent page reload when form is submitted
        prodname = $('#prodname').val();
        username = $('#user').val(); 
        prodname=prodname+"<br>Registered By: "+username;
        console.log(prodname);
        var today = new Date();
        var thisdate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

        web3.eth.getAccounts().then(async function(accounts) {
          var receipt = await contract.methods.newItem(prodname, thisdate).send({ from: accounts[0], gas: 1000000 })
          .then(receipt => {
              var msg="<h5 style='color: #53D769'><b>Item Added Successfully</b></h5><p>Product ID: "+receipt.events.Added.returnValues[0]+"</p>";
              qr.value = receipt.events.Added.returnValues[0];
              $bottom="<p style='color: #FECB2E'> You may print the QR Code if required </p>"
              $("#alertText").html(msg);
              $("#qrious").show();
              $("#bottomText").html($bottom);
              $(".customalert").show("fast","linear");
          });
          //console.log(receipt);
        });
        $("#prodname").val('');
        
    });



    (function() {
        var qr = window.qr = new QRious({
            element: document.getElementById('qrious'),
            size: 200,
            value: '0'
        });

        
    })();


    </script>
  </body>
</html>
