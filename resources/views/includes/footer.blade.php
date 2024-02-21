
<footer>
    <div class="wrapper">
        <div class="inside">
            <div class="foot-logo"><a href="{{ route('home')}}"><img src="{{ asset('img/LOGO_PICON.svg') }}" /></a></div>
            <div class="foot-socials">
                <ul>
                    <li><a href="https://www.facebook.com/picon" target="_blank"><img src="{{ asset('img/facebook.svg') }}" /></a></li>
                    <li><a href="https://www.instagram.com/piconofficiel/" target="_blank"><img src="{{ asset('img/instagram.svg') }}" /></a></li>
                </ul>
            </div>

            <div class="foot-legals">
                <div class="foot-copy">
                    <p>Rue aux laines 70, 1000 Bruxelles</p>
                    <p>2024 Picon - Campari - All rights reserved</p>
                </div>
                 <div class="foot-links">
                    <ul>
                        <li><a href="{{route('about')}}">{{ __('A propos') }}</a></li>
                        <li><a href="{{route('privacy')}}">{{ __('Privacy') }}</a></li>
                         <li><a href="{{route('conditions')}}">{{ __('Conditions') }}</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="warning">{{ __('ENJOY picon responsibly') }}</div>
    </div>
</footer>
<script id="CookieDeclaration" src="https://consent.cookiebot.com/f0e14da4-ebdc-484f-b4b2-a19f210eec45/cd.js" type="text/javascript" async></script>
