<?php include("includes/header.php") ?>
<div class="container-fluid">

    <div class="container Event mt-3 bg-light">
        <div class="events-header mb-1 mt-2">
            <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b>
        </div>
        <div class="row mb-4">
            <div class="col-md-9 shadow">
                <img src="images/img1.jpg" style="width:100%;height:450px;border-radius:10px;object-fit:fill">
                <div class="row mx-auto mt-2 mb-3">
                    <div class="col-md-4">
                        <div class="row mx-auto">
                            <div class="col-md-2 my-1">
                                <i class="fas fa-calendar-check" style="font-size:32px;color:#d35400"></i>
                            </div>
                            <div class="col-md-9">
                                <p><b style="color:#d35400">Event Date:</b><br> 11:00 AM - 1:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row mx-auto">
                            <div class="col-md-2 my-1">
                                <i class="fas fa-calendar-check" style="font-size:32px;color:#d35400"></i>
                            </div>
                            <div class="col-md-9">
                                <p><b style="color:#d35400">Event Time:</b><br> 11:00 AM - 1:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row mx-auto">
                            <div class="col-md-2 my-1">
                                <i class="fas fa-calendar-check" style="font-size:32px;color:#d35400"></i>
                            </div>
                            <div class="col-md-9">
                                <p><b style="color:#d35400">Event Location:</b><br> 11:00 AM - 1:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque natus doloribus voluptas quos quidem? Architecto nisi deleniti commodi fugit velit, corrupti quia quidem porro dolorem reiciendis ut corporis? Dolorem, modi.
                    Recusandae nam veniam numquam cum placeat ipsam pariatur sunt quos aliquam sit, optio quod doloribus ipsa saepe eos maxime esse, delectus odit quidem consequuntur nemo quibusdam. Minus inventore consectetur sunt!
                    Rem incidunt harum adipisci, a pariatur et. Aperiam quasi vel incidunt quibusdam cumque consequuntur ducimus? Voluptates commodi, magnam officiis voluptatum doloribus tempora delectus corporis dolore ipsum nisi consequatur sapiente voluptatibus.
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ticket Type</th>
                            <th>Ticket Number</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Ticket Type</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option value="1">General</option>
                                        <option value="2">First Class</option>
                                        <option value="3">VIP Class</option>
                                        <option value="3">V VIP Class</option>
                                    </select>
                                </div>
                            </td>
                            <td style="width:170px">
                                <div class="input-group mb-3">
                                    <button id="decrement" class="input-group-text"><i class="fas fa-minus-circle"></i></button>
                                    <input id="quantity" type="number" class="form-control text-center" value="1" min="1" max="25">
                                    <button id="increment" class="input-group-text"><i class="fas fa-plus-circle"></i></button>
                                </div>
                            </td>
                            <td class="fw-bold" style="margin-top:10px">$ <span id="total">150.00</span></td>
                            <td>
                                <button class="btn" style="color:white;background:#d35400">Procced To Payment</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            





            <div class="col-md-3 shadow">
                <p>Event Location: </p>
                <img src="images/map.png" style="width:100%;height:200px">
                <p class="text-center"><b>Total Seats: </b>(1000 |<b>1000</b> Left)</p>
                <div class="company-details mt-2">
                    <p class="fw-bold" style="color:#d35400"><i class="fas fa-building"></i> Organized By: RTC Consultants LLC</p>
                    <div class="company-location px-4">
                        <p><i class="fas fa-arrow-circle-right"></i> location 1</p>
                        <p><i class="fas fa-arrow-circle-right"></i> location full description</p>
                        <p><i class="fas fa-arrow-circle-right"></i> location 2</p>
                    </div>
                </div>
                <div class="company-schedule mt-2">
                    <p class="fw-bold" style="color:#d35400"><i class="fas fa-calendar"></i> Events Schedule</p>
                    <div class="schedule px-2">
                        <p style="font-size:13px"><i class="fas fa-calendar-check"></i> March 12, 2024 | 11:00 AM - 1:00 PM</p>
                    </div>
                </div>
                <div class="sharing mt-2">
                    <p class="fw-bold" style="color:#d35400"><i class="fas fa-calendar"></i> Events Schedule</p>
                    <div class="company-share px-4">
                        <div class="row mx-auto">
                            <div class="col-md-2 btn" style="margin-right:5px;background:#d35400">
                                <a href="#"><i style="color:white" class="fab fa-facebook"></i></a>
                            </div>
                            <div class="col-md-2 btn" style="margin-right:5px;background:#d35400">
                                <a href="#"><i style="color:white"  class="fab fa-twitter"></i></a>
                            </div>
                            <div class="col-md-2 btn" style="margin-right:5px;background:#d35400">
                                <a href="#"><i style="color:white" class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="col-md-2 btn" style="margin-right:5px;background:#d35400">
                                <a href="#"><i style="color:white" class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="col-md-2 btn" style="margin-right:5px;background:#d35400">
                                <a href="#"><i style="color:white" class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>
</div>

<script>
    // Base price per item
    const pricePerItem = 150.00;
    const maxQuantity = 25;
    
    // Select elements
    const quantityInput = document.getElementById('quantity');
    const totalElement = document.getElementById('total');
    const decrementButton = document.getElementById('decrement');
    const incrementButton = document.getElementById('increment');

    // Update the total based on the quantity
    const updateTotal = () => {
        const quantity = parseInt(quantityInput.value);
        const total = (quantity * pricePerItem).toFixed(2);
        totalElement.textContent = total;
    };

    // Increment button click
    incrementButton.addEventListener('click', (event) => {
        event.preventDefault();
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < maxQuantity) {
            currentQuantity++;
            quantityInput.value = currentQuantity;
            updateTotal();
        }
    });

    // Decrement button click
    decrementButton.addEventListener('click', (event) => {
        event.preventDefault();
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            currentQuantity--;
            quantityInput.value = currentQuantity;
            updateTotal();
        }
    });

    // Initialize the total on page load
    updateTotal();
</script>

<?php include("includes/footer.php") ?>