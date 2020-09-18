@section('body')
<!-- BEGIN: Header -->
<div class="m-subheader">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Dashboard</h3>
        </div>
        <div>
            <span class="m-subheader__daterange" id="daterangepicker">
                <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span class="m-subheader__daterange-date m--font-brand"></span>
                </span>
                <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>
<!-- END: Header -->
<div class="m-content">
    <!--begin:: Widgets/Stats-->
    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title"># New Orders</h4>
                            <br>
                            <span class="m-widget24__desc">Number of new orders</span>
                            <span class="m-widget24__stats m--font-brand" id="num_new_orders"></span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm transparent-background"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title"># New Clients</h4>
                            <br>
                            <span class="m-widget24__desc">Number of new clients</span>
                            <span class="m-widget24__stats m--font-info" id="num_new_clients"></span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm transparent-background"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">Total Income</h4>
                            <br>
                            <span class="m-widget24__desc">Total amount of income</span>
                            <span class="m-widget24__stats m--font-success" id="amount"></span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm transparent-background"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">Due Amount</h4>
                            <br>
                            <span class="m-widget24__desc">Total due amount of income</span>
                            <span class="m-widget24__stats m--font-danger" id="due"></span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm transparent-background"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-8">
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">Top 5 Orders</h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget11_tab1_content">
                            <table class="table table-striped table-bordered table-hover table-checkable" id="top-orders-table">
                                <thead>
                                    <tr>
                                        <th>Order#</th>
                                        <th>Organisation</th>
                                        <th>Invoice Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td></td>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="m_widget11_tab2_content"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">Web Services Warnings</h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <table class="table table-striped table-bordered table-hover table-checkable" id="web-services-table">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Order#</th>
                                <th>Description</th>
                                <th>Expire in</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">Income vs. Month</h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <canvas id="income-month-bar-chart"></canvas>
        </div>
    </div>

</div>
@endsection