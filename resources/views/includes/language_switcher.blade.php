<div class="language-switcher">
    <div class="icon"><img src="{{ asset('img/Language-selector.svg') }}" /></div>
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span class="active">{{ $available_locale }}</span>
        @else
            <span><a href="/language/{{ $available_locale }}">
               {{ $available_locale }}
            </a></span>
        @endif
    @endforeach
</div>