<div class="row-fluid row-custom">

    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-5">
                    <h3>Edit Hotel</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-10 col-md-offset-1">
                <form action="<?php echo base_url('admin/tourist-hotel/update');?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="id" value="<?php echo $hotel->id;?>">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">hotel Name</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="<?php echo $hotel->name;?>" placeholder="Cox's Bazar Sea Beach">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Type</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="type">
                                <option <?= ($hotel->type == 5) ? 'selected=""' : '' ?> value="5">5 Star</option>
                                <option <?= ($hotel->type == 4) ? 'selected=""' : '' ?> value="4">4 Star</option>
                                <option <?= ($hotel->type == 3) ? 'selected=""' : '' ?> value="3">3 Star</option>
                                <option <?= ($hotel->type == 2) ? 'selected=""' : '' ?> value="2">2 Star</option>
                                <option <?= ($hotel->type == 1) ? 'selected=""' : '' ?> value="1">1 Star</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Location</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="location" value="<?php echo $hotel->location;?>" placeholder="Cox's Bazar, Chittagong">
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Division</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="division" value="<?php echo $hotel->division;?>" placeholder="Chittagong">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">District</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="district" value="<?php echo $hotel->district;?>" placeholder="Cox's Bazar">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Area</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area" value="<?php echo $hotel->area;?>" placeholder="Kolatoli, Cox's Bazar, Chittagong">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Description</label>
                        </div>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="6" name="description"><?php echo $hotel->description;?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2">Image</label>
                        <div class="col-md-10">
                            <input type="file" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png" id="image-input">
                            <span id="image-error" class="text-danger hidden">only png, jpg & jpeg file types are allowed</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <?php if($hotel->image):?>
                                <center><img id="image" src="<?php echo base_url('assets/img/'.$hotel->image);?>" width="150" /></center>
                            <?php else:?>
                                <center><img id="image" class="hidden" width="150" /></center>
                            <?php endif;?>
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