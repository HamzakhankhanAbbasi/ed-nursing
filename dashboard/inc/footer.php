<!-- New Payment Modal Start  -->
<div class="modal payment-popup fade" id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
      		<h6>Add a new payment method</h6>
      		<p>Payment Type > <span>Payment Inforrnatir ' Billing Address</span> </p>
      		<button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true"><i class="fas fa-times"></i></span>
        	</button>
      	</div>
      	<div class="payment-types">
      		<p>Select Payment Type </p>

      		<a href="javascript:void(0)" class="payment-type" data-toggle="modal" data-target="#credit-modal">
          <img src="assets/images/googlepay-icon.png" class="img-fluid"> Google Pay</a>
      		<!--<a href="javascript:void(0)" class="payment-type"><img src="assets/images/paypal.png" class="img-fluid"> PayPal</a>-->
      		<!--<a href="javascript:void(0)" class="payment-type">Auto Fill From Browser</a>-->
      	</div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->

<!-- Credit Card Modal Start  -->
<div class="modal payment-popup fade" id="credit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Card Details</h6>
          <p>Payment Type > <span>Payment Information ' Billing Address</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="20" placeholder="Card Holder Name" class="card-input">
            <input type="tel" name="" placeholder="Card Number" class="card-input">
            <input type="text" name="" pattern="[0-9]*" inputmode="numeric" placeholder="Expiration (mm/yy)" class="card-input">
            <input type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Security Code" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->

<!-- Change User Name Modal Start -->
<div class="modal payment-popup fade" id="newUsername-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Change Your User Name</h6>
          <p><span>Enter a new user name and your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="20" placeholder="User Name" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Address Modal Start -->
<div class="modal payment-popup fade" id="newAddress-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Change Your Email</h6>
          <p><span>Enter a new email and your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="email" name="" maxlength="30" placeholder="New Email" class="card-input">
            <input type="email" name="" maxlength="30" placeholder="Confirm Email" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Phone Number Modal Start -->
<div class="modal payment-popup fade" id="newNumber-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Change Your Phone Number</h6>
          <p><span>Enter a new number and your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="tel" name="" maxlength="15" placeholder="New Phone Number" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Password Modal Start -->
<div class="modal payment-popup fade" id="newPassword-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Change Your Password</h6>
          <p><span>Enter a new password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="credit-card-info">
            <div>
                <select>
                    <option>Change Password for Account Holder</option>
                    <option>Change Read-Only Password for Heir</option>
                </select>
            </div>
            <form>
                <input type="password" name="" maxlength="30" placeholder="Current Password" class="card-input">
                <input type="password" name="" maxlength="30" placeholder="New Password" class="card-input">
                <input type="password" name="" maxlength="15" placeholder="Confirm Password" class="card-input">
                <button type="submit" class="card-btn">Submit</button>
            </form>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->



<!-- Subscripton Modal -->
<div class="modal payment-popup subscription-modal fade" id="newSubscription-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6 class="banner-gradient">Subscription <span>Details</span></h6>
           <p></p>
           <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="credit-card-info">
          <!-- <form>
            <input type="text" name=""  placeholder="New Date" class="card-input">
            <input type="text" name=""  placeholder="Confirm Date" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form> -->
         <!-- table-start -->
        <table class="table   table-stylish table-striped">
            <thead>
                <tr>
                    <th scope="col">Status</th>
                    <td class="bg">Active</td>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    <th scope="col" >Your Subscription Started</th>
                    <td >28 Mar 2021</td>
                </tr>
                <tr>
                    <th scope="col">Your Subscription Ends</th>
                    <td class="rbg">28 Mar 2021</td>
                </tr>
            </tbody>
        </table>
        <div class="instructionTxt">
            <p>
                Please Renew Within 60 Days Before Your Subscription Ends. 
                And please, when renewing, check all your information and answers
                to be certain that they are all up to date.
            </p>
        </div>
        <div class="w-100"><a href="#" class="btn btn-outline-danger w-100">One Year Renewal -- Only $10</a></div>

          <!-- <table class="table table-style table-responsive mb-2">
  <thead>
    <tr>
      <th scope="col">Status</th>
      <th scope="col">Subscription</th>
      <th scope="col">Expiration</th>
      <th scope="col">Amount</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Active</td>
      <td>Bronze</td>
      <td>April 28,2016</td>
      <td>$8.00</td>
      <td>Renew Your Subscription</td>
    </tr>
    <tr>
      <td>Active</td>
      <td>Bronze</td>
      <td>April 28,2016</td>
      <td>$8.00</td>
      <td>Renew Your Subscription</td>
    </tr>
    <tr>
      <td>Active</td>
      <td>Bronze</td>
      <td>April 28,2016</td>
      <td>$8.00</td>
      <td>Renew Your Subscription</td>
    </tr>
  </tbody>
</table> -->
<!-- table-end -->
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->


<!-- Change Email Address Modal Start -->
<div class="modal payment-popup fade" id="newEmail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Two Factor Authentication</h6>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="credit-card-info authenticate-text">
             <p>
                  Two factor authentication helps to ensure that only you have access 
                  to your account by creating an added level of security when logging in. 
                  Each time you log in you will receive a unique code via email which you 
                  will need to input in order to get access to your account.
            </p>
            <!-- Radio Button -->
            <p class="mt-2 mb-2">Apply Two Factor Authentication :</p>
            <div class="custom-radios">
                <div>
                    <input type="radio" id="color-1" name="color" value="color-1">
                    <label for="color-1">
                      <span>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                      </span>
                    </label>
                    <p>YES</p>
                </div>
                <div>
                    <input type="radio" id="color-2" name="color" value="color-2" checked>
                    <label for="color-2">
                      <span>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                      </span>
                    </label>
                    <p>NO</p>
                </div>
            </div>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->




  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
  AOS.init();
</script>

</body>

</html>