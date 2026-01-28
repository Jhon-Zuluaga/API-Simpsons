<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" 
    style="background-color: #0094FF !important; border-right: 5px solid #000; min-height: 100vh;">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" style="background-color: #0094FF;">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-radiation-alt" style="color: #FFD90F; font-size: 2rem;"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="color: #FFD90F; font-family: 'Patrick Hand', cursive; font-weight: 900; font-size: 1.4rem; text-shadow: 2px 2px #000;">
            Jhon-Zuluaga
        </div>
    </a>

    <hr class="sidebar-divider my-0" style="border-top: 3px solid #000; opacity: 1;">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('inicio') }}">
            <i class="fas fa-fw fa-home" style="color: #FFD90F;"></i>
            <span style="color: #FFD90F; font-weight: bold; font-family: 'Patrick Hand', cursive; font-size: 1.1rem;">Inicio</span>
        </a>
    </li>

    <hr class="sidebar-divider" style="border-top: 3px solid #000; opacity: 1; margin: 1rem 0;">

<div class="sidebar-heading" style="color: #000 !important; font-weight: 900; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">
    Secciones de Springfield
</div>

<li class="nav-item">
    <a class="nav-link" href="{{ route('character.index') }}" style="color: #000 !important;">
        <i class="fas fa-users" style="color: #FFD90F; -webkit-text-stroke: 1px black;"></i>
        <span style="font-weight: bold;">Characters</span>
    </a>
</li>

    </ul>