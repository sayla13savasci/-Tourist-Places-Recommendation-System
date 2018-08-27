<div class="row">
    <dv class="col-md-12">
        <div class="banner" style="background-image:url(<?= base_url('assets/img/banner.jpg');?>);">
            <div class="banner-front row">
                <!-- search option -->
                <h3 class="banner-quote">“The gladdest moment in human life, me thinks, is a departure into unknown lands.” – Sir Richard Burton</h2>
            </div>
        </div>
    </dv>  
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section class="row posts">
                <header><h1 class="text-danger text-center">Your Hotel Booking History</h1></header>
                <br><br><br>
                <article class="post">
                    <div class="row well">
                        <div class="col-md-12">
                            <table class="table datatable">
                                <thead>
                                    <th>Hotel Name</th>
                                    <th>Hotel Image</th>
                                    <th>Room No.</th>
                                    <th>Number of Bed</th>
                                    <th>Booking Days</th>
                                    <th>Per Day Rate</th>
                                    <th>Total Price</th>
                                    <th>Booking Time</th>
                                    <th width="120"><i class="fa fa-cog" aria-hidden="true"></i></th>
                                </thead>
                                <tbody>
                                    <?php foreach ($histories as $history):?>
                                        <tr>
                                            <td><?= $history->hotel_name ?></td>
                                            <td><img src="<?= base_url("assets/img/$history->hotel_image") ?>" width="50"></td>
                                            <td><?= $history->room_no ?></td>
                                            <td><?= $history->bed ?></td>
                                            <td><?= $history->booking_days ?></td>
                                            <td><?= $history->rate ?> TK</td>
                                            <td><?= $history->total_price ?> TK</td>
                                            <td><?= $history->date ?></td>
                                            <td><a href="<?= base_url("tourist/hotel/cancel/booking/$history->tourist_hotel_id/$history->tourist_hotel_room_id") ?>" class="btn btn-danger btn-xs" title="edit"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
</div>
