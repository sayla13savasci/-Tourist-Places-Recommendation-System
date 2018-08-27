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
                <header><h1 class="text-danger text-center">Tourist hotels in Bangladesh</h1></header>
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach($divisions as $division):?>
                            <?php $dvsn = str_replace(" ", "_", $division->division);?>
                            <a href="<?= base_url('hotel/'.$dvsn);?>" class="btn btn-success"><?= ucfirst($division->division)."(".$division->total_hotel.")";?></a>
                        <?php endforeach;?>
                    </div>
                </div>
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
                <?php foreach($hotels as $hotel):?>
                    <article class="post">
                        <div class="row well">
                            <div class="hotel-img col-md-6">
                                <img class="img-responsive" src="<?= base_url('assets/img/'.$hotel->image);?>">
                            </div>
                            <div class="col-md-4">
                                <span class="spot-name text-info"><?= $hotel->name;?></span> <br>
                                <span class="hotel-info"><b>Hotel Type: </b><?= $hotel->type;?> Star</span> <br>
                                <span class="hotel-info"><b>Location: </b><?= $hotel->location;?></span> <br>
                                <span class="hotel-info"><b>Division: </b><?= $hotel->division;?></span> <br>
                                <span class="hotel-info"><b>District: </b><?= $hotel->district;?></span> <br>
                                <span class="hotel-info"><b>Area: </b><?= $hotel->area;?></span> <br>
                                <p class="text-justify"><?= $hotel->description;?></p>
                            </div>
                            <div class="col-md-offset-1 col-md-1">
                                <a href="<?= base_url("tourist/book/hotel/$hotel->id") ?>" class="btn btn-success">Book</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach;?>
            </section>
        </div>
    </div>
</div>
