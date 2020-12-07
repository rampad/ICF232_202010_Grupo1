<?php

class Tickets extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('ticket/Ticket_model', 'Tickets');
        $this->load->model('user/User_model', 'Users');
        $this->load->model('ticket/Messages_model', 'Messages');
    }

    public function create_new()
    {
        $data['title'] = 'Nuevo ticket';
        $this->render('Nuevo Ticket', 'ticket/create_new', $data);
    }

    public function list_all()
    {
        $data['title'] = 'Todos los tickets';
        $data['type']="all_tickets";
        $this->render('Todos los tickets', 'ticket/my_tickets', $data);
    }

    public function my_tickets()
    {
        $data['title'] = 'Mis tickets';
        $data['type']="my_tickets";
        $this->render('Mis tickets', 'ticket/my_tickets', $data);
    }

    public function assigned_to_me()
    {
        $data['title'] = 'Ticket asignados';
        $data['type'] = "assigned_to_me";
        $this->render('Ticket asignados', 'ticket/my_tickets', $data);
    }
    public function cc_to_me()
    {
        $data['title'] = 'Seguimiento de Tickets';
        $data['type'] = "cc_to_me";
        $this->render('Seguimiento de Tickets', 'ticket/my_tickets', $data);
    }
    public function assigned_tickets()
    {
        $data['title'] = 'Tickets asignados';
        $data['type'] = "assigned";
        $this->render('Tickets asignados', 'ticket/my_tickets', $data);
    }
    public function unassigned_tickets()
    {
        $data['title'] = 'Tickets no asignados';
        $data['type'] = "unassigned";
        $this->render('Tickets no asignados', 'ticket/my_tickets', $data);
    }

    public function closed_tickets()
    {
        $data['title'] = 'Tickets cerrados';
        $data['type'] = "closed";
        $this->render('Tickets cerrados', 'ticket/my_tickets', $data);
    }

    public function view_ticket()
    {
        
        $ticket = $this->uri->segment(3);
        $data['title'] = 'Ver Tickets';
        $usertype = $this->Session->getLoggedDetails()['type'];
        $data['privilege'] = ($usertype==USER_MANAGER || $usertype == USER_ADMIN)? true : false;
        if (!$ticket) {
            $this->render('Ver Tickets', 'unauthorised', $data);
        } else {
            $data['ticket_no'] = $ticket;
            $data['info'] = $this->Tickets->getBy(null,['ticket_no' => $ticket])[0];
            $data['messages'] = $this->Messages->getBy(null, ['ticket' => $ticket]);
            $this->render('Ver Tickets', 'ticket/view_ticket', $data);
        }
    }

}