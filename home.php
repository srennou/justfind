<div class="hero-wrap js-fullheight"
    style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
                <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span
                        class="number" data-number="850000">0</span> great job offers you deserve!</p>
                <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream
                    <br><span>Job is Waiting</span>
                </h1>

                <div class="ftco-search">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                    href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a
                                    Job</a>
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                            <div class="tab-content p-4" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">

                                    <form class="search-job" action="index.php?q=result&searchfor=advancesearch"
                                        method="POST">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-briefcase"></span></div>
                                                        <input type="text" name="SEARCH" class="form-control"
                                                            placeholder="eg. Garphic. Web Developer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="CATEGORY" class="form-control">
                                                                <option value="">Category</option>
                                                                <?php
                                $sql = "SELECT * FROM `tblcategory`";
                                $mydb->setQuery($sql);
                                $res = $mydb->loadResultList();
                                foreach ($res as $row) {
                                  echo '<option>' . $row->CATEGORY . '</option>';
                                }
                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <select name="COMPANY" class="form-control">
                                                            <option value="">Company</option>
                                                            <?php
                              $sql = "SELECT * FROM tblcompany";
                              $mydb->setQuery($sql);
                              $res = $mydb->loadResultList();
                              foreach ($res as $row) {
                                echo '<option>' . $row->COMPANYNAME . '</option>';
                              }
                              ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <input type="submit" value="Search"
                                                            class="form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-resume"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Search Millions of Jobs</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-collaboration"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-promotions"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Top Careers</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-employee"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Search Expert Candidates</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Categories work wating for you</span>
                <h2 class="mb-4"><span>Current</span> Job Posts</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
                    <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
                    <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
                    <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
                    <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
                    <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
                    <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
                    <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
                    <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
                    <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Recently Added Jobs</span>
                <h2 class="mb-4"><span>Recent</span> Jobs</h2>
            </div>
        </div>
        <div class="row">

            <?php
      if (isset($_GET['search'])) {
        # code...
        $COMPANYNAME = $_GET['search'];
      } else {
        $COMPANYNAME = '';
      }
      $sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND COMPANYNAME LIKE '%" . $COMPANYNAME . "%' ORDER BY DATEPOSTED DESC limit 5";
      $mydb->setQuery($sql);
      $cur = $mydb->loadResultList();


      foreach ($cur as $result) {

      ?>



            <div class="col-md-12 ftco-animate">

                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h3"><?php echo $result->OCCUPATIONTITLE ?></h2>
                            <div class="badge-wrap">
                                <span
                                    class="bg-primary text-white badge py-2 px-3"><?php echo $result->CATEGORY ?></span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a
                                    href="#"><?php echo $result->COMPANYNAME ?></a></div>
                            <div><span class="icon-my_location"></span>
                                <span><?php echo $result->COMPANYADDRESS ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID; ?>&view=personalinfo"
                            class="btn btn-primary py-2 mr-1">Apply Job</a>

                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

</section>

<section class="ftco-section ftco-counter img" id="section-counter"
    style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/bg_1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="1350000">0</strong>
                                <span>Jobs</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="40000">0</strong>
                                <span>Members</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="30000">0</strong>
                                <span>Resume</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="10500">0</strong>
                                <span>Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>