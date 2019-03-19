<ul class="nav navbar-nav">
    <li class="nav-item">
        <a href="/profile/rucher" class="nav-link">Paramètres rucher</a>
    </li>
    <li class="nav-item">
        <a href="/profile/ruche">Paramètres ruches</a>
    </li>

    @if(\Request::is('profile/ruche'))
    <li class="nav-item">
        <a href="#">+</a>
    </li>

    <li class="nav-item">
        <a href="#">-</a>
    </li>
    @endif
</ul>