

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Dolphin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                
                @foreach($items as $item)
                <li>
                    <a href="{!! $item->url() !!}"><i class="fa fa-{!! $item->icon !!} fa-fw"></i> {!! $item->title !!} @if($item->hasChildren()) <span class="fa arrow"></span> @endif </a>
                    @if($item->hasChildren())
                        <ul class="nav nav-second-level">
                            @foreach($item->children() as $itemChild1)
                            <li>
                                <a href="{!! $itemChild1->url() !!}">{!! $itemChild1->title !!} @if($itemChild1->hasChildren()) <span class="fa arrow"></span> @endif </a>
                                @if($itemChild1->hasChildren())
                                    <ul class="nav nav-third-level">
                                        @foreach($itemChild1->children() as $itemChild2)
                                        <li>
                                            <a href="{!! $itemChild2->url() !!}">{!! $itemChild2->title !!}</a>
                                        </li>
                                        @endforeach
                                    </ul> 
                                @endif
                            </li>
                            @endforeach
                        </ul> 
                    @endif
                </li>
                @endforeach
                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>