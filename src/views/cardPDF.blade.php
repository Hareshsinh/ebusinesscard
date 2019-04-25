<!DOCTYPE html>
<html>
<head>
    <title>E Business Card</title>

    <style type="text/css" media="all">

        br {
            clear: both
        }

        input {
            border: 1px solid #000;
            margin-bottom: .5em
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2);
            margin-left: 0;
            overflow: hidden;
            color: #fff
        }

        .location {
            color: #fff;
            padding-bottom: 10px;
            padding-right: 15px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2)
        }

        .container {
            padding: 2px 16px
        }

        /*body{padding-top:30px}*/

        small {
            display: block;
            line-height: 1.428571429;
            color: #999
        }

        body {
            font-family: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif;
            font-size: 13px;
            line-height: 19.5px;
            color: #fff;
        }

        .mobile-social-share h3 {
            color: inherit;
            float: left;
            font-size: 15px;
            line-height: 20px;
            margin: 25px 25px 0 25px
        }

        .btn-group {
            display: block;
            font-size: 0;
            position: relative;
            vertical-align: middle;
            white-space: nowrap;
            padding-top: 11px;
        }

        .mobile-social-share ul {
            float: right;
            list-style: none outside none;
            margin: 0;
            min-width: 61px;
            padding: 0
        }

        .mobile-social-share li {
            display: block;
            font-size: 18px;
            list-style: none outside none;
            margin-bottom: 3px;
            margin-left: 4px;
            margin-top: 3px
        }

        #socialShare > a {
            padding: 6px 10px 6px 10px
        }

        .dropdown-menu {
            min-width: 0;
            display: inline-block;
            padding: 0;
            alignment: center;
            background: #f00;
            margin: 0 auto;
            width: 90%;
        }

        .dropdown-menu li {
            display: inline-block;
            margin-right: 0;
            float: none;
        }

        .leave-top-space {
            width: 160px;
            padding-left: 10px;
        }

        .right-side-box {
            width: 300px;
            vertical-align: top;
        }

        .right-side-box h4 {
            font-size: 18px;
            padding: 0;
            line-height: 18px;
            height: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .person-photo {
            width: 138px;
            height: 138px;
            background: #fff;
            overflow: hidden;
            border-radius: 10px;
            display: block;
            position: relative;
            margin: 10px 0 10px 0px;
            border: 5px solid #fff;
        }

        .right-card {
            width: 554px;
            height: 200px;
            display: block;
            margin: 0 auto;
        }

        .main-img {
            height: inherit;
            width: auto;
            /*display: table-cell;*/
            /*vertical-align: middle;*/
            /*text-align: center;*/
        }

        .well-card h1 {
            text-align: center;
            margin-top: 0;
        }

        .well-sm {
            min-height: 235px;
        }

        .well {
            min-height: 20px;
            padding: 9px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        }

        .card {
            min-height: 255px;
            width: 535px;
            overflow: hidden;
            position: relative
            {{--background: url("{{ $ebusinesscard->backgroundPath }}") no-repeat left top;--}}

        }

        .black-bg {
            position: absolute;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, .5);
            display: block;
            z-index: 0;
        }

        .btn-group .dropdown-menu li {
            display: inline-block;
            margin-right: 10px;
        }

        .img-thumbnail {
            border: none;
            border-radius: 0;
            background: none;
            height: auto;
            width: 140px;
            height: 140px;
            text-align: center;
        }

        .designation-icon {
            padding-bottom: 5px;
        }

        .icon {
            height: 16px;
            margin-right: 5px;
        }

        .top-bg h2 {
            margin: 0;
        }

        .email-icon {
            line-height: 16px;
            height: 25px;
        }

        .email-icon img {
            float: left;
            padding-bottom: 0px;
            margin-bottom: 0;
        }

        .btn-group ul {
            padding: 0;
            width: 100%;
            text-align: center;
        }

        .btn-group ul li {
            text-align: center;
            width: 32px;
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="right-card">
    <div class="well-card">
        <div class="well well-sm">
            <div class="background img-responsive card">
                <img src="{{ $ebusinesscard->backgroundPath }}" style="width: 100%;position: absolute;">
                <div class="black-bg"></div>
                <table style="position: relative; z-index: 9;">
                    <tr>
                        <td class="leave-top-space" align="top">
                            <div style="position: relative; z-index: 2;">
                                <div class="person-photo">
                                    <div class="main-img">
                                        @if(isset($ebusinesscard) && (isset($ebusinesscard->profile) && $ebusinesscard->profile!=''))
                                            <img class="profile img-thumbnail" title="profile image"
                                                 src="{{ asset('ebusinesscards/profile/'.$ebusinesscard->profile) }}"
                                                 height="150" width="150" alt="Avatar">
                                        @else
                                            <img class="profile img-thumbnail" title="profile image"
                                                 src="{{ asset('ebusinesscards/social/avatar.png') }}" height="150"
                                                 width="150" alt="Avatar">
                                        @endif
                                    </div>
                                </div>
                                @if(isset($ebusinesscard->designation) && $ebusinesscard->designation!='')
                                    <div class="designation-icon">
                                        <img class="icon" src="{{ asset('ebusinesscards/icon/brifcase.svg') }}" height="16">
                                        <span>{{ $ebusinesscard->designation }}</span>
                                    </div>
                                @endif
                                @if(isset($ebusinesscard->phone) && $ebusinesscard->phone!='')
                                    <div class="designation-icon">
                                        <img class="icon" src="{{ asset('ebusinesscards/icon/phone.svg') }}" height="16">
                                        <span><a style="color: white; text-decoration: none; "
                                                 href="tel:{{ $ebusinesscard->phone }}">{{ $ebusinesscard->phone }}</a></span><br/>
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td class="right-side-box" align="top">
                            <h4>{{ $ebusinesscard->name }}</h4>
                            <div style="position: relative; z-index: 2;">
                                <!-- Split button -->
                                <small class="location">
                                    <cite title="Location">
                                        @if(isset($ebusinesscard->street) && $ebusinesscard->street!='')
                                            <span class="street-icon">{{ $ebusinesscard->street }}</span>
                                        @endif
                                        @if(isset($ebusinesscard->city) && $ebusinesscard->city!='')
                                            <span class="city-icon">{{ $ebusinesscard->city }}</span>
                                        @endif
                                        @if(isset($ebusinesscard->state) && $ebusinesscard->state!='')
                                            <span class="state-icon">{{ $ebusinesscard->state }}</span>
                                        @endif
                                        @if(isset($ebusinesscard->country) && $ebusinesscard->country!='')
                                            <span class="country-icon">{{ $ebusinesscard->country }}</span>
                                        @endif
                                        <span>{{ $ebusinesscard->pincode }}</span><img class="icon"
                                                                                       src="{{ asset('ebusinesscards/icon/map-icon.svg') }}"
                                                                                       height="16">
                                    </cite>
                                </small>
                                @if(isset($ebusinesscard->email) && $ebusinesscard->email!='')
                                    <div class="email-icon">
                                        <img class="icon" src="{{ asset('ebusinesscards/icon/email.svg') }}" height="16">
                                        <span>{{ $ebusinesscard->email }}</span><br/>
                                    </div>
                                @endif
                                @if(isset($ebusinesscard->website) && $ebusinesscard->website!='')
                                    <div class="email-icon">
                                        <img class="icon" src="{{ asset('ebusinesscards/icon/globe.svg') }}" height="16">
                                        <a style="color: #fff; text-decoration: none;" href="{{$ebusinesscard->website }}"
                                           target="_blank"><span>{{ $ebusinesscard->website }}</span></a><br/>
                                    </div>
                                @endif
                                @if(isset($ebusinesscard->skype_name) && $ebusinesscard->skype_name!='')
                                    <div class="email-icon">
                                        <img class="icon" src="{{ asset('ebusinesscards/icon/skype.svg') }}" height="16">
                                        <span>{{ $ebusinesscard->skype_name }}</span><br/>
                                    </div>
                                @endif
                                @if(isset($ebusinesscard->organisation) && $ebusinesscard->organisation!='')
                                    <div class="email-icon">
                                        <img class="icon" src="{{ asset('ebusinesscards/icon/gift.svg') }}" height="16">
                                        <span>{{ $ebusinesscard->organisation }}</span><br/>
                                    </div>
                                @endif
                                @if(isset($ebusinesscard->about) && $ebusinesscard->about!='')
                                    <div class="email-icon">
                                        <img class="icon" src="{{ asset('ebusinesscards/icon/info.svg') }}"
                                             height="16">
                                        <span>{{ $ebusinesscard->about }}</span>
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                </table>


                <div style="clear: both;"></div>

                <div class="btn-group">
                    <ul>
                        @if(isset($ebusinesscard->twitter) && $ebusinesscard->twitter!='')
                            <li>
                                <a href="{{$ebusinesscard->twitter }}" target="_blank">
                                    <img style="background: #41b7e6; border-radius: 5px;"
                                         src="{{ asset('ebusinesscards/social/twitter.svg') }}" width="32" height="32"
                                         title="Twitter" data-alt-src="{{ asset('ebusinesscards/social/twitter.svg') }}"></a>
                            </li>
                        @endif
                        @if(isset($ebusinesscard->facebook) && $ebusinesscard->facebook!='')
                            <li>
                                <a href="{{$ebusinesscard->facebook }}"
                                   target="_blank"><img style="background: #3c5b9f; border-radius: 5px;"
                                                        src="{{ asset('ebusinesscards/social/facebook.svg') }}" width="32"
                                                        height="32"
                                                        title="Facebook"
                                                        data-alt-src="{{ asset('ebusinesscards/social/facebook.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->instagram) && $ebusinesscard->instagram!='')
                            <li>
                                <a href="{{$ebusinesscard->instagram }}"
                                   target="_blank"><img style="background: #db4380; border-radius: 5px;"
                                                        src="{{ asset('ebusinesscards/social/instagram.svg') }}" width="32"
                                                        height="32"
                                                        title="Instagram"
                                                        data-alt-src="{{ asset('ebusinesscards/social/instagram.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->whatsapp) && $ebusinesscard->whatsapp!='')
                            <li>
                                <a href="{{$ebusinesscard->whatsapp }}"
                                   target="_blank"><img style="background: #44cf42; border-radius: 5px;"
                                                        src="{{ asset('ebusinesscards/social/whats-app.svg') }}" width="32"
                                                        height="32"
                                                        title="WhatsApp"
                                                        data-alt-src="{{ asset('ebusinesscards/social/whats-app.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->meetup) && $ebusinesscard->meetup!='')
                            <li>
                                <a href="{{$ebusinesscard->meetup }}" target="_blank"><img
                                            src="{{ asset('ebusinesscards/social/meetup.svg') }}" width="32" height="32"
                                            title="Meetup" data-alt-src="{{ asset('ebusinesscards/social/meetup.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->snapchat) && $ebusinesscard->snapchat!='')
                            <li><a href="{{$ebusinesscard->snapchat }}"
                                   target="_blank"><img src="{{ asset('ebusinesscards/social/snapchat.svg') }}" width="32"
                                                        height="32"
                                                        title="Snapchat"
                                                        data-alt-src="{{ asset('ebusinesscards/social/snapchat.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->google) && $ebusinesscard->google!='')
                            <li>
                                <a href="{{$ebusinesscard->google }}" target="_blank"><img
                                            style="background: #cd4420; border-radius: 5px;"
                                            src="{{ asset('ebusinesscards/social/google-plus.svg') }}" width="32" height="32"
                                            title="Google+" data-alt-src="{{ asset('ebusinesscards/social/google-plus.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->linkedin) && $ebusinesscard->linkedin!='')
                            <li>
                                <a href="{{$ebusinesscard->linkedin }}" target="_blank"><img
                                            style="background: #2c7dbf; border-radius: 5px;"
                                            src="{{ asset('ebusinesscards/social/linked-in.svg') }}" width="32" height="32"
                                            title="LinkedIn" data-alt-src="{{ asset('ebusinesscards/social/linked-in.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->foursquare) && $ebusinesscard->foursquare!='')
                            <li>
                                <a href="{{$ebusinesscard->foursquare }}" target="_blank"><img
                                            style="background: #f44877; border-radius: 5px;"
                                            src="{{ asset('ebusinesscards/social/foursquare.svg') }}" width="32" height="32"
                                            title="Foursquare"
                                            data-alt-src="{{ asset('ebusinesscards/social/foursquare.svg') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->blog) && $ebusinesscard->blog!='')
                            <li>
                                <a href="{{$ebusinesscard->blog }}" target="_blank"><img
                                            src="{{ asset('ebusinesscards/social/wordpress.png') }}" width="32" height="32"
                                            title="Blog" data-alt-src="{{ asset('ebusinesscards/social/wordpress.png') }}"></a>
                            </li>

                        @endif

                        @if(isset($ebusinesscard->youtube) && $ebusinesscard->youtube!='')
                            <li>
                                <a href="{{$ebusinesscard->youtube }}" target="_blank"><img
                                            src="{{ asset('ebusinesscards/social/youtube.png') }}" width="32" height="32"
                                            title="YouTube" data-alt-src="{{ asset('ebusinesscards/social/youtube.png') }}"></a>
                            </li>

                        @endif
                        @if(isset($ebusinesscard->pinterest) && $ebusinesscard->pinterest!='')
                            <li style="margin-right: 0;">
                                <a href="{{$ebusinesscard->pinterest }}" target="_blank"><img
                                            style="background: #d82f22; border-radius: 5px;"
                                            src="{{ asset('ebusinesscards/social/pinterest.svg') }}" width="32" height="32"
                                            title="Pinterest" data-alt-src="{{ asset('ebusinesscards/social/pinterest.svg') }}"></a>
                            </li>
                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

