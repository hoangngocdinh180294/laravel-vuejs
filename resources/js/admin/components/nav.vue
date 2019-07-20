    <template>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button
      class="navbar-toggler d-lg-none"
      type="button"
      data-toggle="collapse"
      data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId"
      aria-expanded="false"
      aria-label="Toggle navigation"
    ></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <router-link to="/admin/customer" tag="li">
              <a>customer</a>
            </router-link>

            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <router-link to="/admin/customer/show" tag="li">
              <a>Show</a>
            </router-link>

            <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="dropdownId"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >NICK</a>
          <div class="dropdown-menu pull-right" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">Đăng nhập</a>
            <a class="dropdown-item" href="#">Đăng ký</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>
