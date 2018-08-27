<div class="row-fluid row-custom">

    <div class="grid simple">

        <div class="grid-title">
            <div class="row">
                <div class="col-md-5">
                    <h3>Edit Hotel Room</h3>
                </div>
            </div>
        </div>

        <div class="grid-body">

            <div class="col-md-10 col-md-offset-1">

                <form action="<?= base_url("admin/hotel/update/room/$hotel_room->id") ?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                    
                    <input type="hidden" name="hotel_id" value="<?= $hotel_room->hotel_id ?>" />

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Room No.</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_no" value="<?= $hotel_room->room_no ?>" placeholder="Cox's Bazar Sea Beach">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Number of Bed</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="bed">
                                <option <?= ($hotel_room->bed == 1) ? 'selected=""' : '' ?> value="1">1 Bed</option>
                                <option <?= ($hotel_room->bed == 2) ? 'selected=""' : '' ?> value="2">2 Bed</option>
                                <option <?= ($hotel_room->bed == 3) ? 'selected=""' : '' ?> value="3">3 Bed</option>
                                <option <?= ($hotel_room->bed == 4) ? 'selected=""' : '' ?> value="4">4 Bed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Availability</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="availability">
                                <option <?= ($hotel_room->availability == 1) ? 'selected=""' : '' ?> value="1">Yes</option>
                                <option <?= ($hotel_room->availability == 0) ? 'selected=""' : '' ?> value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Per Day Rate (TK)</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="rate" value="<?= $hotel_room->rate ?>" placeholder="1000">
                        </div>
                    </div>

                    <div class="text-right">
                        <input type="submit" class="btn btn-info" value="Update Tourist hotel">
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
