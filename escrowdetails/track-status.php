

<?php include '../Template/_header.php';?>
<?php include 'header.php';?>
<style>
    body {font-family:quicksand;}


    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
        opacity: 1;
    }
</style>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>

<section id="track number">
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace Transactions <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="aalpha" valign="top"><div align="center" style="color: white">Enter the Transaction ID </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top"><div align="center">
            <form action="track-result.php" method="post" name="form" id="form" >
                <div class="col">
                    <input name="Consignment" type="text" class="form-control" id="Consignment" maxlength="50" placeholder="TrackNo">
                </div>

                  <input name="Submit" type="submit" class="btn btn-primary" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
			      <span class="gentxt"style="color: white" >Ex: IXM53533553 </span> </div></td>
                </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>

          </tbody></table>
        </div></td>
        </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>


      <tr>
        <td>&nbsp;</td>
        </tr>
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" >&nbsp;</td>
    <td bgcolor="#2284d5">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
 <tr>
  <td>
</section>




<main class="content">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="container">
        <tr>
            <td>

                <div class="b-h1">
                    Select the Type of Transaction</div>

                <img src="https://my.escrow.com/blank.gif" width="1" height="4" border="0"><br>

                <table width="100%" cellpadding="0" cellspacing="0" border="0" class="b-h1hr">
                    <tr>
                        <td><img src="https://my.escrow.com/blank.gif" width="1" height="1"/></td>
                    </tr>
                </table>
                <br>

                <table width="100%" cellpadding="4" cellspacing="0" border="0" class="b-inst">
                    <tr>
                        <td>
                            <table cellpadding="1" cellspacing="0" border="0" class="b-inst">
                                <tr>
                                    <td valign="top" class="b-inst">
                                        &#8226;&nbsp;
                                    </td>
                                    <td valign="top" class="b-inst">
                                        Review the transaction types below, and <b>Select</b> the type that fits what you
                                        are buying, selling or brokering.
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" class="b-inst">
                                        &#8226;&nbsp;
                                    </td>
                                    <td valign="top" class="b-inst">
                                        Escrow.com may refuse to accept certain payment types, including credit cards and PayPal, for any reason, at its discretion. (Premier payment methods of  credit card and PayPal are not available for the purchase of any motor vehicle, milestone, Euro transactions, broker or domain name holding transaction.)
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" class="b-inst">
                                        &#8226;&nbsp;
                                    </td>
                                    <td valign="top" class="b-inst">
                                        Please see <a href="javascript:PopUp('https://www.escrow.com/support/faqs/faq-questions/can-i-use-my-credit-card-or-paypal-as-payment-for-a-transaction.aspx?prevTopic=Payment');"><!--<a href="javascript:PopUp('../myescrow/includes/faq/index2.asp?qid=134');">-->
                                            attention credit card and PayPal users</a>.
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>
                <form name="frm" method="get" action="../trans.html" onsubmit="return FormSubmitActionSelection();">
                    <input type="hidden" name="cmd" value="abstart">
                    <div class="transactionChoiceBody">
                        <div class="transactionChoiceBodyLeft">
                            <div class="transactionChoice-row">
                                <label class="transactionChoice-label" for="typeOfTransactionDll">Type of Transaction</label>
                                <div class="transactionChoice-inputWrapper">
                                    <div class="defaultSelect defaultSelect--form">
                                        <select id="typeOfTransactionDll" class="defaultSelect-select transactionChoice-select" data-e2e-target="transaction-choice-service-type" onclick="PopulateHelp('TypeOfTransaction');" onchange="ValidateBrokerRole();">

                                            <option value="DomainNameStartTrans.asp" selected="selected">Domain Name</option>
                                            <option value="DomainNameStartTrans.asp?dnh=true">Domain Name Holding</option>
                                            <option value="GeneralMerchandiseStartTrans.asp">General Merchandise</option>
                                            <option value="MVTerms.asp" >Motor Vehicle</option>
                                            <option value="ServicesStartTrans.asp">Milestone Transactions</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="transactionChoice-row">
                                <label class="transactionChoice-label" for="roleDdl">Your Role</label>
                                <div class="transactionChoice-inputWrapper">
                                    <div class="defaultSelect defaultSelect--form">
                                        <select id="roleDdl" name="Role" class="defaultSelect-select transactionChoice-select" data-e2e-target="transaction-choice-user-role" onclick="PopulateHelp('Role');">

                                            <option value="buyer">
                                                Buyer
                                            </option>

                                            <option value="seller">
                                                Seller
                                            </option>

                                            <option value="broker">
                                                Broker
                                            </option>

                                        </select>
                                    </div>
                                    <input type="hidden" id="BrokerExists" value="true" />
                                </div>
                            </div>
                            <div class="transactionChoice-row">
                                <div class="transactionChoice-inputWrapper">
                                    <input type="submit" class="btn btn--secondary" data-e2e-target="transaction-choice-submit" value="Continue" />
                                </div>
                            </div>

                        </div>
                        <div class="transactionChoiceBodyRight">
                            <div id="TypeofTransactionHelpDiv">
                                <div class="transactionChoice-help">
                                    <b>Domain Name</b> is used if the transaction involves a URL, website, or <a style="text-decoration: none;" href="#" id="hrefDomainNameHolding" title="This service is designed for dollar/euro transactions, where the Buyer and Seller agree to hold the domain(s) in escrow while the Buyer makes scheduled payments.">Domain Name Holding</a> transaction.
                                </div>
                                <div class="transactionChoice-help">
                                    General Merchandise is used for most tangible goods.
                                </div>
                                <div class="transactionChoice-help">
                                    Motor Vehicle is used when a <b>motor vehicle</b> is bought or sold. In addition
                                    to the escrow service, when both parties are in the USA, you may select the other
                                    services including: Title Collection Service and Lien Holder Payoff.
                                </div>
                                <div class="transactionChoice-help">
                                    Milestone Transactions is used for most services performed and any transaction with milestone
                                    disbursements.
                                </div>
                            </div>
                            <div id="RoleHelpDiv">
                                <div class="transactionChoice-help">
                                    This identifies if you are <b>Buyer</b>, <b>Seller</b> or the <b>Broker</b> in this transaction.
                                </div>
                                <div id="brokerHelpDiv" class="transactionChoice-help">
                                    This is used for broker to start a new escrow transaction for the Buyer and the Seller.
                                </div>
                            </div>
                        </div>
                    </div>


                    <img src="https://my.escrow.com/blank.gif" width="1" height="8"><br>

                </form>

            </td>
        </tr>
    </table>
</main>


<?php include '../Template/_body.php';?>

<?php include "footer2.php";?>

<!-- begin olark code -->

</body>
</html>

<script src="../JsScripts/MyTransactionSearch.js" type="text/javascript"></script>
<script src="../JsScripts/jquery-1.7.min.js" type="text/javascript"></script>
