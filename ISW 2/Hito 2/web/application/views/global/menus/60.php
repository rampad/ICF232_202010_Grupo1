<li><a href="<?= BASE_URL ?>user/dashboard"> <i class="fa fa-home"></i>Dashboard</a></li>

<li><a href="#ticketsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Tickets </a>
    <ul id="ticketsDropdown" class="collapse list-unstyled ">
        <li><a href="<?= BASE_URL ?>tickets/create_new">Nuevo Ticket </a></li>
        <li><a href="<?= BASE_URL ?>tickets/assigned_to_me">Mis Tickets Asignados</a></li>
        <li><a href="<?= BASE_URL ?>tickets/my_tickets"></i>Mis Tickets </a></li>
        <!--<li><a href="<?= BASE_URL ?>tickets/cc_to_me">Following</a></li>-->
    </ul>
</li>
<li><a href="<?= BASE_URL ?>user/profile"> <i class="fa fa-user"></i>Perfil </a></li>