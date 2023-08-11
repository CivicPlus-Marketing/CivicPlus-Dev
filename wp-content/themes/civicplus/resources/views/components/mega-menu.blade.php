@if($menu)
    <nav id="nav" class="nav">
        <ul class="main-nav">
            @foreach($menu as $item)
                @if($item['is_it_link'])
                    <li>
                        <p class="nav-item">{!! $item['link']['title'] !!}</p>
                    </li>
                @else
                    <li class="has-submenu">
                        <p class="nav-item">{!! $item['title'] !!}</p>

                        @if($item['submenu'])
                            @php($submenu = $item['submenu'][0])
                            @switch($submenu['acf_fc_layout'])
                                @case('type_a')
                                    <div class="submenu type-a">
                                        <div class="submenu-body js-tabs">
                                            <div class="submenu-left">
                                                @foreach($submenu['tabs'] as $tab)
                                                    <button class="tab-nav-item js-tabs-nav">
                                                        <div>
                                                            <span>{!! $tab['title'] !!}</span>
                                                            <p>{!! $tab['description'] !!}</p>
                                                        </div>
                                                    </button>
                                                @endforeach
                                            </div>
                                            <div class="submenu-right">
                                                @foreach($submenu['tabs'] as $tab)
                                                    <div class="tabs-body js-tabs-body">
                                                        <div class="top"><p class="title">{!! $tab['title'] !!}</p>
                                                        </div>

                                                        @foreach($tab['columns'] as $col)
                                                            <div class="col col-{{ count($tab['columns']) }}">
                                                                <p class="label">{!! $col['title'] !!}</p>
                                                                @foreach($col['buttons'] as $button)
                                                                    <x-menu-link :link="$button['link']"
                                                                                 :description="$button['description']"
                                                                                 :image="$button['image']"/>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @case('type_b')
                                    <div class="submenu type-b">
                                        <div class="submenu-body js-tab-box js-tabs">
                                            <div class="top">
                                                <p class="label">{!! $submenu['tag'] !!}</p>
                                            </div>

                                            @foreach($submenu['buttons'] as $button)
                                                <x-menu-link :link="$button['link']"
                                                             :description="$button['description']"
                                                             :image="$button['image']"/>
                                            @endforeach
                                        </div>
                                    </div>
                                    @break
                                @case('type_c')
                                    <div class="submenu type-c">
                                        <div class="submenu-body @if($submenu['title']) has-title @endif">
                                            <div class="submenu-left">
                                                @if($submenu['title'])
                                                    <div class="top">
                                                        <p class="title">{!! $submenu['title'] !!}</p>
                                                    </div>
                                                @endif
                                                @foreach($submenu['buttons'] as $button)
                                                    <x-menu-link :link="$button['link']"
                                                                 :description="$button['description']"
                                                                 :image="$button['image']"/>
                                                @endforeach

                                            </div>
                                            <div class="submenu-right">
                                                <x-post-card :id="$submenu['post']"/>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @default
                                    @break
                            @endswitch
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
@endif
