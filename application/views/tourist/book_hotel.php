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
                <header><h1 class="text-danger text-center">Book Hotel Room</h1></header>
                <br><br><br>
                <?php if(isset($_SESSION['message'])): ?>
                    <?php if($_SESSION['type'] == 'success'): ?>
                        <div class="alert alert-success">
                    <?php elseif($_SESSION['type'] == 'danger'): ?>
                        <div class="alert alert-danger">
                    <?php endif ?>
                            <strong><?= $_SESSION['message'] ?></strong>
                        </div>
                <?php endif ?>
                <article class="post">
                    <div class="row well">
                        <div class="col-md-12">
                            <table class="table datatable">
                                <thead>
                                    <th>Room No.</th>
                                    <th>Number of Bed</th>
                                    <th>Per Day Rate (TK)</th>
                                    <th>Days</th>
                                    <th width="120"><i class="fa fa-cog" aria-hidden="true"></i></th>
                                </thead>
                                <tbody>
                                    <?php foreach ($hotel_rooms as $hotel_room):?>
                                        <form action="<?= base_url("tourist/book/hotel/room/$hotel_room->id") ?>" class="form-horizontal" method="post">
                                            <input type="hidden" name="tourist_hotel_id" value="<?= $hotel_room->hotel_id ?>" />
                                            <tr>
                                                <td><input type="text" class="form-control" name="room_no" value="<?= $hotel_room->room_no ?>" readonly /></td>
                                                <td><input type="text" class="form-control" name="bed" value="<?= $hotel_room->bed ?>" readonly /></td>
                                                <td><input type="text" class="form-control" name="rate" value="<?= $hotel_room->rate ?>" readonly /></td>
                                                <td>
                                                    <select class="form-control" name="booking_days">
                                                        <option value="1">1 day</option>
                                                        <option value="2">2 days</option>
                                                        <option value="3">3 days</option>
                                                        <option value="4">4 days</option>
                                                        <option value="5">5 days</option>
                                                        <option value="6">6 days</option>
                                                        <option value="7">1 Week</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                        </form>
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
