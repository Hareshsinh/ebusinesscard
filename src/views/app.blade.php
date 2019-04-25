<!DOCTYPE html>
<html>
<head>
    <title>E Business Card</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('ebusinesscards/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('ebusinesscards/js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ebusinesscards/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ebusinesscards/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('ebusinesscards/js/bootstrap.min.js') }}"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="{{ asset('ebusinesscards/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ebusinesscards/js/jquery.validate.min.js') }}" rel="stylesheet">
    <link href="{{ asset('ebusinesscards/css/custom.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="top-bg">
    <div class="container">
        <a href="/ebusinesscard" class="btn btn-info add-new"><i class="fa fa-chevron-circle-left"></i> &nbsp;BACK</a>
        <h2>{{ $message }} <b>E Business Card </b></h2>
    </div>
</div>
<div class="container">
    <div class="right-card">
        <div class="well-card">
            <div class="well well-sm">
                <div class="row background img-responsive card text-white bg-info mb mb-3">
                    <div class="col-sm-4 col-md-4 leave-top-space">
                        @if(isset($ebusinesscard) && (isset($ebusinesscard->profile) && $ebusinesscard->profile!=''))
                            <div class="person-photo">
                                <div class="main-img"><img class="profile img-thumbnail" title="profile image"
                                                           data-toggle="tooltip"
                                                           src="{{ asset('ebusinesscards/profile/'.$ebusinesscard->profile) }}"
                                                           height="200" alt="Avatar"></div>
                            </div>
                        @else
                            <div class="person-photo">
                                <div class="main-img"><img class="profile img-thumbnail" title="profile image"
                                                           data-toggle="tooltip"
                                                           src="{{ asset('ebusinesscards/social/avatar.png') }}" height="200"
                                                           alt="Avatar"></div>
                            </div>
                        @endif
                        <div class="designation-icon"><i class="glyphicon glyphicon-briefcase" title="designation"
                                                         data-toggle="tooltip"></i><span id='designation'></span></div>
                        <div class="phone-icon"><i class="glyphicon glyphicon-phone" data-icon="phone" title="phone"
                                                   data-toggle="tooltip"></i><span id='phone'></span><br/></div>
                    </div>
                    <div class="col-sm-8 col-md-8 leave-top-space">

                        <!-- Split button -->
                        <div class="btn-group pull-right">
                            <button type="button" title="Social Shere" data-toggle="tooltip" class="btn btn-primary">
                                <i class="fa fa-share-alt fa-inverse"></i></button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" class="twitter social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/twitter.svg') }}" width="32" height="32"
                                                title="Twitter"
                                                data-alt-src="{{ asset('ebusinesscards/social/twitter.png') }}"></a></li>
                                <li><a href="#" class="facebook social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/facebook.svg') }}" width="32" height="32"
                                                title="Facebook"
                                                data-alt-src="{{ asset('ebusinesscards/social/facebook.png') }}"></a></li>
                                <li><a href="#" class="instagram social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/instagram.svg') }}" width="32" height="32"
                                                title="Instagram"
                                                data-alt-src="{{ asset('ebusinesscards/social/instagram.png') }}"></a></li>
                                <li><a href="#" class="whatsapp social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/whats-app.svg') }}" width="32" height="32"
                                                title="WhatsApp"
                                                data-alt-src="{{ asset('ebusinesscards/social/whats-app.png') }}"></a></li>
                                <li><a href="#" class="meetup social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/meetup.svg') }}" width="32" height="32"
                                                title="Meetup"
                                                data-alt-src="{{ asset('ebusinesscards/social/meetup.png') }}"></a></li>
                                <li><a href="#" class="snapchat social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/snapchat.svg') }}" width="32" height="32"
                                                title="Snapchat"
                                                data-alt-src="{{ asset('ebusinesscards/social/snapchat.png') }}"></a></li>
                                <li><a href="#" class="google social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/google-plus.svg') }}" width="32"
                                                height="32" title="Google+"
                                                data-alt-src="{{ asset('ebusinesscards/social/google-plus.png') }}"></a>
                                </li>
                                <li><a href="#" class="linkedin social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/linked-in.svg') }}" width="32" height="32"
                                                title="LinkedIn"
                                                data-alt-src="{{ asset('ebusinesscards/social/linked-in.png') }}"></a></li>
                                <li><a href="#" class="foursquare social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/foursquare.svg') }}" width="32" height="32"
                                                title="Foursquare"
                                                data-alt-src="{{ asset('ebusinesscards/social/foursquare.png') }}"></a></li>
                                <li><a href="#" class="blog social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/wordpress.svg') }}" width="32" height="32"
                                                title="Blog"
                                                data-alt-src="{{ asset('ebusinesscards/social/wordpress.png') }}"></a></li>
                                <li><a href="#" class="youtube social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/youtube.svg') }}" width="32" height="32"
                                                title="YouTube"
                                                data-alt-src="{{ asset('ebusinesscards/social/youtube.png') }}"></a></li>
                                <li><a href="#" class="pinterest social" href="" target="_blank"><img
                                                src="{{ asset('ebusinesscards/social/pinterest.svg') }}" width="32" height="32"
                                                title="Pinterest"
                                                data-alt-src="{{ asset('ebusinesscards/social/pinterest.png') }}"></a></li>
                            </ul>
                        </div>
                        <h4 id='name'></h4>
                        <small class="location"><cite data-toggle="tooltip" title="Location">
                                <span id='street' class="street-icon"></span>
                                <span id='city' class="city-icon"> </span>
                                <span id='state' class="state-icon"></span>
                                <span id='country' class="country-icon"> </span>
                                <span id='zipcode'></span><i class="glyphicon glyphicon-map-marker zipcode-icon"></i>
                            </cite></small>
                        <p>
                        <div class="email-icon"><i class="glyphicon glyphicon-envelope" data-icon="email" title="email"
                                                   data-toggle="tooltip"></i><span id="email"></span><br/></div>
                        <div class="website-icon"><i class="glyphicon glyphicon-globe" data-icon="website"
                                                     title="website" data-toggle="tooltip"></i><a class="website"><span
                                        id="website"></span> </a><br/></div>
                        <div class="skype_name-icon" style="padding-bottom: 6px">
                            <i class="fa fa-skype"  data-icon="skype_name"
                               title="skype name" data-toggle="tooltip"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span id='skype_name'></span><br/></div>
                        <div class="organisation-icon"><i class="glyphicon glyphicon-gift organisation-icon"
                                                         title="organisation" data-toggle="tooltip"></i><span
                                    id='organisation'></span></div>
                        <div class="about-icon"><i class="glyphicon glyphicon-info-sign" data-icon="about" title="about"
                                                   data-toggle="tooltip"></i><span id='about'></span></div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($submit!='view')
        <div class="row">

            <div class="col-sm-12">
                <div class="well well-sm">

                    @if(isset($ebusinesscard) && $ebusinesscard!='')
                        {{ Form::model($ebusinesscard, ['route' => ['ebusinesscard.update', $ebusinesscard->id], 'method' => 'patch','id'=>'ecardformID','enctype'=>"multipart/form-data",'files' => true]) }}
                    @else
                        {!! Form::open(['route' => 'ebusinesscard.store','id'=>'ecardformID','enctype'=>"multipart/form-data",'files' => true]) !!}
                        {{ Form::hidden('status','active',[]) }}
                    @endif
                    <div class="form-group"><b><h4>Genral Information</h4></b></div>
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Input Your name','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('designation',null,['class' => 'form-control','placeholder'=>'Input Your designation','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('organisation',null,['class' => 'form-control','placeholder'=>'Input Your organisation']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::email('email',null,['class' => 'form-control','placeholder'=>'Input Your email','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('phone',null,['class' => 'form-control','placeholder'=>'Input Your phone','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('fax',null,['class' => 'form-control','placeholder'=>'Input Your fax']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('skype_name',null,['class' => 'form-control','placeholder'=>'Input Your skype_name']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('website',null,['class' => 'form-control','placeholder'=>'Input Your website','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('street',null,['class' => 'form-control','placeholder'=>'Input Your street','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('city',null,['class' => 'form-control','placeholder'=>'Input Your city','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('state',null,['class' => 'form-control','placeholder'=>'Input Your state','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('country',null,['class' => 'form-control','placeholder'=>'Input Your country','required'=>'required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('zipcode',null,['class' => 'form-control','placeholder'=>'Input Your zipcode','required'=>'required']) !!}
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group"><b><h4>Social Information</h4></b></div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                {!! Form::text('whatsapp',null,['class' => 'form-control','placeholder'=>'Input Your whatsapp']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('linkedin',null,['class' => 'form-control','placeholder'=>'Input Your linkedin']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('instagram',null,['class' => 'form-control','placeholder'=>'Input Your instagram']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('snapchat',null,['class' => 'form-control','placeholder'=>'Input Your snapchat']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('facebook',null,['class' => 'form-control','placeholder'=>'Input Your facebook']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('google',null,['class' => 'form-control','placeholder'=>'Input Your google']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('twitter',null,['class' => 'form-control','placeholder'=>'Input Your twitter']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('foursquare',null,['class' => 'form-control','placeholder'=>'Input Your foursquare']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('youtube',null,['class' => 'form-control','placeholder'=>'Input Your youTube']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('blog',null,['class' => 'form-control','placeholder'=>'Input Your blog']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('meetup',null,['class' => 'form-control','placeholder'=>'Input Your meetup']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                {!! Form::text('pinterest',null,['class' => 'form-control','placeholder'=>'Input Your pinterest']) !!}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><b><h4>About us Information</h4></b></div>
                            <div class="form-group">
                                {!! Form::textarea('about',null,['class' => 'form-control','placeholder'=>'Input Your about','rows'=>2]) !!}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group col-sm-3"><b><h4>Images</h4></b></div>
                            <div class="col-sm-3">
                                <label for="profile">Profile </label>
                                <div class="form-group">
                                    {!! Form::file('profile',['class' => 'form-control','placeholder'=>'Input Your profile','id'=>'imagesUpload']) !!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="background">Background </label>
                                <div class="form-group">
                                    {!! Form::file('background',['class' => 'form-control','placeholder'=>'Input Your background']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group ">
                                {!! Form::submit($submit, ['class' => 'btn btn-primary btn-lg']) !!}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

        </div>
    @endif
</div>
<script src="{{ asset('ebusinesscards/js/custom.js') }}"></script>

@if(isset($ebusinesscard) && $ebusinesscard!='')
    @foreach(array_keys($ebusinesscard->toArray()) as $value)
        @if($value)
            <script>
                var inputName = '{{ $value }}';
                var inputVal = '{{ $ebusinesscard->$value }}';
                $("#" + inputName).show().empty().append(inputVal);
                $("." + inputName).show();
                $('.' + inputName + '-icon').show();
                $("." + inputName).attr("href", '');
                $("." + inputName).attr("href", inputVal)
            </script>
        @endif
    @endforeach
@endif

@if(isset($ebusinesscard) && (isset($ebusinesscard->background) && $ebusinesscard->background!=''))
    <script>
        $('.background').css({
            'background-image': 'url({{ asset('ebusinesscards/background/'.$ebusinesscard->background) }})',
            'background-size': '100%'
        });
    </script>
@else
    <script>
        $('.background').css({
            'background-image': 'url({{ asset('ebusinesscards/social/background.jpeg') }})',
            'background-size': '100%'
        });
    </script>
@endif

</body>
</html>

