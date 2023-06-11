
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
            <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
    </div>

    <hr class="mt-0 mb-3">
    <div class="d-flex align-items-center">
        <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="avatar ml-3">
        <div class="ml-3">
            <h4 class="mb-0">{{auth()->user()->name}}</h4>
            <p class="text-xs mb-0">{{auth()->user()->email}}</p>
        </div>
    </div>
    <hr class="mt-3 mb-0">
    <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('chat')}}">
                        <i class="fa fa-globe text-info"></i>

                        <span class="nav-link-text">Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('newConversation')}}">
                        <i class="fa fa-user text-primary"></i>
                        <span class="nav-link-text">New Group</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('addFriends')}}">
                        <i class="fa fa-phone  text-warning"></i>
                        <span class="nav-link-text">Add Friends</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('friends')}}">
                        <i class="fa fa-user text-dark"></i>
                        <span class="nav-link-text">Friends</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('friendRequest')}}">
                        <i class="fa fa-plane text-danger"></i>
                        <span class="nav-link-text">Friend Requests</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:">
                        <i class="fa fa-key text-success"></i>
                        <span class="nav-link-text">Register</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

