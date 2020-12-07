<?PHP

define("TABLE_TICKETS", TABLE_PREFIX."tickets");
define("TABLE_MESSAGES", TABLE_PREFIX."messages");
define("TABLE_USERS", TABLE_PREFIX."users");
define("TICKET_PREFIX", "pablito");
define('TICKET_STATUS_OPEN', 0);
define('TICKET_STATUS_ASSIGNED', 50);
define('TICKET_STATUS_CLOSED', 100);
define('TICKET_PRIORITY_HIGH', 10);
define('TICKET_PRIORITY_MEDIUM', 5);
define('TICKET_PRIORITY_LOW', 0);
define('TICKET_SEVERITY_HIGH', 10);
define('TICKET_SEVERITY_MEDIUM', 5);
define('TICKET_SEVERITY_LOW', 0);

define('STATUS_MAP', array(
    TICKET_STATUS_OPEN          => '<div class="badge badge-corner bg-green">Abierto</div>',
    TICKET_STATUS_ASSIGNED      => '<div class="badge badge-corner bg-info">Asignado</div>',
    TICKET_STATUS_CLOSED        => '<div class="badge badge-corner bg-red">Cerrado</div>'
));

define('TICKET_STATUS', array(
    array('value'=>0, 'label'=> 'Abierto'),
    array('value'=>100, 'label' => 'Cerrado')
));

define('TICKET_CATEGORIES', array(
    'Bug', 'Solicitar informacion', 'Problemas de Software', 'Otros', 'Nuevo Password', 'Network', 'Hardware', 'Acceso y Autorizacion', 'Atlac Share','AltacMeet'
));



define('TICKET_PRIORITIES', array(
    array('value' => 0, 'label'=> 'Bajo'),
    array('value' => 5, 'label'=> 'Medio'),
    array('value' => 10, 'label'=> 'Abierto')
));

define('TICKET_SEVERITIES', array(
    array('value' => 0, 'label'=> 'Bajo'),
    array('value' => 5, 'label'=> 'Medio'),
    array('value' => 10, 'label'=> 'Alto')
));
