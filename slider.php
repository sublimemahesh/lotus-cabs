<div class="container-fluid photos-slider2 no-padding">
    <div id="photos-slider2" class="carousel slide" data-ride="carousel">			
        <div class="carousel-inner" role="listbox">
            <?php
            foreach (Slider::all() as $key => $slider_image) {
                if ($key === 0) {
                    ?>
                    <div class="item active">
                        <img src="upload/slider/<?php echo $slider_image['image_name'] ?>" alt=""/>
                        <div class="container photos-slider2-content">						
                            <div class="col-md-8 col-sm-12 col-xs12 pull-right">
                                <div class="slider-content">
                                    <p><?php echo $slider_image['title'] ?>..</p>							

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else {
                    ?>

                    <div class="item">
                        <img src="upload/slider/<?php echo $slider_image['image_name'] ?>" alt=""/>
                        <div class="container photos-slider2-content">						
                            <div class="col-md-8 col-sm-12 col-xs12 pull-right">
                                <div class="slider-content">
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }
            ?>


        </div>
    </div>
    <!-- Booking Form -->
    <div class="booking-form">
        <div class="container">
            <div class="col-md-4" style="margin-top: -15px;">
                <div id="contact-form" method="post" class="book-taxi-form">
                    <h3>Book Your Taxi Now</h3>
                    <div class="form-group col-md-6 col-sm-6 slider-form-paddig">
                        <label for="txt_name">Name :</label>
                        <input type="text" class="form-control" id="txt_name" placeholder="Your Name" />
                        <span id="spanName" ></span>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 slider-form-paddig-right">
                        <label for="txtEmail">Email:</label>
                        <input type="text" class="form-control" id="txtEmail" placeholder="Enter Email" />
                        <span id="spanEmail" ></span>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 slider-form-paddig">
                        <label for="txt_startfrom">Pickup Location:</label>
                        <input type="text" class="form-control" id="txt_startfrom" placeholder="Pickup Location" />
                        <span id="spanPickupPlace" ></span>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 slider-form-paddig-right">
                        <label for="txt_drop">Drop Location:</label>
                        <input type="text" class="form-control" id="txt_drop" placeholder="Drop Location" />
                        <span id="spanDropPlace" ></span>
                    </div>
                    <div class="form-group col-md-6 slider-form-paddig">
                        <label for="txt_pickup">Date:</label>                                   
                        <div id="datepicker" class="input-group">
                            <input class="form-control" type="text" placeholder="YYYY/MM/DD HH:MM"  name="filter-date" id="filter-date"/>
                            <span class="add-on">

                            </span>
                            <span id="spanDatePickup" ></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6 slider-form-paddig-right">
                        <label for="txt_passengers">Passengers :</label>
                        <input type="number" class="form-control" id="txt_passengers" placeholder="Passengers" />
                        <span id="spanNumberOfPassengers" ></span>
                    </div>
                    <div class="form-group col-md-12 slider-form-paddig">
                        <label for="txt_passengers">Description :</label>
                        <textarea class="form-control" rows="4" cols="22" id="txtMessage" name="contact-message" placeholder="Description:" required></textarea>

                        <span id="spanNumberOfPassengers" ></span>
                    </div>


                    <div class="col-md-12 slider-form-paddig">
                        <button type="submit" id="btnSubmit" title="submit" class="btn">Submit</button></div>
                    <div id="dismessage-msg" class="alert-msg"></div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

