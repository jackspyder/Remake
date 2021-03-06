<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>

            <li data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-users fa-lg"></i> Member Management <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">

                <li><a href="{{ url('/users/create') }}">Add Users</a></li>
                <li><a href="{{ url('/users') }}">View Users</a></li>
                <li><a href="#">Member Activity</a></li>

            </ul>


            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Database <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li><a href="{{ url('/items/create') }}">Add Items</a></li>
                <li><a href="{{ url('/items') }}">View Items</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#sales" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Sales <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="sales">

                <li><a href="{{ url('/receipts/create') }}">Add Sales</a></li>
                <li><a href="{{ url('/receipts') }}">View Sales</a></li>
            </ul>

            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </div>
</div>