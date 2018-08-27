<div class="row-fluid row-custom">
    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-3">
                    <h3>Add New Hotel</h3>
                </div>
                
                <div class="dropdown pull-right" style="margin-top: 5px;">
                    <button id="create-new" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="grid-body collapse <?php if(validation_errors()) echo 'in'; ?>" id="create-form">
            <div class="col-md-10 col-md-offset-1">
                <form action="<?= base_url('admin/tourist-hotel/add');?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Hotel Name</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Prashad paradise">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Type</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="type">
                                <option value="5">5 Star</option>
                                <option value="4">4 Star</option>
                                <option value="3">3 Star</option>
                                <option value="2">2 Star</option>
                                <option value="1">1 Star</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Location</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="location" placeholder="Cox's Bazar, Chittagong">
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Division</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="division" placeholder="Chittagong">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">District</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="district" placeholder="Cox's Bazar">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Area</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area" placeholder="Kolatoli, Cox's Bazar, Chittagong">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Description</label>
                        </div>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="6" name="description"></textarea>
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
                            <center><img id="image" class="hidden" width="150" /></center>
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
                    <h3>Hotel List</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table datatable">
                    <thead>
                        <th>Name</th>
                        <th>Hotel Type</th>
                        <th>Location</th>
                        <th>Division</th>
                        <th>District</th>
                        <th>Area</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th width="120"><i class="fa fa-cog" aria-hidden="true"></i></th>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel):?>
                            <tr>
                                <td><a href="<?= base_url("admin/hotel/create/room/$hotel->id") ?>"><?= $hotel->name;?></a></td>
                                <td><?= $hotel->type;?> Star</td>
                                <td><?= $hotel->location;?></td>
                                <td><?= $hotel->division;?></td>
                                <td><?= $hotel->district;?></td>
                                <td><?= $hotel->area;?></td>
                                <td>
                                    <span title="<?= $hotel->description;?>">
                                        <?= (strlen($hotel->description) > 100? substr($hotel->description, 0,100): $hotel->description);?>
                                    </span>
                                </td>
                                <td><img src="<?= base_url("assets/img/$hotel->image") ?>" width="50"></td>
                                <td>
                                    <a href="<?= base_url("admin/hotel/create/room/$hotel->id") ?>" class="btn btn-success btn-xs" title="add rooms"><i class="fa fa-plus"></i></a>
                                    <a href="<?= base_url("admin/tourist-hotel/edit/$hotel->id") ?>" class="btn btn-default btn-xs" title="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url("admin/tourist-hotel/delete/$hotel->id") ?>" class="btn btn-danger btn-xs" title="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>