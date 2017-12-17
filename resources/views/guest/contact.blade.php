@extends('layouts.master')

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>contact us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">contact us</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="contact-box col-xs-12">
            <div class="container">
                <div class="contact-form col-xs-12">
                    <div class="block col-md-6 col-xs-12">
                        <div class="inner">
                            <h3>contact info</h3>
                            <div class="card-blocks col-xs-12">
                                <div class="card col-md-6 col-sm-6 col-xs-12">
                                    <div class="card-inner">
                                        <i class="zmdi zmdi-pin"></i>
                                        <h4>our location</h4>
                                        <p>
                                            <span>faculty of computer and information , mansoura university</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="card col-md-6 col-sm-6 col-xs-12">
                                    <div class="card-inner">
                                        <i class="zmdi zmdi-phone-in-talk"></i>
                                        <h4>no.phone</h4>
                                        <p>
                                            <span>+010 2451 7052</span>
                                            <span>+010 2792 8812</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="card col-md-6 col-sm-6 col-xs-12">
                                    <div class="card-inner">
                                        <i class="zmdi zmdi-email"></i>
                                        <h4>email address</h4>
                                        <p>
                                            <span>Info@Hospital.Com</span>
                                            <span>Support@Hospital.Com</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="card col-md-6 col-sm-6 col-xs-12">
                                    <div class="card-inner">
                                        <i class="zmdi zmdi-headset-mic"></i>
                                        <h4>support 24/7</h4>
                                        <p>
                                            <span>help.hospital@gmail.com</span>
                                            <span>+01 2548 0154 44</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end block -->
                    <div class="block col-md-6 col-xs-12">
                        <div class="inner">
                            <h3>form contact</h3>
                            <form action="/contactUs" method="post">
                              {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="full name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="email address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone_number" placeholder="NO.Phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="your message" name="msg" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="send" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map col-xs-12">
                <div class="map"></div>
            </div>
        </div>
@endsection
