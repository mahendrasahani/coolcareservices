<?php include "include/header.php" ?>

    <section id="banner-image">
        <!-- breadcrumb strat -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h2 class=" text-white pb-2 pt-5 text-center">HP Laptop Core I5</h2>
                    <nav aria-label="breadcrumb" style="margin: 0 auto;">
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                            <li class="breadcrumb-item"><a href="laptop-on-rent-gurgaon.html" class="text-white">Laptop</a></li>
                            <li class="breadcrumb-item active pt-1" aria-current="page"
                                style="color: #01b7e0; font-size: 14px;">HP Laptop Core I5</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->
    </section>
    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="img_producto_container" data-scale="1.6">
                        <img class="dslc-lightbox-image img_producto" href="" target="_self"
                            style=" background-image:url('./images/single-product/product-single.jpg');"></img>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-right-content">
                        <div class="reviews d-flex">
                            <div class="star mx-2">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="review-counting d-flex mx-2">
                                <p class="">0 Reviews |</p>
                                <p class=""> &nbsp Write a Review</p>
                            </div>
                        </div>
                        <div class="product-details">
                            <h1 class="fs-3">HP Laptop core i5</h1>
                            <p>Product Code: HP Core i5</p>
                            <p> Availability: In Stock</p>
                        </div>
                        <div class="prpduct-price">
                            <h4>Rs 1000 / Month</h4>
                        </div>
                        <form action="#">
                            <div class="select-box">
                                <label for="select-option" class="month-select">Select Month:</label> <br>
                                <select name="select-option" id="select-option" aria-placeholder="---Please Select---">
                                    <option value="1">---Please Select---</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                </select>
                                <br>
                                <label for="select-option" class="month-select mt-2">Delivery Date:</label> <br>
                                <input type="date" id="selectDate" name="selectDate">
                                
                            </div>
                            <div class="product-quantity d-flex mt-3">
                                <div class="mx-2 d-flex">
                                    <p class="mx-2 m-auto"> Qty</p>
                                    <input type="number" id="quantity" value="0" min="0" style="width: 10%;padding-left: 10px;height: 30px;">
                                    <a href="" class="product-quantity-btns">
                                        <button type="button"
                                            class="btn btn-warning animation  mx-2" onclick="addToCart()">Add to
                                            Cart</button></a>
                                    <a href="" class="product-quantity-btns"><button type="button"
                                            class="btn btn-warning animation ">Add to Wishlist</button></a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <ul class="nav nav-tabs" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#content1">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2" data-bs-toggle="tab" href="#content2">Reviews</a>
                </li>
            </ul>

            <div class="tab-content mt-2">
                <div class="tab-pane fade show active p-tag" id="content1">
                    <h6>SPECIFICATION﻿ / DESCRIPTION</h6>
                    <p >Rating 3 star</p>
                    <p>condition: good</p>
                    <p>Brand of the product may vary</p>
                    <p>Product may not be new, But it will be in good working condition</p>

                    <p>SECURITY...(CASH NIL) PDC (Post Dated Cheque) 31December 2024 Rs.7000. It will be returned back
                        at the time of Pickup.

                        Stabilizer charge extra 700 Rs if required.

                        Transport charge extra 300 Rs.

                        Submeter charge...500 if Required.

                        Power Requirements:AC 230 V, 50 Hz. Pre installed plug point of 15 Amp should be available near
                        ac.</p>
                </div>
                <div class="tab-pane fade" id="content2">
                    <h6>Write a review here</h6>
                </div>
            </div>
        </div>
    </section> 
    

    <script>
        // JavaScript function to handle "Add to Cart" button click
        function addToCart()
        {
            event.preventDefault();
            // Get the current item count from the span element
            var currentItemCount = parseInt(document.getElementById('cartItemCount').innerText);


            // Get the quantity input value
            var quantity = parseInt(document.getElementById('quantity').value);

            // Increment the item count based on the quantity
            var newItemCount = currentItemCount + quantity;

            // Update the span element with the new item count
            document.getElementById('cartItemCount').innerText = newItemCount;
        }
    </script>

     

    <script>
        $(".img_producto_container")
            // tile mouse actions
            .on("mouseover", function ()
            {
                $(this)
                    .children(".img_producto")
                    .css({ transform: "scale(" + $(this).attr("data-scale") + ")" });
            })
            .on("mouseout", function ()
            {
                $(this)
                    .children(".img_producto")
                    .css({ transform: "scale(1)" });
            })
            .on("mousemove", function (e)
            {
                $(this)
                    .children(".img_producto")
                    .css({
                        "transform-origin":
                            ((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
                            "% " +
                            ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
                            "%"
                    });
            });

    </script> 

    <?php include "include/footer.php" ?>