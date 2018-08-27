<div class="row-fluid row-custom">
    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-3">
                    <h3>Add New Tourist</h3>
                </div>
                
                <div class="dropdown pull-right" style="margin-top: 5px;">
                    <button id="create-new" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="grid-body collapse <?php if(validation_errors()) echo 'in'; ?>" id="create-form">
            <div class="col-md-10 col-md-offset-1">
                <form action="<?php echo base_url('admin/tourist/add');?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">First Name</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Last Name</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="lname" placeholder="Enter last name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Nationality</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nationality" placeholder="Bangladeshi">
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Date Of Birth</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="birthday" placeholder="16/12/1971">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Place Of Birth</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="birth_place" placeholder="Bangladesh">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Passport No</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="passport_no" placeholder="Enter passport number">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Visa No</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="visa_no" placeholder="Enter visa number">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Passport Validity Expires</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="passport_expire" placeholder="Enter passport validity expires">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Visa Validity Expires</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="visa_expire" placeholder="Enter visa validity expires">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Purpose Of Stay</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="purpose" placeholder="What's the purpose?">
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
                        <input type="submit" class="btn btn-info" value="Add Tourist">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-5">
                    <h3>Tourist List</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table datatable">
                    <thead>
                        <th>Name</th>
                        <th width="50">Nationality</th>
                        <th width="50">Birth Place</th>
                        <th>Birthday</th>
                        <th>Passport No</th>
                        <th>Visa No</th>
                        <th>Passport Validity Expires</th>
                        <th>Visa Validity Expires</th>
                        <th>Purpose</th>
                        <th>Image</th>
                        <th width="120"><i class="fa fa-cog" aria-hidden="true"></i></th>
                    </thead>
                    <tbody>
                        <?php foreach ($tourists as $tourist):?>
                            <tr>
                                <td><?php echo $tourist->fname." ".$tourist->lname;?></td>
                                <td><?php echo $tourist->nationality;?></td>
                                <td><?php echo $tourist->birth_place;?></td>
                                <td><?php echo $tourist->birthday;?></td>
                                <td><?php echo $tourist->passport_no;?></td>
                                <td><?php echo $tourist->visa_no;?></td>
                                <td><?php echo $tourist->passport_expire;?></td>
                                <td><?php echo $tourist->visa_expire;?></td>
                                <td><?php echo $tourist->purpose;?></td>
                                <td><img src="<?php echo base_url('assets/img/'.$tourist->image);?>" width="50"></td>
                                <td>
                                    <a href="<?php echo base_url('admin/tourist/edit/'.$tourist->id);?>" class="btn btn-default btn-xs" title="edit"><i class="fa fa-pencil"></i></a>
                                    <a href="<?php echo base_url('admin/tourist/delete/'.$tourist->id);?>" class="btn btn-danger btn-xs" title="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>