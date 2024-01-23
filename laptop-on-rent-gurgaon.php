<?php include "include/header.php" ?>
    <style>
        select.form-select{
            width: 25%;
        }
   
        .form-control-sm {
            padding: 7px 12px;
            }       
            .card-header{
                background: transparent;
            }
            .list-inline li .fa-angle-down {
            transition: transform 0.3s ease;
        }
        .list-inline li.expanded .fa-angle-down {
            transform: rotate(180deg);
        }
        .label-width {
               width: 100px; /* Adjust the width as needed */
          }
          .search-cate{
            font-size: 14px !important; 
            padding: 8px 35px !important;
          }
   .select-ul-li li {
        display: none;
        cursor: pointer;
        padding: 0px 10px;
        min-width: 132px;
}

.select-ul-li li:first-child {
  display: block;
  border-top: 0px;
}

.select-ul-li {
  border-bottom: 1px solid rgb(210, 210, 210);
  display: inline-block;
  padding: 0;
  position: relative;
}

.select-ul-li li:hover {
  background-color: #ddd;
}

.select-ul-li li:first-child:hover {
  background-color: transparent;
}

.select-ul-li.open li {
  display: block;
}

.select-ul-li span:before {
  position: absolute;
  top: 0;
  right: 15px;
  content: "\2193";
}

.select-ul-li.open span:before {
  content: "\2191";
}
.product {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style> 
    <section id="banner-image">
        <!-- breadcrumb strat -->
   <div class="container">
       <div class="row">
           <div class="col-md-12 mt-2">
               <h2 class=" text-white pb-2 pt-5 text-center">Categories</h2>
               <nav aria-label="breadcrumb" style="margin: 0 auto;">
                   <ol class="breadcrumb d-flex justify-content-center">
                     <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                     <li class="breadcrumb-item active pt-1" aria-current="page" style="color: #01b7e0; font-size: 14px;">Categories</li>
                   </ol>
                 </nav>
           </div>
       </div>
   </div>
    <!-- breadcrumb end -->
    </section>
    <!-- form-->
    <section>
        <div class="container mt-5">
            <div class="row">
                <form action="#" class="d-flex flex-column flex-md-row justify-content-between mb-3 align-items-center">
                    <h4 class="mb-3 mb-md-0">Categories</h4>
                    <div class="d-flex align-items-center">
                        <label for="sortSelect" class="label-width me-2">Sort by:</label>
                        <select class="form-select" id="sortSelect" aria-label="">
                            <option selected="">Default</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="ms-md-3">
                            <input type="text" class="form-control form-control-sm" id="search" name="search" placeholder="Type & Enter">
                        </div>
                        <div class="ms-md-3"> <!-- Added ms-md-3 class for spacing -->
                            <input class="form-control" type="text" style="border-radius: 0;" placeholder="Search">
                        </div>
                        <a href="" class="" style="font-size: 10px;"><button type="button" class="btn btn-warning animation search-cate">Search</button></a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- form end-->
    <!-- catagory strat-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h6>More Option</h6>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline">
                                <li style="border-bottom: 1px solid rgb(210, 210, 210); "><a href="index.html" class="text-decoration-none text-dark mx-2" style="font-size: 13px; ">Home</a></li>
                                <span></span>
                              </ul>
                              <ul class="select-ul-li">
                                <li><a href="#" class="text-decoration-none text-dark" style="font-size: 13px;">Leptop</a></li>
                                <li class="mt-2 mb-2"><a href="#" class="text-decoration-none text-dark" style="font-size: 13px;">Leptop On rent</a></li>
                                <span></span>
                              </ul>
                              <ul class="select-ul-li">
                                <li><a href="#" class="text-decoration-none text-dark" style="font-size: 13px;">Heater </a></li>
                                <li class="mt-2 mb-2"><a href="#"  class="text-decoration-none text-dark" style="font-size: 13px;">Heater On Rent</a></li>
                                <span></span>
                              </ul>
                              <ul class="select-ul-li">
                                <li><a href="#" class="text-decoration-none text-dark" style="font-size: 13px;">AC on Rent</a></li>
                                <li class="mt-2 mb-2"><a href="#"  class="text-decoration-none text-dark" style="font-size: 13px;">Window AC on Rent</a></li>
                                <li class="mt-2 mb-2"><a href="#"  class="text-decoration-none text-dark" style="font-size: 13px;">Split AC on Rent</a></li>
                                <span></span>
                              </ul>
                        </div>
                    </div>
                    <!--product filter-->
                    <div class="card mt-5">
                        <div class="card-header">
                            <h6>Filter</h6>
                        </div>
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input filter" type="checkbox" value="" id="allCheckbox" data-filter="all">
                            <label class="form-check-label" for="allCheckbox">All</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input filter" type="checkbox" value="" id="laptopCheckbox" data-filter="laptop">
                            <label class="form-check-label" for="laptopCheckbox">Laptop</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input filter" type="checkbox" value="" id="oldLaptopCheckbox" data-filter="oldLaptop">
                            <label class="form-check-label" for="oldLaptopCheckbox">Old Laptop</label>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3" class="content" id="all">
                            <div class="card">
                                <div class="card-header">
                                 <a href="single-product.html"><img src="images/single-product/product-single.jpg" class="w-100"></a> 
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold"> <a href="single-product.html" class="text-decoration-none" style="color: black;">HP LAPTOP CORE I5</h6></a>
                                    <p style="font-size: 10px;">HP LAPTOP CORE I5</p>
                                    <p style="font-size: 10px;">HP Core i5</p>
                                    <p class="fw-bold">₹1,000.00</p>
                                    <p class="" style="font-size: 11px; color: gray;">HP laptop i5 3, 4 and 5 generation. RAM  4GB or 8GB. Storage 500 GB to 1 TB. Windows 7 or 10...
                                    </p>
                                    <hr>
                                    <button class="animate-btx"> 
                                        <a href="single-product.php"><button type="button" class="btn btn-warning animation">View More</button></a>   
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" class="content" id="laptop">
                            <div class="card">
                                <div class="card-header">
                                 <a href=""><img src="images/single-product/product-single.jpg" class="w-100"></a> 
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold">HP LAPTOP CORE I5</a></h6>
                                    <p style="font-size: 10px;">HP LAPTOP CORE I5</p>
                                    <p style="font-size: 10px;">HP Core i5</p>
                                    <p class="fw-bold">₹1,000.00</p>
                                    <p class="" style="font-size: 11px; color: gray;">HP laptop i5 3, 4 and 5 generation. RAM  4GB or 8GB. Storage 500 GB to 1 TB. Windows 7 or 10...
                                    </p>
                                    <hr>
                                    <button class="animate-btx"> 
                                        <a href="single-product.php"><button type="button" class="btn btn-warning animation">View More</button></a>   
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" class="content" id="oldLaptop">
                            <div class="card">
                                <div class="card-header">
                                 <a href=""><img src="images/single-product/product-single.jpg" class="w-100"></a> 
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold">HP LAPTOP CORE I5</h6>
                                    <p style="font-size: 10px;">HP LAPTOP CORE I5</p>
                                    <p style="font-size: 10px;">HP Core i5</p>
                                    <p class="fw-bold">₹1,000.00</p>
                                    <p class="" style="font-size: 11px; color: gray;">HP laptop i5 3, 4 and 5 generation. RAM  4GB or 8GB. Storage 500 GB to 1 TB. Windows 7 or 10...
                                    </p>
                                    <hr>
                                    <button class="animate-btx"> 
                                        <a href="single-product.php"><button type="button" class="btn btn-warning animation">View More</button></a>   
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                 <a href=""><img src="images/single-product/product-single.jpg" class="w-100"></a> 
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold">HP LAPTOP CORE I5</h6>
                                    <p style="font-size: 10px;">HP LAPTOP CORE I5</p>
                                    <p style="font-size: 10px;">HP Core i5</p>
                                    <p class="fw-bold">₹1,000.00</p>
                                    <p class="" style="font-size: 11px; color: gray;">HP laptop i5 3, 4 and 5 generation. RAM  4GB or 8GB. Storage 500 GB to 1 TB. Windows 7 or 10...
        
                                    </p>
                                    <hr>
                                    <button class="animate-btx"> 
                                        <a href="single-product.php"><button type="button" class="btn btn-warning animation">View More</button></a>   
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 mt-5 p-tag">
                    <p>
                        Although renting a laptop may be unfamiliar to us, successful businesses are no strangers to making this wise option in the first place. With the advent of work-from-home culture and online schooling during the epidemic, it is undeniable that firms are struggling from the surge in demand for laptops and other portable devices. Everyone, of course, wants to invest in cutting-edge technology to attain peak performance, but what should you do if your budget is a little restricted? It's possible that renting a laptop for your team or simply renting IT equipment, in general, will solve your problem. For your convenience, we've compiled a summary of some of the benefits of this popular option to assist you in making an informed decision.
                    </p>
                    <p>
                        Purchasing laptops or any other IT equipment is not a simple decision - you must first establish budgets, then examine the different brands available on the market, and lastly, determine what connects with your needs and what is currently trendy! After all, purchasing information technology gear is a significant financial commitment in most circumstances. A laptop rental is an easy answer in this situation, as it provides greater flexibility and room for error. If you plan on renting a laptop from Cool Care Services, you should be aware of the following:
                    </p>
                    <ul class="list-inline">
                        <li>
                            - There are no up-front fees associated with your rent.
                        </li>
                        <li>
                           - Get the same high-quality results at a low cost with our simple, cheap pricing!
                        </li>
                        <li>
                           - Renting a laptop eliminates the need for ongoing maintenance.
                        </li>
                        <li>
                          - Preventing technological obsolescence is essential.
                        </li>
                        <li>
                            - You can customize it.
                        </li>
                    </ul>
                    <p>We are well-versed in the subject of paradigm shifts. It is nearly hard to perform any work without using a laptop computer. It has evolved into a social and professional prerequisite that will assist you in remaining on par with the rest of the globe in your endeavors. Renting a laptop is a pleasant alternative to purchasing a computer and avoiding dealing with out-of-date equipment. Why not start with the finest to get you started on your laptop rental adventure? Cool Care Services may provide you with a rented laptop.</p>
                </div>
            </div>
        </div>
    </section> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 

     

     


     
   <script>
  $(".select-ul-li").click(function() {
  var is_open = $(this).hasClass("open");
  if (is_open) {
    $(this).removeClass("open");
  } else {
    $(this).addClass("open");
  }
});

$(".select li").click(function() {

  var selected_value = $(this).html();
  var first_li = $(".select-ul-li li:first-child").html();

  $(".select li:first-child").html(selected_value);
  $(this).html(first_li);

});

$(document).mouseup(function(event) {

  var target = event.target;
  var select = $(".select");

  if (!select.is(target) && select.has(target).length === 0) {
    select.removeClass("open");
  }

});
</script>

 

  
<?php include "include/footer.php" ?>