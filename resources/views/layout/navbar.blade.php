<!-- NAVBAR -->
<nav>
    <i class='bx bx-menu'></i>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    <a href="#" class="profile">
        <img class="border rounded-circle img-profile" src={{ asset('profile.jpg') }} height="25px"
            width="25px" /><span class="d-none d-lg-inline me-2 text-gray-600 small"> <b> {{ Auth::user()->name }}
            </b> </span>
    </a>
</nav>
<!-- NAVBAR -->
