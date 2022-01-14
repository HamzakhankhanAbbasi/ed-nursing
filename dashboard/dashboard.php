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
.userRestrict {
    display: flex;
    align-items: baseline;
    padding: 0 10px;
}
.userRestrict input[type=checkbox]{
    transform: scale(1.3);
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
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#myccount" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="far fa-user"></i>User Info</a>
        <a class="nav-link" id="v-pills-lesson-upload-tab" data-toggle="pill" href="#lesson-upload" role="tab" aria-controls="v-pills-lesson-upload" aria-selected="false"><i class="far fa-edit"></i> Shipping Address</a>
        <a class="nav-link" id="v-pills-lesson-upload-tab" data-toggle="pill" href="#billing-address" role="tab" aria-controls="v-pills-billing-address" aria-selected="false"><i class="fas fa-undo-alt"></i> Billing Address</a>
        <a class="nav-link" id="v-pills-lesson-upload-tab" data-toggle="pill" href="#my-order" role="tab" aria-controls="v-pills-v-pills-order-tab" aria-selected="false"><i class="fas fa-border-all"></i> My Order</a>
        <a class="nav-link" id="v-pills-change-password-tab" data-toggle="pill" href="#change-password" role="tab" aria-controls="v-pills-billing-address" aria-selected="false"><i class="far fa-arrow-alt-circle-left"></i>  Change Password</a>
      </div>

    </div>
  </aside>

  <div class="right-box-wrap">
   <div class="tab-content" id="v-pills-tabContent">
    	<!-- My Account Tab -->
      <div class="tab-pane fade show active" id="myccount" role="tabpanel" aria-labelledby="v-pills-home-tab">
  	 <div class="row">
      <div class="col-lg-8 col-md-12 col-12 m-auto">
       <h5 class="black-head">Welcome to Your Account</h5>
       <div class="user-info-box">

        <div class="avatar-upload">
          <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"><i class="fas fa-plus"></i></label>
          </div>
          <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(assets/images/user-image.png);">
            </div>
          </div>
        </div>
         <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="Full Name" name="customer_fname" data-validation="required name" required="">
             </div>
          </div>
           <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="Your Email" name="customer_fname" data-validation="required name" required="">
             </div>
          </div>
           <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="Phone Number" name="customer_fname" data-validation="required name" required="">
             </div>
          </div>
          <button type="submit" class="card-btn">Submit</button>
</div>

</div>
</div>
</div>



<!-- Lesson Upload Tab -->
<div class="tab-pane fade" id="lesson-upload" role="tabpanel" aria-labelledby="v-pills-lesson-upload-tab">
  <div class="row">
   <div class="col-lg-10 col-md-12 col-12 m-auto">
    <div class="user-info-box">
    <div class="shipping-wrap">
        <div class="form-card">
        <div class="row">
          <div class="row">
    <div class="col-md-12">
       <h4>Shipping Information</h4>
    </div>
    <div class="col-md-6">
       <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="First Name" name="customer_fname" data-validation="required name" required="">
             </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="Last Name" name="customer_lname" data-validation="required name" required="">
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="text" name="billing_street" class="form-control checkout-form-1" placeholder="Street Address" data-validation="required" required="">
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="email" class="form-control checkout-form-1" placeholder="Email" name="customer_email" data-validation="required email" required="">
       </div>
    </div>
    <div class="col-md-6">
       <div class="row">
          <div class="col-md-6">
             <div class="form-group">
                <input type="text" name="billing_city" class="form-control checkout-form-1" placeholder="Town / City" data-validation="required" required="">
             </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="ZIP Code" name="orders_zip" data-validation="required number" required="">
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="number" class="form-control checkout-form-1" placeholder="Phone" name="customer_phone" data-validation="required number" required="">
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <select id="billing_state" name="billing_state" class="form-control checkout-form-1" placeholder="State" data-validation="required" required="" style="color: #000">
             <option value="">Select States</option>
             <option value="AL">Alabama</option>
             <option value="AK">Alaska</option>
             <option value="AS">American Samoa</option>
             <option value="AZ">Arizona</option>
          </select>
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="text" class="form-control checkout-form-1" name="additional_notes" placeholder="Additional Brief" data-validation="required" required="">
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <select id="billing_country" name="billing_country" class="form-control checkout-form-1" placeholder="Country" data-validation="required">
             <option value="USA">United States</option>
          </select>
       </div>
    </div>
        </div>
    </div>
     <button type="submit" class="card-btn">Submit</button>
    </div>

  </div>
    </div>
    
</div>
</div>
</div>

<div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="v-pills-billing-address-tab">
  <div class="row">
   <div class="col-lg-10 col-md-12 col-12 m-auto">
    <div class="user-info-box">
          <div class="form-card">
          <div class="row">
      <div class="col-md-12">
         <h4>Billing Information</h4>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control checkout-form-1" placeholder="First Name" name="customer_fname" data-validation="required name" required="">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control checkout-form-1" placeholder="Last Name" name="customer_lname" data-validation="required name" required="">
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <input type="text" name="billing_street" class="form-control checkout-form-1" placeholder="Street Address" data-validation="required" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <input type="email" class="form-control checkout-form-1" placeholder="Email" name="customer_email" data-validation="required email" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <input type="text" name="billing_city" class="form-control checkout-form-1" placeholder="Town / City" data-validation="required" required="">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control checkout-form-1" placeholder="ZIP Code" name="orders_zip" data-validation="required number" required="">
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <input type="number" class="form-control checkout-form-1" placeholder="Phone" name="customer_phone" data-validation="required number" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <select id="billing_state" name="billing_state" class="form-control checkout-form-1" placeholder="State" data-validation="required" required="" style="color: #000">
               <option value="">Select States</option>
               <option value="AL">Alabama</option>
               <option value="AK">Alaska</option>
               <option value="AS">American Samoa</option>
            </select>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <input type="text" class="form-control checkout-form-1" name="additional_notes" placeholder="Additional Brief" data-validation="required" required="">
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <select id="billing_country" name="billing_country" class="form-control checkout-form-1" placeholder="Country" data-validation="required">
               <option value="USA">United States</option>
            </select>
         </div>
      </div>
   </div> <button type="submit" class="card-btn">Submit</button>
          </div>

</div>
    
</div>
</div>
</div>

<!--my-order-tab -->
<div class="tab-pane fade" id="my-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
    <!--card-section-start -->
    <section class="our-nursing-course-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
						<div class="course-heading-cont">
							<div class="short-heading-red">
								<p>
									Available Courses
								</p>
							</div>	
							<div class="online-heading-desc">
								<p>
									Master Ed. Nursing Courses
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="d-card">
						    <a href="online-detail.php">
    							<div class="card-img-cont">
    							
    								<img src="assets/images/nursing-course.png" class="img-fluid card-image">
    								<!--<p class="card-img-text"><span>$1200.00 /</span> 1 Month</p>-->
    							
    							</div>
							</a>
							<div class="card-text-cont">
								<div class="card-first-row">
									<div class="card-heading">
										<p>Review For RN Students</p>
									</div>
									<div class="rate-text">
										<i class="fas fa-star"></i>
										<p>4.5 (50)</p>
									</div>
								</div>
								
							
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						    <div class="d-card">
						      <a href="online-detail.php">   
							<div class="card-img-cont">
    								
    								<img src="assets/images/nursing-course-1.png" class="img-fluid card-image">
    								<!--<p class="card-img-text"><span>$1200.00 /</span> 1 Month</p>-->
    						
							</div>
							</a>
							<div class="card-text-cont">
								<div class="card-first-row">
									<div class="card-heading">
										<p>Review For LPN Students</p>
									</div>
									<div class="rate-text">
										<i class="fas fa-star"></i>
										<p>4.5 (50)</p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="d-card">
						     <a href="online-detail.php">
							<div class="card-img-cont">
						
								<img src="assets/images/online-course.jpg" class="img-fluid card-image">
								<!--<p class="card-img-text"><span>$1200.00 /</span> 1 Month</p>-->
							
							</div>
							</a>
							<div class="card-text-cont">
								<div class="card-first-row">
									<div class="card-heading">
										<p>Review For CNA Students</p>
									</div>
									<div class="rate-text">
										<i class="fas fa-star"></i>
										<p>4.5 (50)</p>
									</div>
								</div>
							
						
							</div>
						</div>
					</div>
				
				</div>
					
			</div>
			
		</section>
    <!--card-section-end -->
    <!--order-shop-start -->
    <section class="our-nursing-course-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
						<div class="course-heading-cont">
							<div class="short-heading-red">
								<p>
									Order Shop
								</p>
							</div>	
							<div class="online-heading-desc">
								<p>
									Master Ed.Order Shop
								</p>
							</div>
						</div>
					</div>
				</div>
		
				<div class="row">
				    <div class="col-12 col-md-12 col-lg-12 mb-2">
				        
				    
				    <!-- table-start-->
				    <table id="example" class="table table-striped table-bordered" style="width:100%" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
          
        </tbody>
        <tfoot>
            <!--<tr>-->
            <!--    <th>Name</th>-->
            <!--    <th>Position</th>-->
            <!--    <th>Office</th>-->
            <!--    <th>Age</th>-->
            <!--    <th>Start date</th>-->
            <!--    <th>Salary</th>-->
            <!--</tr>-->
        </tfoot>
    </table>
				    <!--table-end-->
				    </div>
				    
				</div>
					
			</div>
			
		</section>
    <!--order-shop-end -->
    
  <div class="row">
      
<!--   <div class="col-lg-10 col-md-12 col-12 m-auto">-->
<!--    <div class="user-info-box">-->
<!--          <div class="form-card">-->
<!--          <div class="row">-->
<!--      <div class="col-md-12">-->
<!--         <h4>Billing Information</h4>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="row">-->
<!--            <div class="col-md-6">-->
<!--                <div class="form-group">-->
<!--                  <input type="text" class="form-control checkout-form-1" placeholder="First Name" name="customer_fname" data-validation="required name" required="">-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--               <div class="form-group">-->
<!--                  <input type="text" class="form-control checkout-form-1" placeholder="Last Name" name="customer_lname" data-validation="required name" required="">-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="form-group">-->
<!--            <input type="text" name="billing_street" class="form-control checkout-form-1" placeholder="Street Address" data-validation="required" required="">-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="form-group">-->
<!--            <input type="email" class="form-control checkout-form-1" placeholder="Email" name="customer_email" data-validation="required email" required="">-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="row">-->
<!--            <div class="col-md-6">-->
<!--               <div class="form-group">-->
<!--                  <input type="text" name="billing_city" class="form-control checkout-form-1" placeholder="Town / City" data-validation="required" required="">-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--               <div class="form-group">-->
<!--                  <input type="text" class="form-control checkout-form-1" placeholder="ZIP Code" name="orders_zip" data-validation="required number" required="">-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="form-group">-->
<!--            <input type="number" class="form-control checkout-form-1" placeholder="Phone" name="customer_phone" data-validation="required number" required="">-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="form-group">-->
<!--            <select id="billing_state" name="billing_state" class="form-control checkout-form-1" placeholder="State" data-validation="required" required="" style="color: #000">-->
<!--               <option value="">Select States</option>-->
<!--               <option value="AL">Alabama</option>-->
<!--               <option value="AK">Alaska</option>-->
<!--               <option value="AS">American Samoa</option>-->
<!--            </select>-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="form-group">-->
<!--            <input type="text" class="form-control checkout-form-1" name="additional_notes" placeholder="Additional Brief" data-validation="required" required="">-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="col-md-6">-->
<!--         <div class="form-group">-->
<!--            <select id="billing_country" name="billing_country" class="form-control checkout-form-1" placeholder="Country" data-validation="required">-->
<!--               <option value="USA">United States</option>-->
<!--            </select>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div> <button type="submit" class="card-btn">Submit</button>-->
<!--          </div>-->

<!--</div>-->
    
<!--</div>-->

</div>
</div>
<!--End -->

 <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="v-pills-change-password-tab">
  <div class="row">
   <div class="col-lg-10 col-md-12 col-12 m-auto">
  <div class="user-info-box">
   <div class="checkout-form payment-card">
    <p class="title">Change Password</p> 
     <div class="modal-body p-0">

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
</div>
</div>
</div>
</div>



<!-- Tabs End -->


</div>
</section>


<?php include 'inc/footer.php'; ?>	

