@extends('app')


@section('main-content')
    <div class="position-relative">
        @if(isset($message))
            <h3></h3>
            <div class="alert alert-info">
                <strong>{{$message}}, plan: {{ $plan }}</strong> <br>
            </div>
        @endif
    </div>
    <h2>PLANS</h2>
    <div class="col-xs-6 col-sm-3 pricing-box">
        <div class="widget-box widget-color-dark">
            <div class="widget-header">
                <h5 class="widget-title bigger lighter">Basic Package</h5>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <ul class="list-unstyled spaced2">
                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            10 GB Disk Space
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            200 GB Bandwidth
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            100 Email Accounts
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            10 MySQL Databases
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            $10 Ad Credit
                        </li>

                        <li>
                            <i class="ace-icon fa fa-times red"></i>
                            Free Domain
                        </li>
                    </ul>

                    <hr>
                    <div class="price">
                        $5
                        <small>/month</small>
                    </div>
                </div>

                <div>
                    <a class="btn btn-block btn-inverse" href="#">
                        <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="plan" value="basic">
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_p6G8wxXZHtrnWGlWd78UZCYo"
                                    data-amount="1000"
                                    data-name="Demo Site"
                                    data-description="2 widgets (5€)"
                                    data-image="/img/Opml-icon-128x128.png
">
                            </script>
                        </form>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xs-6 col-sm-3 pricing-box">
        <div class="widget-box widget-color-orange">
            <div class="widget-header">
                <h5 class="widget-title bigger lighter">Starter Package</h5>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <ul class="list-unstyled spaced2">
                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            50 GB Disk Space
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            1 TB Bandwidth
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            1000 Email Accounts
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            100 MySQL Databases
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            $25 Ad Credit
                        </li>

                        <li>
                            <i class="ace-icon fa fa-check green"></i>
                            Free Domain
                        </li>
                    </ul>

                    <hr>
                    <div class="price">
                        $10
                        <small>/month</small>
                    </div>
                </div>

                <div>
                    <a class="btn btn-block btn-warning" href="#">
                        <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="plan" value="starter">
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_p6G8wxXZHtrnWGlWd78UZCYo"
                                    data-amount="2000"
                                    data-name="Demo Site"
                                    data-description="2 widgets (10€)"
                                    data-image="/img/Opml-icon-128x128.png
">
                            </script>
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection