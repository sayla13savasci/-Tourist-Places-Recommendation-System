<div class="container">
    <div class="row well">
        <div class="col-md-10 col-md-offset-1">
            <form action="<?php echo base_url('tourist/update');?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                <input type="hidden" name="id" value="<?php echo $tourist->id;?>">
                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">First Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="fname" value="<?php echo $tourist->fname;?>" placeholder="Enter first name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Last Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="lname" value="<?php echo $tourist->lname;?>" placeholder="Enter last name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Nationality</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="nationality" value="<?php echo $tourist->nationality;?>" placeholder="Bangladeshi">
                    </div>
                </div>

                 <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Date Of Birth</label>
                    </div>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="birthday" value="<?php echo $tourist->birthday;?>" placeholder="16/12/1971">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Place Of Birth</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="birth_place" value="<?php echo $tourist->birth_place;?>" placeholder="Bangladesh">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Passport No</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="passport_no" value="<?php echo $tourist->passport_no;?>" placeholder="Enter passport number">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Visa No</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="visa_no" value="<?php echo $tourist->visa_no;?>" placeholder="Enter visa number">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Passport Validity Expires</label>
                    </div>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="passport_expire" value="<?php echo $tourist->passport_expire;?>" placeholder="Enter passport validity expires">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Visa Validity Expires</label>
                    </div>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="visa_expire" value="<?php echo $tourist->visa_expire;?>" placeholder="Enter visa validity expires">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Purpose Of Stay</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="purpose" value="<?php echo $tourist->purpose;?>" placeholder="What's the purpose?">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        <label for="name">Password</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="password" value="<?php echo $tourist->password;?>" placeholder="Enter your password?">
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
                        <?php if($tourist->image):?>
                            <center><img id="image" src="<?php echo base_url('assets/img/'.$tourist->image);?>" width="150" /></center>
                        <?php else:?>
                            <center><img id="image" class="hidden" width="150" /></center>
                        <?php endif;?>
                    </div>
                </div>
                <div class="text-right">
                    <input type="submit" class="btn btn-info" value="Update Tourist">
                </div>
            </form>
        </div>
    </div>
</div>