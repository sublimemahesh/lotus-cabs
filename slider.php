    

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
                                    <p><?php echo substr($slider_image['title'],0,100) ?>..</p>							
                                    <a href="#" title="Learn More" class="learn-more">Learn More</a>		
                                    <a href="#" title="Purchase" class="purchase">Purchase</a>
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
                                    <p><?php echo substr($slider_image['title'],0,70)?>...</p>							
                                    <a href="#" title="Learn More" class="learn-more">Learn More</a>		
                                    <a href="#" title="Purchase" class="purchase">Purchase</a>
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
                <form name="book-taxi" class="book-taxi-form">
                    <h3>Book Your Taxi Now</h3>	
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txt_name">Name :</label>
                        <input type="text" class="form-control" id="txt_name" placeholder="Your Name" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txt_phone">Phone Number :</label>
                        <input type="text" class="form-control" id="txt_phone" placeholder="Enter Phone Number" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txt_startfrom">Pickup Place :</label>
                        <input type="text" class="form-control" id="txt_startfrom" placeholder="Start From" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="txt_drop">Drop Place :</label>
                        <input type="text" class="form-control" id="txt_drop" placeholder="Drop To" />
                    </div>
                    <div class="form-group col-md-12">
                        <label for="txt_drop">Date Pickup :</label>									
                        <div id="datepicker" class="input-group">
                            <input class="form-control" data-format="yyyy-MM-dd" type="text" placeholder="DD/MM/YYYY" />
                            <span class="add-on">
                                <i data-time-icon="icon-time" data-date-icon="icon-calendar"><img src="images/icon/date-picker.png" alt="datepicker" /></i>
                            </span> 
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div id="timepicker" class="input-group time-picker">
                            <div class="col-md-4 col-sm-4 col-xs-4"><input class="form-control" min="1" max="12" type="number" /></div>
                            <div class="col-md-4 col-sm-4 col-xs-4"><input class="form-control" min="1" max="60" type="number" /></div>
                            <div class="col-md-4 col-sm-4 col-xs-4"><select class="form-control"><option>AM</option><option>PM</option></select></div>
                        </div>
                    </div>
                    <div class="col-md-12"><button type="submit" title="submit" class="btn">Submit</button></div>
                </form>
            </div>
        </div>
    </div><!-- Booking Form /- -->
</div ><!-- Photo Slider/- -->
