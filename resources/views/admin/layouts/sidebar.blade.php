<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            {{-- <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image"> --}}
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Allen Moreno</p>
            {{-- <p class="designation">Premium user</p> --}}
          </div>
        </a>
      </li>
      {{-- <li class="nav-item nav-category">Main Menu</li> --}}
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href={{ route('users.create') }}>Add user</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ route('users.index') }}>List users</a>
            </li>
           
          </ul>
        </div>
      </li>
     
    
   
    
    </ul>
  </nav>