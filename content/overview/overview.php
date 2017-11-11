<div class="row">
    <div class="px-5 py-3">

        <div class="row">
            <div class="col-8">
                <p class="h4">Overview</p>
            </div>
            <div class="col-4 pt-2">
                <div class="">
                    <div id="date-range" >
                        <div id="date-range-field" class="bg-white px-3 py-2">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span></span>
                            <a href="#">&#8897;</a>
                        </div>
                        <div id="datepicker-calendar" class="dashboard"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 m-0 overview-nav">
            <?php include 'partials/overview-nav.php' ?>
            <div class="tab-content col p-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-impressions" role="tabpanel" aria-labelledby="impressions-tab">
                    <?php include 'partials/impressions.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-clicks" role="tabpanel" aria-labelledby="clicks-tab">
                    <?php include 'partials/clicks.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-conversions" role="tabpanel" aria-labelledby="conversions-tab">
                    <?php include 'partials/conversions.php' ?>
                </div>
            </div>
        </div>
        <div class="row m-0 campaigns mt-5 bg-white">
            <div class="col py-4 px-0">
                <h4 class="ml-4 mb-5">Campaigns</h4>
                <?php include 'partials/campaigns.php' ?>
            </div>
        </div>
    </div>
</div>
