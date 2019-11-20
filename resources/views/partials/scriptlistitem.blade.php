<li class="script-list--item js-script-list--item">
    <img src="{{ $script->avatar_link() }}" class="script-list--item--image">
    <h2 class="script-list--item--title">{{ $script->title }}</h2>
    <blockquote class="script-list--item--description">
        {{ $script->description }}
    </blockquote>
    <div class="script-list--item--copylink">
        <input type="text" class="script-list--item--copylink--link js-script-list--link" value="{{ $script->direct_link() }}">
        
        <div class="script-list--item--copylink--buttons">
            <a href="{{ $script->example_link() }}" class="script-list--item--copylink--btn btn icon-eye" type="button" title="See live example" target="_blank" rel="noopener nofollow"></a>
            <button class="script-list--item--copylink--btn btn icon-copy js-script-list--copylink" type="button" title="Copy the link"></button>
            <a href="{{ $script->direct_link() }}" class="script-list--item--copylink--btn btn icon-download" type="button" title="Download script" download=""></a>
        </div>
    </div>
</li>
