<!DOCTYPE html>
<html>

@extends('layouts.app')

@section('content')

    <head>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    </head>

    <main>
        <div class="container">
            <h1>NOTIFICATIONS</h1>

        </div>
    </main>


    <footer class="footer">
        <div> 
            <img class="feeds_logo" src="{{ asset('images/logo_feeds.png') }}">
            <a class = "feedsLink" href="{{}}">Feeds</a>
        </div>

        <div>
            <img class="notif_logo" src="{{ asset('images/logo_notifications.png') }}">
            <a class="notifLink" href="">Notifications</a>
        </div>

        <div>
            <img class="services_logo" src="{{ asset('images/logo_services.png') }}">
            <a  class = "servicesLink" href="">Services</a>
        </div>

        <div>
            <img class="chat_logo" src="{{ asset('images/logo_chat.png') }}">
            <a class = "chatLink" href="">Chat</a>
        </div>

        <div>
            <img class="profile_logo" src="{{ asset('images/logo_profile.png') }}">
            <a class = "profileLink" href="">Profile</a>
        </div>
        <div>
            <div id="feedsLink">feedsLinkfeedsLinkfeedsLinkfeedsLinkfeedsLinkfeedsLinkfeedsLink</div>
            <div id="notification">asnotificationnotificationnotificationnotification</div>
        </div>
    </footer>
@endsection

</html>


