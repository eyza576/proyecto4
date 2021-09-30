<li class="nav-item">
    <a href="{{ route('usurios.index') }}"
       class="nav-link {{ Request::is('usurios*') ? 'active' : '' }}">
        <p>Usurios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pacientes.index') }}"
       class="nav-link {{ Request::is('pacientes*') ? 'active' : '' }}">
        <p>Pacientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('citas.index') }}"
       class="nav-link {{ Request::is('citas*') ? 'active' : '' }}">
        <p>Citas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('citasDetalles.index') }}"
       class="nav-link {{ Request::is('citasDetalles*') ? 'active' : '' }}">
        <p>Citas Detalles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('doctors.index') }}"
       class="nav-link {{ Request::is('doctors*') ? 'active' : '' }}">
        <p>Doctors</p>
    </a>
</li>


