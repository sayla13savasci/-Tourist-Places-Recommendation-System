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
                <header><h1 class="text-danger text-center">Tourist spots in Bangladesh</h1></header>
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach($divisions as $division):?>
                            <?php $dvsn = str_replace(" ", "_", $division->division);?>
                            <a href="<?= base_url('spot/'.$dvsn);?>" class="btn btn-success"><?= ucfirst($division->division)."(".$division->total_spot.")";?></a>
                        <?php endforeach;?>
                    </div>
                </div>
                <br><br><br>
                <?php foreach($spots as $spot):?>
                    <article class="post">
                        <div class="row well">
                            <div class="spot-img col-md-6">
                                <img class="img-responsive" src="<?= base_url('assets/img/'.$spot->image);?>">
                            </div>
                            <div class="col-md-6">
                                <span class="spot-name text-info"><?= $spot->name;?></span> <br>
                                <span class="spot-info"><b>Place Type: </b><?= $spot->type;?></span> <br>
                                <span class="spot-info"><b>Location: </b><?= $spot->location;?></span> <br>
                                <span class="spot-info"><b>Division: </b><?= $spot->division;?></span> <br>
                                <span class="spot-info"><b>District: </b><?= $spot->district;?></span> <br>
                                <span class="spot-info"><b>Area: </b><?= $spot->area;?></span> <br>
                                <p class="text-justify"><?= $spot->description;?></p>
                            </div>
                        </div> 
                    </article>
                <?php endforeach;?>
            </section>
        </div>
    </div>
</div>