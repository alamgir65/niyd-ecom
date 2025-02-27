<div class="dashboard_tab_button">
    <ul role="tablist" class="nav flex-column dashboard-list">
        <li><a href="{{route('customer.dashboard')}}"  class="nav-link {{\Request::route()->getName()=='customer.dashboard'?'active':''}}">Dashboard</a></li>
        <li><a href="{{route('customer.dashboard.profile')}}" class="nav-link {{\Request::route()->getName()=='customer.dashboard.profile'?'active':''}}">My Profile</a></li>
        <li> <a href="{{route('customer.dashboard.order')}}" class="nav-link {{\Request::route()->getName()=='customer.dashboard.order'?'active':''}}">My Order</a></li>
        <li><a href="{{route('customer.dashboard.wishlist')}}" class="nav-link {{\Request::route()->getName()=='customer.dashboard.wishlist'?'active':''}}">My Wishlist</a></li>
        <li><a href="{{route('customer.dashboard.change-password')}}" class="nav-link {{\Request::route()->getName()=='customer.dashboard.change-password'?'active':''}}">Change Password</a></li>
        <li><a href="{{route('customer.logout')}}" class="nav-link">logout</a></li>
    </ul>
</div>
