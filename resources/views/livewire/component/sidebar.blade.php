
<!-- Sidbar menu -->
<div>
    <div class="user-account p-3 mb-3">
        <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
            <div class="dropdown flex-grow-1">
                <span>Welcome,</span>
                <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>{{Session::get('user_name')}}</strong></a>
                <ul class="dropdown-menu p-2 shadow-sm">
                    <li><a href="{{route('logout')}}"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- nav tab: menu list -->
    <ul class="nav nav-tabs text-center mb-2" role="tablist">
        @if(\App\Helpers\AuthHelper::isAdmin())
            <li class="nav-item flex-fill"><a class="nav-link active" data-bs-toggle="tab" href="#admin_menu" role="tab">Admin</a></li>
        @else
            <li class="nav-item flex-fill"><a class="nav-link active" id="student_menu_nav_link" data-bs-toggle="tab" href="#student_menu" role="tab">Student</a></li>
        @endif
    </ul>
    @livewire('component.sidebar-menu')
</div>