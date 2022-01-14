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


.main-heading p {
    text-align: center;
    font-size: 45px;
    color: #181818;
    font-weight: 600;
    line-height: 1.2;
}
.border-class {
    padding: 17px 0;
}
.border-class hr {
    width: 240px;
    margin: 0 auto;
    padding-bottom: 10px;
}
.heading-desc p {
    text-align: center;
    font-size: 16px;
    color: #181818;
}
.product-main-heading {
    font-size: 30px;
    color: #181818;
    font-weight: 600;
    line-height: 1.2;
    padding: 10px 0;
}
.product-main-heading-desc {
    font-size: 16px;
    color: #6b6a75;
    /* font-weight: 600; */
    line-height: 1.2;
    padding: 0px 0px 20px 0px;
}
.cart-icon-cont {
    display: flex;
    align-items: center;
}
.cart-icon-cont i {
    font-size: 40px;
    padding-right: 15px;
}
.cart-icon-cont span {
    font-size: 30px;
}
.product-options .form-control {
    width: 40%;
}
.stock-heading {
    font-size: 23px;
    color: #181818;
    font-weight: 500;
    line-height: 1.2;
    padding-top: 10px;
}
.details-heading {
    font-size: 30px;
    color: #181818;
    font-weight: 500;
    line-height: 1.2;
    padding: 20px 0px 10px 0;
}
ul.detail-list li {
    display: flex;
    padding: 5px 0;
}
ul.detail-list li i {
    margin-right: 8px;
    font-size: 7px;
    line-height: 22px;
}
.plus-minus {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.plus-minus .number {
    padding-right: 30px;
}
.minus, .plus {
    width: 20px;
    background: #bc0000;
    border-radius: 4px;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    color: #FFF;
    cursor: pointer;

}
.plus-minus input {
    height: 28px;
    width: 100px;
    text-align: center;
    font-size: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    display: inline-block;
    vertical-align: middle;
}
.btn-cont {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
}
button.red-button {
    padding: 10px 0px;
    width: 160px;
    border: none;
    border-radius: 5px;
    color: #FFF;
    background-color: #bc0000;
    /* box-shadow: 0px 0px 38px 13px rgb(188 0 0 / 94%); */
    margin: 0 5px;
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
                    <p>Hi,<br><strong>John Doe</strong></p>
                </div>
            </div>
           
             <div class="dashboard-links">
                
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               
                <a class="nav-link active"  href="dashboard.php" ><i class="fas fa-tachometer-alt" ></i>Dashboard</a>
               
              </div>
        
            </div>
            
        </aside>
         <!--tab-start-->
    
         <!--tab-end-->

        <div class="right-box-wrap">
            <section class="product-details-section"> 
			    <div class="container">
				    <div class="row justify-content-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
						<div class="main-heading">
							<p>
								Courses Details
							</p>
						</div>
						<div class="border-class">
							<hr>
						</div>
						<div class="heading-desc">
							<p>
								We're always on the look out for new members to join our team of motivated, passionate personnel.
							</p>
						</div>
					</div>
				</div>
				    <div class="row">
    					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
        				    <div id="sync1" class="slider owl-carousel">
          						<div class="item">
          							 <img src="assets/images/online-course.jpg">
          						</div>
          						<div class="item">
          							 <img src="assets/images/online-course-1.jpg">
          						</div>
          						<div class="item">
          							 <img src="assets/images/online-course-2.jpg">
          						</div>
          						<div class="item">
          							 <img src="assets/images/online-course.jpg">
          						</div>
          						<div class="item">
          							 <img src="assets/images/online-course-1.jpg">
          						</div>
        
        				    </div>
        				    <!--<div id="sync2" class="navigation-thumbs owl-carousel">-->
        					   <!-- <div class="item">-->
        					   <!-- 	 <img src="assets/images/online-course.jpg">-->
        					   <!-- </div>-->
        					   <!-- <div class="item">-->
        					   <!-- 	 <img src="assets/images/online-course-1.jpg">-->
        					   <!-- </div>-->
        					   <!-- <div class="item">-->
        					   <!-- 	 <img src="assets/images/online-course-2.jpg">-->
        					   <!-- </div>-->
        					   <!-- <div class="item">-->
        					   <!-- 	 <img src="assets/images/nursing-course-1.png">-->
        					   <!-- </div>-->
        					   <!-- <div class="item">-->
        					   <!-- 	 <img src="assets/images/nursing-course.png">-->
        					   <!-- </div>-->
        				    <!--</div>-->
    					</div>
					    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
						    <div class="product-text-detail">
							 <div class="product-main-heading">
							 	<p>Cafe Two 14 t-shirt</p>
							 </div>
							 <div class="product-main-heading-desc">
							 	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							 </div>
							 <div class="cart-icon-cont">
							 	<i class="fas fa-cart-plus"></i>
							 	<span>0</span>
							 </div>
                            <!--  <div class="product-options p-0 mt-3">-->
                            <!--<input type="hidden" name="attribute_name[]" value="Color">-->
                            <!--<label style="font-weight: bold;">Color</label>-->
                            <!--<div class="option-images"></div>-->
                            <!--<select name="variant_name[]" id="variant_name" class="form-control mb-3">-->
                            <!--    <option>Select</option>-->
                            <!--    <option>Red</option>-->
                            <!--</select>-->
                            <!--<input type="hidden" name="attribute_name[]" value="Brand">-->
                            <!--<label style="font-weight: bold;">Size</label>-->
                            <!--<div class="option-images"></div>-->
                            <!--<select name="variant_name[]" id="variant_name" class="form-control mb-3">-->
                            <!--    <option>Select</option>-->
                            <!--    <option>Large</option>-->
                            <!--    <option>Medium</option>-->
                            <!--    <option>Small</option>-->

                            <!--</select>-->
                            <!--</div>-->
							 <!--<div class="stock-heading">-->
							 <!--	<p>Stock available</p>-->
							 <!--</div>-->
							 <div class="details-heading">
							 	<p>Details</p>
							 </div>
							 <ul class="detail-list">
							 	<li>
							 		<i class="fa fa-circle"></i>
							 		<P>100% cotton on the neckline</P>
							 	</li>
							 	<li>
							 		<i class="fa fa-circle"></i>
							 		<p>certified and safe</p>
							 	</li>
							 	<li>
							 		<i class="fa fa-circle"></i>
							 		<p>ash in color</p>
							 	</li>
							 	<li>
							 		<i class="fa fa-circle"></i>
							 		<p>Smooth in quality</p>
							 	</li>
							 </ul>
							 <div class="plus-minus">
	                           <div class="number">
									<span class="minus">-</span>
									<input type="text" value="1"/>
									<span class="plus">+</span>
								</div>
                            <div class="btn-cont">
							<a href="#"><button class="red-button">Add to cart</button></a>
							</div>	
                            </div>
						</div>
					</div>
				    </div>
			    </div>
		    </section>

        </div>



    </div>
</section>


<?php include 'inc/footer.php'; ?>	

