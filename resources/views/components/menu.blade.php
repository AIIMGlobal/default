{{-- <div> --}}
    @foreach ($menus as $key => $menu)
        @if (count($menu->frontChildTreeInfo) > 0)
            <li class="col{{++$key}} mzr-drop"> 
                <a href="#" class="submenu">{{$menu->name}}</a>
                <div class="mzr-content drop-one-columns">
                    <div class="one-col">
                        <ul class="mzr-links">
                            @foreach ($menu->frontChildTreeInfo as $item)
                            <li> <a href="{{$item->url}}">{{$item->name}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
        @else
            <li class="col{{++$key}}">
                <a title="{{$menu->name}}" href="{{$menu->url}}">
                    {{$menu->name}}
                </a>
            </li>
        @endif

    @endforeach
{{-- </div> --}}
