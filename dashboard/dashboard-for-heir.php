<?php include 'inc/header.php'; ?>

<style>
  .submitForm{
   display: flex;
   justify-content: center;
   margin: 20px 0;
 }
 .submitForm button {
    width: 250px;
    font-size: 20px;
    font-weight: 400;
    background: linear-gradient(180deg, rgba(9,115,171,1) 0%, rgba(9,115,171,1) 40%, rgba(29,142,202,1) 100%);
    margin: 12px 0 0 0;
    border-radius: 8px;
    border: none;
    height: 50px;
    cursor: pointer;
    text-align: center;
    color: #fff;
    outline: none;
    text-transform: uppercase;
  }
 .avatar-uploadnew {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-uploadnew .avatar-editnew {
  position: absolute;
  right: 25px;
  z-index: 1;
  top: 10px;
}
.avatar-uploadnew .avatar-editnew input {
  display: none;
}
.avatar-uploadnew .avatar-editnew input + label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: linear-gradient(180deg, rgba(9,115,171,1) 0%, rgba(9,115,171,1) 40%, rgba(29,142,202,1) 100%);
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgb(0 0 0 / 12%);
    cursor: pointer;
    font-weight: normal;
    transition: all 0.2s ease-in-out;
    text-align: center;
    line-height: 2;
    color: #fff;
}
.avatar-uploadnew .avatar-editnew input + label:hover {
  background: #191919;
}
.avatar-uploadnew .avatar-editnew input + label:after {
  content: "";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-uploadnew .avatar-previewnew {
    width: 190px;
    height: 190px;
    position: relative;
    border-radius: 100%;
    border: 3px solid #0973ab;
    box-shadow: 0px 2px 4px 0px rgb(0 0 0 / 10%);
}
.avatar-uploadnew .avatar-previewnew > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
/* Inner-section-content-start */
.inner-sec-content {
    text-align: center;
}
.database-form-field label {
    font-size: 14px;
    font-weight: 700;
    color: #191919;
    text-align: left;
    display: block;
    margin-bottom: 10px;
    padding-left: 15px;
}
.banner-heading{
    font-size:35px;
    font-weight:900;
    text-transform: capitalize;
}
.banner-gradient{
    background: linear-gradient(180deg, rgba(9,115,171,1) 0%, rgba(9,115,171,1) 40%, rgba(29,142,202,1) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.text-top-space{
    margin:20px 0 0 0;
}
.index-form-text{
    font-size: 16px;
    font-weight: 400;
    color: #191919;
    max-width: 926px;
}
.inner-sec-head {
    text-align: center;
}
.indexsec2-field {
    border-radius: 55px;
    width: 100%;
    outline: none;
    border: 1px solid #a7a7a7;
    padding: 10px 30px;
    font-size: 15px;
    font-weight: 400;
}
/* Inner-section-content-End */
</style>

<section class="dashboard-sec">
	<div class="row">
		
    <aside>
     <div class="side-logo">
      <a href="../index.html"><img src="assets/images/dashboard-logo.png" class="img-fluid"></a>
    </div>
    <div class="user-profile">
      <div class="profile-image">
       <img src="assets/images/user-image.png" class="img-fluid">
     </div>
     <div class="user-name">
       <p>Hi,<br>
         <strong>John Doe</strong></p>
       </div>
     </div>
     <div class="dashboard-links">

       <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#myccount" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="far fa-user"></i> Account</a>

        <!-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myorder" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-shopping-cart"></i> Order Details</a> -->
        <!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#billing" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-file-invoice-dollar"></i> Billing</a> -->
        <a class="nav-link" id="v-pills-lesson-upload-tab" data-toggle="pill" href="#lesson-upload" role="tab" aria-controls="v-pills-lesson-upload" aria-selected="false"><i class="fas fa-file-alt"></i> View Information</a>
        <a class="nav-link" href="../index.php"><i class="fas fa-undo-alt"></i> Back To Home</a>
        <a class="nav-link" href="javascript:;"><i class="far fa-arrow-alt-circle-left"></i> Logout</a>
      </div>

    </div>
  </aside>

  <div class="right-box-wrap">
    <div class="tab-content" id="v-pills-tabContent">
    	<!-- My Account Tab -->
      <div class="tab-pane fade show active" id="myccount" role="tabpanel" aria-labelledby="v-pills-home-tab">
      	
       <h5 class="black-head">Welcome to John Doe’s Account</h5>
       <p class="dashboard-para mb-4">You have "Read-Only" access.  You can view the information the client has posted and the documents the client
			has uploaded, but you cannot modify any content.</p>
       <div class="user-info-box">

        <div class="avatar-upload">
          <!-- <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"><i class="fas fa-plus"></i></label>
          </div> -->
          <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(assets/images/user-image.png);">
            </div>
          </div>
        </div>
        <div class="info-box">
         <div class="user-detail-box">
          <div class="details">
           <label>Full Name</label>
           <p>John Doe</p>
         </div>
         <!-- <div class="edit-btn">
           <a href="javascript:void(0)" data-toggle="modal" data-target="#newUsername-modal">Edit</a>
         </div> -->
       </div>
       <div class="user-detail-box">
        <div class="details">
         <label>Your Email</label>
         <p>johndoe@gmail.com</p>
       </div>
       <!-- <div class="edit-btn">
         <a href="javascript:void(0)" data-toggle="modal" data-target="#newAddress-modal">Edit</a>
       </div> -->
     </div>
     <div class="user-detail-box">
      <div class="details">
       <label>Phone Number</label>
       <p>(+1) 123 456 789 0</p>
     </div>
     <!-- <div class="edit-btn">
       <a href="javascript:void(0)" data-toggle="modal" data-target="#newNumber-modal">Edit</a>
     </div> -->
   </div>
 </div>
</div>

<!-- <div class="change-pass-wrap">
  <div class="pass-btn-box">   
  <h5 class="black-head mb-4">Password & Authentication</h5>
   <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newPassword-modal">Change Password</a>
   <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newEmail-modal">TWo-way Authentication</a>
 </div>
 <div class="pass-btn-box">
  <h5 class="black-head mb-4">View Subscription Details</h5>
   <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newPassword-modal">My Subscription</a>
 </div>
</div> -->	
</div>

<!-- My Order Tab -->
<!-- <div class="tab-pane fade" id="myorder" role="tabpanel" aria-labelledby="v-pills-profile-tab">
 <h5 class="black-head">Order Details</h5>
 <div class="order-detail-box">
   <table class="display nowrap" id="example" style="width:100%">
    <thead class="thead-dark">
      <tr>
       <th scope="col">Oder#</th>
       <th scope="col">Lesson Name</th>
       <th scope="col">Status</th>
       <th scope="col">Total</th>
       <th scope="col">Last update</th>
     </tr>
   </thead>
   <tbody>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>Today</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>Today</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="yellow-color">Shipped</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>Yesterday</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Fullfilled</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td class="yellow-color"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
      <td>June 12, 2020</td>
    </tr>
  </tbody>
</table>

</div>
</div> -->

<!-- Billingt Tab -->
<!-- <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="v-pills-messages-tab">
 <h5 class="black-head">Payment Method</h5>
 <div class="payment-box">
  <div class="payment-text">
   <p>No payment method saved</p>
   <label>Checkout faster by saving a payment method</label>
 </div>
 <div class="payment-btn">
   <button type="button" class="black-btn" data-toggle="modal" data-target="#payment-modal">add payment method</button>
 </div>
</div>
<div class="transaction-history-box">
  <h5 class="black-head m-0">Transaction History</h5>
  <div class="alert alert-box" role="alert">
   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
 </div>
</div>
</div> -->

<!-- Lesson Upload Tab -->
<div class="tab-pane fade" id="lesson-upload" role="tabpanel" aria-labelledby="v-pills-lesson-upload-tab">
  <div class="row">
   <div class="col-lg-8 col-md-12 col-12 m-auto">
    <div class="upload-head">
     <h2 class="black-head">View Information</h2>
     <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
   </div>
   <form>
     <div class="contact-box">
       <div class="avatar-uploadnew">
        <!-- <div class="avatar-editnew">
          <input type='file' id="imageUploadnew" accept=".png, .jpg, .jpeg" />
          <label for="imageUploadnew">
            <i class="fas fa-pencil-alt"></i>
          </label>
        </div> -->
        <div class="avatar-previewnew">
          <div id="imagePreviewnew" style="background-image: url(assets/images/user-image.png);">
          </div>
        </div>
      </div>
         
    <!-- inner-section-content-start -->
    <div class="inner-sec-content">
        
        <!-- will ot trust registration 7 form starts -->
                <div class="willOrTrustFormDashboard">
                    <div class="inner-sec-head">
                        <p class="banner-heading banner-gradient">Account / Database &amp; Storage Area</p>
                    </div>
                    <!--<div class="inner-sec-content">-->
                    <!--    <p class="registration-7-text mt-3 text-top-space">-->
                    <!--        What is the exact name and exact mailing address which you want someone to enter before they can learn if you have a Will or Trust registered on LocateMyWill.com?-->
                    <!--    </p>-->
                    <!--    <p class="registration-8-text mt-3 text-top-space">-->
                    <!--        Kindly fill all applicable fields, but those with asterisks (*) are required.-->
                    <!--    </p>-->
                    <!--</div>-->
                    <div class="registration7-form mt-3">
                        <p class="banner-heading ">Personal Information</p>
                    </div>
                    <div class="registration7-FormField">
                        <div class="row mt-2 mb-2 m-0">
                            <div class="col-12 col-md-6 col-lg-6 p-1">
                                <input type="text" class="indexsec2-field" placeholder="First Name*" disabled>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <input type="text" class="indexsec2-field" placeholder="Middle Name" disabled>
                            </div>
                        </div>
                        <div class="row  mb-2 m-0">
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <input type="text" class="indexsec2-field" placeholder="Last Name*" disabled>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <input type="text" class="indexsec2-field" placeholder="Sr.,Jr.,III" disabled>
                            </div>
                        </div>
                        <!--<div class="row  mb-2 m-0">-->
                        <!--    <div class="col-12 col-md-6 col-lg-6  p-1">-->
                        <!--        <input type="text" class="indexsec2-field" placeholder="Street Number*" disabled>-->
                        <!--    </div>-->
                        <!--    <div class="col-12 col-md-6 col-lg-6  p-1">-->
                        <!--        <input type="text" class="indexsec2-field" placeholder="Street Name*" disabled>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <div class="registration7-form mt-3">
                        <p class="banner-heading ">Address Information</p>
                    </div>
                    <div class="registration7-FormField">
                        <div class="row mt-2 mb-2 m-0">
                            <div class="col-12 col-md-6 col-lg-6 p-1">
                                <input type="text" class="indexsec2-field" placeholder="Street Number*" disabled>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <input type="text" class="indexsec2-field" placeholder="Street Name*" disabled>
                            </div>
                        </div>
                        <div class="row  mb-2 m-0">
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <input type="text" class="indexsec2-field" placeholder="Suffix (Road, Ave, Blvd, etc,)" disabled>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <input type="text" class="indexsec2-field" placeholder="Apartment Number" disabled>
                            </div>
                        </div>
                        <div class="row  mb-2 m-0">
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <input type="text" class="indexsec2-field" placeholder="City*" disabled>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6  p-1">
                                <!--<input type="text" class="indexsec2-field" placeholder="State*">-->
                                <select class="indexsec2-field" id="exampleFormControlSelect1" disabled>
                                    <option selected="" disabled="">State*</option>
                                    <option>California</option>
                                    <option>Arizona</option>
                                </select>
                            </div>
                        </div>
                        <div class="row  mb-2 m-0">
                            <div class="col-12 col-md-12 col-lg-12  p-1">
                                <input type="text" class="indexsec2-field" placeholder="Zip Code*" disabled>
                            </div>
                        </div>
                    </div>
                    <!--<div class="registration7-FormContent mt-4 mb-4">-->
                    <!--    <p class="FormContent-text">If they enter any different version of your name or of your address they will not get in, so be sure to write your name and address as they know them.  Some examples, do they know you as "Bill" or as "William"? or as "Peggy" or "Margaret"?  Do you normally use "Sr., Jr., or III"?</p>-->
                    <!--</div>-->
                    <div class="registration7-FormField mt-5 mb-5">
                        <div class="database-form-field mb-2">
                            <label for="enter-answer">Who holds my Will or Trust?</label>
                            <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
                            <label for="enter-answer enter-information">Enter only brief identifying information, such as “Aunt Sally” or “Son Robert.”  Do not provide address
                            or phone number.</label>
                        </div>
                        <p class="reg-separator">or</p>
                        <div class="database-form-field database-form-field-2 mb-2">
                            <label for="enter-answer">My will is held by my lawyer</label>
                            <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
                            <label for="enter-answer enter-information">Enter the lawyer's Name, Firm, Address, phone and email address.</label>
                        </div>
                        <p class="reg-separator">or</p>
                        <div class="database-form-field  database-form-field-2 mb-2">
                            <label for="enter-answer">Here is where my will can be located</label>
                            <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
                            <label for="enter-answer enter-information">Enter description such as, “My will is taped behind the heavy mirror in my living room,” or “My will is in
                            my safe and Tommy has the combination.”</label>
                        </div>
                        <div class="database-form-field mt-4">
                            <label for="enter-answer">Enter the date of the current version of your Will or Trust</label>
                            <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>Answer left blank by Account Holder enter-information">Enter the date, such as “January 1, 2017.”</label>
                        </div>
                        <!--<div class="Passcontent">-->
                        <!--    <div class="registration7-FormContent mt-4 mb-4">-->
                        <!--        <p class="FormContent-text">Your "Account password" and your "Read-Only Database &amp; Storage password" are different. The Account-->
                        <!--            password allows you to enter your Account settings, such as your profile and contact info.  Importantly, the-->
                        <!--            Account password also allows you to enter (and change) information in your Database and upload documents to your Storage Area.  You should NOT give anyone your Account password.  Individuals to whom you have given your "Read-Only Database &amp; Storage password" can see the answers and information you provide as well as view the documents you have uploaded into the Storage area, but they cannot change anything.  -->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--    <div class="registration7-FormContent mt-4 mb-4">-->
                        <!--        <p class="FormContent-text">Go to "Change passwords" if you wish to change either your "Account password" or your "Read-Only Database &amp; Storage password" or both. Provide only the "Read-Only Database &amp; Storage password" – and NOT your-->
                        <!--        Account password – to those who should be able to view your information when you’re gone.  Be sure to write down your passwords in a secure place so as not to lose them.  Let your heirs know that if they lose their "Read-Only" password, we will not provide it to them.  We can't take the chance of providing your passwords to the wrong person, and we cannot conduct an investigation to determine if the password request is worthy or not, nor can we afford the liability for giving out a password to the wrong person. -->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--    <div class="registration7-FormContent mt-4 mb-4">-->
                        <!--        <p class="FormContent-text">You can always change your passwords.  Your data will be retained under the new password.  If you wish to revoke someone’s "Read-Only" privileges, just change the "Database &amp; Storage password" and provide the new Read-Only "Database &amp; Storage password" to someone else.</p>-->
                        <!--    </div>-->
                        <!--    <div class="registration7-FormContent mt-4 mb-4">-->
                        <!--        <p class="FormContent-text">If you do not wish for anyone to be able to view your secure, encrypted site until after you’re gone, do not provide the password to anyone, but instead attach it to your Will or Trust, so that when the Will or Trust is seen the information you have posed on LocateMyWill.com will then be known to your heirs.</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="drag-button-2">-->
    				            <!--	<button type="file" class="enter hover-btn">Enter my "Database &amp; Storage Area"-->
         			            <!--			<span><i class="fas fa-angle-right"></i></span> -->
        				        <!--	</button>-->
				        <!--</div>-->
            
                    </div>
                </div>
                <!--will ot trust registration 7 form ends-->
	
  <div class="inner-sec-head mt-4 mb-4">
    <p class="banner-heading banner-gradient">Funeral Information</p>
  </div>
  <form class="database-form mt-2">
    <div class="database-form-field mb-2">
      <label for="enter-answer">Pre-funeral, do you want a wake or a visitation?  Open or Closed Coffin?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Pre-funeral, are you an organ donor? </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Do you have a preference for burial or cremation?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Do you want a funeral or a Celebration of Life ceremony?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">What are your religious requirements?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Who should officiate?  Which Church, Temple, Mosque?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Have you chosen a Funeral Home? If yes, Please provide name of Funeral Director, Funeral home and address.</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Have you done "Pre-Planning" with a Funeral Director?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">If you want to be buried, what kind of coffin do you want?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">If your preference is for burial, are there any items you want placed in your coffin, and how do you wish to be dressed? </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Have you bought a cemetery plot or is there a family plot?, and if so, provide the location information.</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Whom do you wish to be buried next to, and has this been provided for?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">If you have chosen to be cremated, should your ashes be interred or scattered, or do you wish for them to be retained by a family member?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Any special hymns, music, poems you want sung or recited? Any special prayers you want recited?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">The Memorial Card should include the following information / prayers</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Do you qualify for, and desire, a military funeral / burial?  If yes, specify Branch and years served, retirement rank and date.</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Whom do you want to delivery eulogies? </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Whom do you want to serve as pallbearers?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Your thoughts as to what you want to appear in your obituary?  </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Any thoughts on your monument and headstone engraving?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Thoughts on an after-funeral reception?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
  </form>
  <div class="inner-sec-head mt-4 mb-4">
    <p class="banner-heading banner-gradient">Non-funeral information</p>
  </div>
  <!--<p class="index-form-text text-top-space text-center">(Do NOT put your username and password information for these sites here.  But you can say-->
  <!--something such as, “My usernames and passwords are in my safe and Johnny has the combination,” or “My usernames and passwords are taped behind the credenza in the Dining Room.”)</p>-->
  <form class="database-form mt-4">
    <div class="database-form-field mb-2">
      <label for="enter-answer">Where do you have bank accounts?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Stock accounts?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Real Estate?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Safety Deposit Boxes?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Public Storage Spaces?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Post Office boxes?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled> 
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Life Insurance?  </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Location of keys? </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Who knows the Alarm System codes?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Who knows the combinations to any safes?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Who has your email, Facebook, etc. passwords?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Who owes you money? Upload the Promissory Note if available.</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">To whom do you owe money and how much?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
  </form>
  <div class="inner-sec-head mt-4 mb-4">
    <p class="banner-heading banner-gradient">Special Thoughts</p>
  </div>
  <form class="database-form mt-4">
    <div class="database-form-field mb-2">
      <!--<label for="enter-answer">You can’t change your Will or Trust here, but you can provide context, thoughts, and final words, and-->
      <!--you can add to these or change them as often as you’d like. </label>-->
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">While you can't change your Will or Trust here, you can advise your family of your wishes for the
        disposition of your property, such as, "I'd like my piano to go to my nephew Billy," and your family
        can choose whether to honor your requests. If anyone objects, he or she can go to court, and the
      disposition stated in your Will will usually prevail.</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Any charities you want contributions made to?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
  </form>
  <div class="inner-sec-head mt-4 mb-4">
    <p class="banner-heading banner-gradient">Who needs to be notified</p>
  </div>
  <form class="database-form mt-4">
    <div class="database-form-field mb-2">
      <label for="enter-answer">Social Security </label>
      <input type="text " name="enter-answer" class="indexsec2-field"  value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Union or Employer Pension </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Doctors</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Lawyers</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Landlords</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Mortgage Banks </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Accountant, Tax Preparer</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Names of Executors, Administrators, Trustees</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Do your Executors, Administrators, Trustees have your Social Security number, your Driver License number, and other information they will need to distribute your estate and file your final tax return? </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder">
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Financial Advisors </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Insurance Agent</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Friends?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Relatives?</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Have you ever given a Power of Attorney and/or Durable Power of Attorney or Power of Attorney for Health
        Care? (Remember, Powers of Attorney end when you die.  However, these persons may have significant knowledge
        and records that will be useful to your Executors, Administrators, or Trustees. In many cases, the same persons who
      held Powers of Attorney transition to Executors, Administrators, or Trustees, in accordance with your Will or Trust provisions.)</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Others</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
  </form>
  <div class="inner-sec-head mt-4 mb-4">
    <p class="banner-heading banner-gradient">Family</p>
  </div>
  <form class="database-form mt-4">
    <div class="database-form-field mb-2">
      <label for="enter-answer">Name of spouse</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Names of Children </label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Names of Grandchildren</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
    <div class="database-form-field mb-2">
      <label for="enter-answer">Names of dogs, cats, horses, etc., and your request for their re-homing.</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
  </form>
  <div class="inner-sec-head mt-4 mb-4">
    <p class="banner-heading banner-gradient">Other Thoughts</p>
  </div>
  <form class="database-form mt-4">
    <div class="database-form-field mb-2">
      <label for="enter-answer">Enter any other special thoughts, comments, instructions, hopes, prayers that you wish to provide.</label>
      <input type="text" name="enter-answer" class="indexsec2-field" value="Answer left blank by Account Holder" disabled>
    </div>
  </form>
</div>
    <div class="uploadedImageWrap mt-5 mb-5">
        <img src="assets/images/user-image-5.jpg" class="img-fluid pr-3" >
        <img src="assets/images/user-image-3.jpg" class="img-fluid pr-3" >
        <img src="assets/images/user-image-5.jpg" class="img-fluid pr-3" >
        <img src="assets/images/user-image-3.jpg" class="img-fluid pr-3" >
    </div>
    <!--<div class="submitForm">-->
    <!--  <button type="submit" class="">Save</button>-->
    <!--</div>-->
  </div>
</form>
</div>
</div>
</div>
</div>
</div>

<!-- Tabs End -->

</div>
</section>

<?php include 'inc/footer.php'; ?>	