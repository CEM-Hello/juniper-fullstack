<div class="menu-list">
  <nav class="navbar navbar-expand-lg navbar-light">
      <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav flex-column">
              <li class="nav-divider">
                  Menu
              </li>
              <li class="nav-item ">
                  <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                  <div id="submenu-1" class="collapse submenu" style="">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <a class="nav-link" href="/dashboard">Home</a>
                          </li>
                      </ul>
                  </div>
              </li>
              @if (Auth::user()->isAdmin())
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                    data-target="#submenu-2" aria-controls="submenu-2"><i
                        class="fa fa-fw fa-rocket"></i>Cocktail Menu</a>
                <div id="submenu-2" class="collapse submenu" style="">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                          data-target="#submenu-1-1" aria-controls="submenu-1-1">Cocktail Categories</a>
                      <div id="submenu-1-1" class="collapse submenu" style="">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/cocktail-categories">All Cocktail Categories <span
                                        class="badge badge-secondary">New</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/admin/cocktail-categories/create">New Cocktail Category <span
                                      class="badge badge-secondary">New</span></a>
                          </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                          data-target="#submenu-1-2" aria-controls="submenu-1-2">Cocktail Items</a>
                      <div id="submenu-1-2" class="collapse submenu" style="">
                          <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="/admin/cocktail-items">All Cocktail Items <span
                                  class="badge badge-secondary">New</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/admin/cocktail-items/create">New Cocktail Item <span
                                class="badge badge-secondary">New</span></a>
                    </li>
                          </ul>
                      </div>
                    </li>
                    </ul>
                </div>
            </li>
            @endif
            @if (Auth::user()->isAdmin())
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                  data-target="#submenu-3" aria-controls="submenu-3"><i
                      class="fa fa-fw fa-rocket"></i>Food Menu</a>
              <div id="submenu-3" class="collapse submenu" style="">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                        data-target="#submenu-3-1" aria-controls="submenu-3-1">Food Categories</a>
                    <div id="submenu-3-1" class="collapse submenu" style="">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="/admin/food-categories">All Food Categories <span
                            class="badge badge-secondary">New</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/admin/food-categories/create">New Food Category <span
                            class="badge badge-secondary">New</span></a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                        data-target="#submenu-3-2" aria-controls="submenu-3-2">Food Items</a>
                    <div id="submenu-3-2" class="collapse submenu" style="">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="/admin/food-items">All Food Items <span
                            class="badge badge-secondary">New</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/admin/food-items/create">New Food Item <span
                            class="badge badge-secondary">New</span></a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
              data-target="#submenu-4" aria-controls="submenu-4"><i
              class="fa fa-fw fa-rocket"></i>Club Members</a>
            <div id="submenu-4" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/admin/members">Club Members <span
                    class="badge badge-secondary">New</span></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
              data-target="#submenu-5" aria-controls="submenu-5"><i
              class="fa fa-fw fa-rocket"></i>Reservations</a>
            <div id="submenu-5" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/admin/reservations">All Reservations <span
                    class="badge badge-secondary">New</span></a>
                </li>
              </ul>
            </div>
        </li>
          @if (Auth::user()->isAdmin())
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
              data-target="#submenu-6" aria-controls="submenu-6"><i
              class="fa fa-fw fa-rocket"></i>Users</a>
            <div id="submenu-6" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/admin/users">All Users <span
                      class="badge badge-secondary">New</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/users/create">Create User <span
                    class="badge badge-secondary">New</span></a>
                </li>
              </ul>
            </div>
          </li>
          @endif
         @if (Auth::user()->isAdmin())
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
              data-target="#submenu-7" aria-controls="submenu-7"><i
                  class="fa fa-fw fa-rocket"></i>Settings</a>
          <div id="submenu-7" class="collapse submenu" style="">
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link" href="/admin/settings/general">General Settings <span
                    class="badge badge-secondary">New</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/settings/seo">SEO Settings<span
                  class="badge badge-secondary">New</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/settings/social">Social Media <span
                  class="badge badge-secondary">New</span></a>
              </li>
            </ul>
          </div>
        </li>
        @endif
      </ul>
    </div>
  </nav>
</div>