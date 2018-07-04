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
                                    <p><?php echo substr($slider_image['title'], 0, 100) ?>..</p>							

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
            <div class="col-md-4">
                <div id="contact-form" method="post" class="book-taxi-form">
                    <h3>Book Your Taxi Now</h3>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txt_name">Name :</label>
                        <input type="text" class="form-control" id="txt_name" placeholder="Your Name" />
                        <span id="spanName" ></span>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txtEmail">Phone Number :</label>
                        <input type="text" class="form-control" id="txtEmail" placeholder="Enter Phone Number" />
                        <span id="spanEmail" ></span>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txt_startfrom">Pickup Place :</label>
                        <input type="text" class="form-control" id="txt_startfrom" placeholder="Start From" />
                        <span id="spanPickupPlace" ></span>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txt_drop">Drop Place :</label>
                        <input type="text" class="form-control" id="txt_drop" placeholder="Drop To" />
                        <span id="spanDropPlace" ></span>
                    </div>
                    <div class="form-group col-md-12" id="filters">
                        <label for="txt_pickup">Date Pickup :</label>  									
                        <div id="datepicker" class="input-group">
                            <input class="form-control"  id="txt_pickup filter-dateid search-to-date"class="form-control" type="text" name="filter-date" placeholder="YYYY/MM/DD  HH:MM" />
                            <span class="add-on">
                                <i data-time-icon="icon-time" data-date-icon="icon-calendar"><img src="images/icon/date-picker.png" alt="datepicker" /></i>
                            </span>
                            <span id="spanDatePickup" ></span>                       
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="txt_passengers">Passengers :</label>
                        <input type="number" class="form-control" id="txt_passengers" placeholder="Enter Passengers" />
                        <span id="spanNumberOfPassengers" ></span>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" id="btnSubmit" title="submit" class="btn">Submit</button></div>
                    <div id="dismessage-msg" class="alert-msg"></div>
               </form>
           </div>
            </div>
       </div>
    </div>
</div>
</div>

