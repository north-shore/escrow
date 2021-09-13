
<?php

require_once('database.php');
require_once('library.php');

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
?>
    <?php include '../Template/_header.php';?>
    <?php include 'header.php';?>
<style>
    body {font-family:quicksand;}


    html{
        font-size: 14px;
    }
    .tracking-detail {
        padding:3rem 0
    }
    #tracking {
        margin-bottom:1rem
    }
    [class*=tracking-status-] p {
        margin:0;
        font-size:1.1rem;
        color:#fff;
        text-transform:uppercase;
        text-align:center
    }
    [class*=tracking-status-] {
        padding:1.6rem 0
    }
    .tracking-status-intransit {
        background-color:#65aee0
    }
    .tracking-status-outfordelivery {
        background-color:#f5a551
    }
    .tracking-status-deliveryoffice {
        background-color:#f7dc6f
    }
    .tracking-status-delivered {
        background-color:#4cbb87
    }
    .tracking-status-attemptfail {
        background-color:#b789c7
    }
    .tracking-status-error,.tracking-status-exception {
        background-color:#d26759
    }
    .tracking-status-expired {
        background-color:#616e7d
    }
    .tracking-status-pending {
        background-color:#ccc
    }
    .tracking-status-inforeceived {
        background-color:#214977
    }
    .tracking-list {
        border:1px solid #e5e5e5
    }
    .tracking-item {
        border-left:1px solid #e5e5e5;
        position:relative;
        padding:2rem 1.5rem .5rem 2.5rem;
        font-size:14px;
        margin-left:3rem;
        min-height:5rem;
        font: bold;
        color: black;

    }
    .tracking-item:last-child {
        padding-bottom:4rem
    }
    .tracking-item .tracking-date {
        margin-bottom:.5rem
    }
    .tracking-item .tracking-date span {
        color:#888;
        font-size:85%;
        padding-left:.4rem
    }
    .tracking-item .tracking-content {
        padding:.5rem .8rem;
        background-color:#f4f4f4;
        border-radius:.5rem
    }
    .tracking-item .tracking-content span {
        display:block;
        color:#888;
        font-size:85%
    }
    .tracking-item .tracking-icon {
        line-height:2.6rem;
        position:absolute;
        left:-1.3rem;
        width:2.6rem;
        height:2.6rem;
        text-align:center;
        border-radius:50%;
        font-size:1.1rem;
        background-color:#fff;
        color:#fff
    }
    .tracking-item .tracking-icon.status-sponsored {
        background-color:#f68
    }
    .tracking-item .tracking-icon.status-delivered {
        background-color:#4cbb87
    }
    .tracking-item .tracking-icon.status-outfordelivery {
        background-color:#f5a551
    }
    .tracking-item .tracking-icon.status-deliveryoffice {
        background-color:#f7dc6f
    }
    .tracking-item .tracking-icon.status-attemptfail {
        background-color:#b789c7
    }
    .tracking-item .tracking-icon.status-exception {
        background-color:#d26759
    }
    .tracking-item .tracking-icon.status-inforeceived {
        background-color:#214977
    }
    .tracking-item .tracking-icon.status-intransit {
        color:#e5e5e5;
        border:1px solid #e5e5e5;
        font-size:.6rem
    }
    @media(min-width:992px) {
        .tracking-item {
            margin-left:10rem
        }
        .tracking-item .tracking-date {
            position:absolute;
            left:-10rem;
            width:7.5rem;
            text-align:right
        }
        .tracking-item .tracking-date span {
            display:block
        }
        .tracking-item .tracking-content {
            padding:0;
            background-color:transparent
        }
    }

</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <?php include("header.php"); ?>
    <?
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button " style="font-size: 14px"type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    TRACK INFO
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container">
                        <h2>TRACK INFO</h2>
                        <div class="row">

                            <div class="col-md-12 col-lg-12">
                                <div id="tracking-pre"></div>
                                <div id="tracking">
                                    <div class="text-center tracking-status-intransit">
                                        <p class="tracking-status text-tight"><?php echo $status; ?></p>
                                    </div>
                                    <div class="tracking-list">
																	<strong>
																		About Escrow.com</strong>
																		<br>
																		<p>
Escrow.com is the world’s most secure payments method from a counterparty risk perspective- safeguarding both buyer and seller as all funds transacted using escrow are kept in trust. As a winner of multiple awards such as the BBB Torch Award for Ethics, Escrow.com helps you to buy and sell anything safely without the risk of fraud or chargebacks.
</p>
<br>
<strong>
How it works</strong>
<br>
<p>
Escrow.com provides an escrow service that protects both the buyer and the seller in a transaction. <br>1.The buyer deposits funds into Escrow.com’s trust account
<br>2.Escrow.com notifies the seller that the funds are secured, the seller can now safely provide the goods or service to the buyer
<br>3.The buyer is satisfied with the goods or service and instructs Escrow.com to release the funds to the seller
<br><br>If the buyer or seller are not 100% satisfied with the transaction it will go into arbitration with a neutral 3rd party arbitrator. Escrow.com will disburse the funds according to the arbitrators decision.

Sincerely,
<br>
<strong>
Payments
</strong>
	<p>
The Buyer submits a payment by	approved payment method to our secure Escrow Account that will be shared via Email , Escrow.com verifies the payment, then the Seller is notified that funds have been secured “In Escrow”
	</p>																	</p>
																		</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" style="font-size: 14px" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    INFO
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="container">
                        <div class="row">
                            <div class="card border-danger golge">
                                <div class="card-header"><a href="anasayfa.html" class="isteColor">
                                        <h5 class="text-center m-2" style="font-weight: bold">INFO</h5>
                                    </a></div>
                                <div class="card-body">
                                    <div class=" vert slide" >
                                        <div class="inner">
                                            <div class="item active">
                                                <ul class="timeline">
                                                    <li>
                                                        <!--"_blank" tıklanan linkin yeni sekmede açılmasını sağlar.-->
                                                        <a target="_blank"style="color: #0c83e7">Sellers Info</a>
                                                        <a href="#" class="float-right"><?php echo $pick_date; ?></a>
                                                        <p class="article">><?php echo $rev_name; ?>
                                                            <br>><?php echo $r_add; ?>
                                                            <br>><?php echo $r_phone; ?>

                                                        </p>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a style="color: #0c83e7; ">Buyer info</a>
                                                        <a  class="float-right"><?php echo $pick_date; ?></a>
                                                        <p class="article">><?php echo $ship_name; ?>
                                                            <br>><?php echo $s_add; ?>
                                                            <br>><?php echo $phone; ?>

                                                        </p>
                                                    </li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                     </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed"style="font-size: 14px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    TRANSACTION INFO
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="container">
                        <div class="row">
                            <div class="card border-danger golge">
                                <div class="card-header"><a href="anasayfa.html" class="isteColor">
                                        <h5 class="text-center m-2" style="font-weight: bold">TRANSACTION INFO</h5>
                                    </a></div>
                                <div class="card-body">
                                    <div class=" vert slide" >
                                        <div class="inner">
                                            <div class="item active">
                                                <ul class="timeline">
                                                    <li>

                                                        <a href="#" class="float-right"><?php echo $pick_date; ?></a>

                                                    </li>


                                                </ul>
                                                <table class="table">

                                                    <tbody>
                                                    <tr>
                                                        <td> Transaction ID	</td>
                                                        <td><?php echo $cons_no; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Transaction fulfilled Using</td>
                                                        <td><?php echo $book_mode; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transaction title</td>
                                                        <td><?php echo $freight; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>TOTAL + (escro fee)</td>
                                                        <td><?php echo $invice_no; ?></td>
                                                    </tr>
																										<tr>
																												<td>Mode</td>
																												<td><?php echo $mode; ?></td>
																										</tr>
                                                    <tr>
                                                        <td>Escrow fee to be paid By</td>
                                                        <td><?php echo $type; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Inspection period</td>
                                                        <td><?php echo $weight; ?>Day(s)</td>
                                                    </tr>

                                                    <tr>
                                                        <td> Registration Date</td>
                                                        <td><?php echo $pick_date; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Registration Time</td>
                                                        <td><?php echo $pick_time; ?></td>
                                                    </tr>
                                                    </tbody>

                                                </table>
                                                <p>Production Description
                                                    <strong>
                                                        <?php echo $comments; ?>
                                                    </strong>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>






















<body style="background-color: rgba(255,255,255,0)">




































<?php include "footer2.php";?>

</body></html>
<?php }//while
}//if
else {
?>
<!DOCTYPE html >
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: Quicksand;}
</style>
</head>

<body>
<?php include '../Template/_header.php';?>
<?php include 'header.php'; ?>


<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
<td bgcolor="#FFFFFF">
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Quicksand;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Quicksand;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>





<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td id="ds_calclass"> </td>

  </tr>

</tbody></table>



  <br>




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">



    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>


   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="track-status.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>

  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="100%">&nbsp;</td>
    <td bgcolor="#2284d5" width="100%"><div align="right"></div></td>
  </tr>
</tbody></table>

  </tr>

</tbody></table>



</body></html>



<?php
}//else
?>
