<li><a href="<?= BASE_URL ?>user/dashboard"> <i class="fa fa-home"></i>Dashboard </a></li>

<li><a href="#ticketsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Tickets </a>
    <ul id="ticketsDropdown" class="collapse list-unstyled ">
        <li><a href="<?= BASE_URL ?>tickets/create_new">Nuevo Ticket </a></li>
        <li><a href="<?= BASE_URL ?>tickets/list_all">Todos los Tickets</a></li>
        <!--<li><a href="<?= BASE_URL ?>tickets/unassigned_tickets">Unassigned Tickets</a></li>-->
        <!--<li><a href="<?= BASE_URL ?>tickets/assigned_tickets">Assigned Tickets</a></li>-->
        <!--<li><a href="<?= BASE_URL ?>tickets/closed_tickets" >Closed Ticket</a></li>-->
        <li><a href="<?= BASE_URL ?>tickets/my_tickets" title="Created by me">Mis tickets</a></li>
        <!--<li><a href="<?= BASE_URL ?>tickets/cc_to_me">Following</a></li>-->
    </ul>
</li>

<li><a href="#usersDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Usuarios </a>
    <ul id="usersDropdown" class="collapse list-unstyled ">
        <li><a href="<?= BASE_URL ?>user/list">Todos los Usuarios</a></li>
        <li><a href="<?= BASE_URL ?>user/add_user">Agregar Usuario</a></li>
    </ul>
</li>
<li><a href="<?= BASE_URL ?>user/profile"> <i class="fa fa-user"></i>Perfil </a></li>