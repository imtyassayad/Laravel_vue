<template>

    <div class="content_wrapper bg_homebefore">
        <div class="container-fluid">
          <div class="sec-title">
            <div class="row d-flex align-items-center">
              <div class="col-md-12">
                <div class="heading_home">
                  <h2>Welcome back Multinod</h2>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="content-bar">
            <!-- Start row -->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-12 col-xl-3">
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Revenue Increase</p>
                        <h4 class="card-title mb-0 border-0">10%</h4>
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i
                            class="ti ti-arrow-top-right line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Open Projects</p>
                        <h4 class="card-title mb-0 border-0">498</h4>
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i
                            class="ti ti-money line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Working Employees</p>
                        <h4 class="card-title mb-0 border-0">17,986</h4>
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i
                            class="ti-user line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End col -->
              <!-- Start col -->
              <div class="col-lg-12 col-xl-9">
                <div class="card m-b-30">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-6 col-lg-9">
                        <h5 class="card-title mb-0">Lead Compare</h5>
                      </div>
                      <div class="col-6 col-lg-3">
                        <select class="form-control font-12 select">
                          <option value="class1" selected>Last Week</option>
                          <option value="class2">Last Month</option>
                          <option value="class3">Last Year</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div id="apex-bar-chart"></div>
                  </div>
                </div>
              </div>
              <!-- End col -->
            </div>
            <!-- End row -->
            <!-- Start row -->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-12 col-xl-9">
                <div class="card m-b-30">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-6 col-lg-9">
                        <h5 class="card-title mb-0">Average Monthly Revenue</h5>
                      </div>
                      <div class="col-6 col-lg-3">
                        <select class="form-control font-12">
                          <option value="class1" selected>Last Week</option>
                          <option value="class2">Last Month</option>
                          <option value="class3">Last Year</option>
                        </select>
                      </div>
                    </div>
                    <h2>$8,66,587</h2>
                  </div>
                  <div class="card-body p-0">
                    <div id="apex-area-chart"></div>
                  </div>
                </div>
              </div>
              <!-- End col -->
              <!-- Start col -->
              <div class="col-lg-12 col-xl-3">
                <div class="card m-b-30">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">Ticket Status</h5>
                  </div>
                  <div class="card-body text-center">
                    <div id="apex-stroked-circle-guage-chart"></div>
                  </div>
                  <div class="card-footer text-center">
                    <div class="row">
                      <div class="col-4 border-right px-0">
                        <p class="my-2">New</p>
                        <h5>589</h5>
                      </div>
                      <div class="col-4 border-right px-0">
                        <p class="my-2">Open</p>
                        <h5>1298</h5>
                      </div>
                      <div class="col-4 px-0">
                        <p class="my-2">Time</p>
                        <h5>1 Day</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End col -->
            </div>
            <!-- End row -->
            <!-- Start row -->
            <div class="row customers">
              <div class="col-lg-12 col-xl-3">
                <div class="card  m-b-30 no-border">
                  <div class="card-header bg-white">
                    <h3 class="card-title float-left">Visiting customers</h3>
                    <div class="float-right"> <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="lni-more-alt"></i> </a>
                      <div class="dropdown-menu"> <a class="dropdown-item" href="#"><i class="lni-eye m-r-10"></i>
                          View</a> <a class="dropdown-item" href="#"><i class="lni-add-file m-r-10"></i> Add</a> <a
                          class="dropdown-item" href="#"><i class="lni-download m-r-10"></i> Download</a> <a
                          class="dropdown-item" href="#"><i class="lni-cog m-r-10"></i> More</a> <a
                          class="dropdown-item" href="#"><i class="lni-archive m-r-10"></i> Remove</a> </div>
                    </div>
                  </div>
                  <div class="card-body visitor-customer">
                    <div class="media border-bottom p-b-15"> <img class="rounded-circle m-r-15 w-45"
                        src="/web/images/customer-img1.jpg" alt="widget">
                      <div class="media-body">
                        <div><strong>Anderson</strong></div>
                        Designer at facebook
                      </div>
                      <div class="float-right"> <small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i>
                          12 Oct 2014</small> </div>
                    </div>
                    <div class="media m-t-15 m-b-15 p-b-15 border-bottom"> <img class="rounded-circle m-r-15 w-45"
                        src="/web/images/customer-img2.jpg" alt="widget">
                      <div class="media-body">
                        <div><strong>David adnan</strong></div>
                        Manager at google
                      </div>
                      <div class="float-right"> <small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i>
                          12 Oct 2014</small> </div>
                    </div>
                    <div class="media m-t-15 m-b-15 p-b-15 border-bottom"> <img class="rounded-circle m-r-15 w-45"
                        src="/web/images/customer-img3.jpg" alt="widget">
                      <div class="media-body">
                        <div><strong>Maria leo</strong></div>
                        developer at google
                      </div>
                      <div class="float-right"> <small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i>
                          12 Oct 2014</small> </div>
                    </div>
                    <div class="media m-t-15 m-b-15 p-b-15 border-bottom"> <img class="rounded-circle m-r-15 w-45"
                        src="/web/images/customer-img4.jpg" alt="widget">
                      <div class="media-body">
                        <div><strong>Adnan</strong></div>
                        Designer at youtube
                      </div>
                      <div class="float-right"> <small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i>
                          12 Oct 2014</small> </div>
                    </div>
                    <div class="media m-t-15"> <img class="rounded-circle m-r-15 w-45" src="/web/images/customer-img5.jpg"
                        alt="widget">
                      <div class="media-body">
                        <div><strong>David</strong></div>
                        Facebook developer
                      </div>
                      <div class="float-right"> <small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i>
                          12 Oct 2014</small> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-xl-9">
                <div class="card m-b-30 no-border recent-order">
                  <div class="card-header bg-white no-border border-bottom-transparent">
                    <h3 class="card-title float-left">Recent Orders</h3>
                    <div class="float-right">
                      <ul class="nav" role="tablist">
                        <li class="nav-item"> <a class="p-r-10 active" data-toggle="tab" href="#edl-tab30">Today</a>
                        </li>
                        <li class="nav-item"> <a class="p-r-10" data-toggle="tab" href="#edl-tab31">Week</a> </li>
                        <li class="nav-item"> <a data-toggle="tab" href="#edl-tab32">Month</a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body no-padding">
                    <div class="tab-content">
                      <div class="tab-pane active" id="edl-tab30">
                        <div class="table-responsive">
                          <table class="table recent-order">
                            <thead class="">
                              <tr>
                                <th class="border-0">#</th>
                                <th class="border-0">Item name</th>
                                <th class="border-0">Product Id</th>
                                <th class="border-0">Quantity</th>
                                <th class="border-0">Price</th>
                                <th class="border-0">Time</th>
                                <th class="border-0">Customer</th>
                                <th class="border-0">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Computer</td>
                                <td>id#9001 </td>
                                <td>20</td>
                                <td>$120.00</td>
                                <td>19-11-2016 03:09:08</td>
                                <td>Patricia J. King </td>
                                <td><span class="badge-dot badge-brand mr-1"></span>Pending </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>CPU</td>
                                <td>id#9002 </td>
                                <td>12</td>
                                <td>$190.00</td>
                                <td>29-12-2016 01:23:11</td>
                                <td>Rachel J. Wicker </td>
                                <td><span class="badge-dot badge-success mr-1"></span>Delivered</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Laptop</td>
                                <td>id#9003 </td>
                                <td>23</td>
                                <td>$690.00</td>
                                <td>12-12-2016 11:12:28</td>
                                <td>Michael K. Ledford </td>
                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                              </tr>
                              <tr class="border-bottom">
                                <td>4</td>
                                <td>Mobile</td>
                                <td>id#9004 </td>
                                <td>34</td>
                                <td>$650.00</td>
                                <td>23-12-2016 09:08:55</td>
                                <td>Michael K. Ledford </td>
                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                              </tr>
                              <tr class="border-bottom">
                                <td>5</td>
                                <td>Tab</td>
                                <td>id#9004 </td>
                                <td>34</td>
                                <td>$650.00</td>
                                <td>23-12-2016 09:08:55</td>
                                <td>Michael K. Ledford </td>
                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                              </tr>
                              <tr class="border-top-transparent">
                                <td colspan="9" class="pr-0 pb-0"><a href="#"
                                    class="bttn bttn-success float-right m-t-10">View Details</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End row -->

          </div>
          <!-- End Rightbar -->
        </div>
    </div>

</template>

<script>

</script>
