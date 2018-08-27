<div class="row-fluid row-custom">

    <div class="grid simple">

        <div class="grid-title">
            <div class="row">
                <div class="col-md-3">
                    <h3>Add New Hotel Room</h3>
                </div>
                
                <div class="dropdown pull-right" style="margin-top: 5px;">
                    <button id="create-new" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>

        <div class="grid-body collapse <?php if(validation_errors()) echo 'in'; ?>" id="create-form">

            <div class="col-md-10 col-md-offset-1">

                <form action="<?= base_url("admin/hotel/insert/room") ?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                    
                    <input type="hidden" name="hotel_id" value="<?= $hotel_id ?>" />

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Room No.</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_no" placeholder="123">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Number of Bed</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="bed">
                                <option value="1">1 Bed</option>
                                <option value="2">2 Bed</option>
                                <option value="3">3 Bed</option>
                                <option value="4">4 Bed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Availability</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="availability">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Per Day Rate (TK)</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="rate" placeholder="1000">
                        </div>
                    </div>

                    <div class="text-right">
                        <input type="submit" class="btn btn-info" value="Add Tourist Hotel">
                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-5">
                    <h3>Hotel Room List</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table datatable">
                    <thead>
                        <th>Room No.</th>
                        <th>Number of Bed</th>
                        <th>Per Day Rate</th>
                        <th>Availability</th>
                        <th width="120"><i class="fa fa-cog" aria-hidden="true"></i></th>
                    </thead>
                    <tbody>
                        <?php foreach ($hotel_rooms as $hotel_room):?>
                            <tr>
                                <td><?= $hotel_room->room_no ?></td>
                                <td><?= $hotel_room->bed ?></td>
                                <td><?= $hotel_room->rate ?> TK</td>
                                <td>
                                    <?php if ($hotel_room->availability == 1): ?>
                                        Yes
                                    <?php else: ?>
                                        No
                                    <?php endif ?>        
                                </td>
                                <td>
                                    <a href="<?= base_url("admin/hotel/edit/room/$hotel_room->id") ?>" class="btn btn-default btn-xs" title="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url("admin/hotel/delete/room/$hotel_room->id") ?>" class="btn btn-danger btn-xs" title="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>