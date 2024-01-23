 <?php include "include/header.php" ?>

  <section class="dahboard-wrapper">
    <div class="container">
      <div class="row">
        <section class="sidebar col-md-3">
          <div class="container">
            <div class="card" id="">
              <div class="card-body  ">
                <div class="circle">
                  <img class="my-profile"
                    src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
                </div>
                <div class="identity">
                  <h3>Name</h3>
                  <p>customer@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="sidebar-menu">
              <ul>
                <li class="active"><a href="#"><i class="fa-solid fa-user-tie"></i>Dashboard</a> </li>
                <li><a href="#"><i class="fa-solid fa-tag"></i>Discount</a></li>
                <li><a href="#"><i class="fa-solid fa-clock-rotate-left"></i>Purchase History</a> </li>
                <li><a href="./registration.html" id="manage-profile"><i class="fa-solid fa-user-pen"></i>Manage
                    Profile</a></li>
              </ul>
            </div>
          </div>
        </section>


        <section class="middle col-md-9">
          <div class="">
            <div class="dashboard-heading">
              <h3>Edit Profile</h3>
            </div>
            <form class="row mb-3">
              <div class="form-field">
                <label for="" class="form-about">Full Name</label>
                <input required placeholder="Enter your name" type="text" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Email</label>
                <input required placeholder="Enter your email" type="email" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Phone No.</label>
                <input required placeholder="Enter your number" type="tel" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Enter Your Password</label>
                <input required placeholder="Enter your password" type="password" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Confirm Your Password</label>
                <input required placeholder="Enter your password" type="password" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Enter Company Name</label>
                <input required placeholder="Enter your company name" type="company" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Address 1</label>
                <input required placeholder="Address 1" type="add 1" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Address 2</label>
                <input required placeholder="Address 2" type="add 2" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Enter Your City</label>
                <input required placeholder="City" type="city" name="" id="" />
              </div>
              <div class="form-field">
                <label for="" class="form-about">Enter Your Post Code</label>
                <input required placeholder="Postcode" type="postcode" name="" id="" />
              </div>
              <div class="form-field">
                <label class="form-about">Select Country</label>
                <select id="country" name="country" class="form-control"></select>
              </div>
              <div class="form-field">
                <label class="form-about">Select State</label>
                <select name="state" id="state" class="form-control"></select>
              </div>
              <div class="row upload-file">
                <div class="col-md-4">
                  <p class="form-about ">Upload Aadhar Card Front</p>
                  <input class=" " required placeholder="Aadhar" type="file" name="" id="file" />
                </div>
                <div class="col-md-4 ">
                  <p class="form-about ">Upload Aadhar Card Back</p>
                  <input class=" " required placeholder="Aadhar" type="file" name="" id="fileBack" />
                </div>
                <div class="col-md-4">
                  <p class="form-about ">Company Id</p>
                  <input class="  " required placeholder="Aadhar" type="file" name="" id="companyfile" />
                </div>
              </div>
              <div class="row upload-file">
                <div class="card" id="aside">
                  <div class="card-body mb-5">
                    <div class=" ">
                      <div class="circle">
                        <img class="profile-pic"
                          src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
                      </div>
                      <div class="p-image text-center">
                        <button class="upload-button">Select Image</button>
                        <input class="file-upload d-none" type="file" accept="image/*" />
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="text-end mt-4">
                <input class="btn px-4 py-3 btn-outline-dark" type="submit" value="Update Profile" />
              </div>
            </form>
            <section class="address">
              <div class="row">
                <div class=" col-md-6">
                  <div class="card address-default">
                    <h6>Default Shipping Address</h6>
                    <hr>
                    <p>4471 Nutters Barn Lane Des Moines, IA 50309</p>
                    <p>5252, Alabaster, Alabama</p>
                  </div>
                </div>
                <div class=" col-md-6">
                  <div class="card address-default">
                    <h6>Default Billing Address</h6>
                    <hr>
                    <p>4471 Nutters Barn Lane Des Moines, IA 50309</p>
                    <p>5252, Alabaster, Alabama</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </div>

  </section>
  <!--registration page--> 

  <?php include "include/footer.php" ?>