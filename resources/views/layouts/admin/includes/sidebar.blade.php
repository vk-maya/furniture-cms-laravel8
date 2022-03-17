<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('admin.dashboard')}}"><img src="{{asset('assets/images/icon/logo.png')}}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active"> <a href="{{route('admin.dashboard')}}"><i class="ti-dashboard"></i><span>dashboard</span></a></li>
                    <li><a href="{{route('admin.category')}}"><i class="ti-layout-grid2-alt"></i> <span>Category</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-view-list"></i><span>Pages</span></a>
                        <ul class="collapse">
                            <li><a href="index.html">Add Page</a></li>
                            <li><a href="index3-horizontalmenu.html">View Pages</a></li>
                            <li><a href="index3-horizontalmenu.html">Trash Pages</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('admin.category')}}"><i class="ti-camera"></i> <span>Media</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
