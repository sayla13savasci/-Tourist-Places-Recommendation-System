<div class="row-fluid row-custom">

    <div class="grid simple">

        <div class="grid-title">
            <div class="row">
                <div class="col-md-5">
                    <h3>Hotel Room Booking History</h3>
                </div>
            </div>
        </div>

        <div class="grid-body">

            <div class="col-md-12">

                <table class="table datatable">

                    <thead>
                        <th>Hotel Name</th>
                        <th>Hotel Image</th>
                        <th>Tourist Name</th>
                        <th>Room No.</th>
                        <th>Number of Bed</th>
                        <th>Booking Days</th>
                        <th>Per Day Rate</th>
                        <th>Total Price</th>
                        <th>Booking Time</th>
                    </thead>

                    <tbody>

                        <?php foreach ($hotel_bookings as $hotel_booking): ?>
                            <tr>
                                <td><?= $hotel_booking->name ?></td>
                                <td><img src="<?= base_url("assets/img/$hotel_booking->hotel_image") ?>" width="50"></td>
                                <td><?= $hotel_booking->tourist_name ?></td>
                                <td><?= $hotel_booking->room_no ?></td>
                                <td><?= $hotel_booking->bed ?></td>
                                <td><?= $hotel_booking->booking_days ?></td>
                                <td><?= $hotel_booking->rate ?> TK</td>
                                <td><?= $hotel_booking->total_price ?> TK</td>
                                <td><?= $hotel_booking->date ?></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
