<?php
namespace Application\Form;

use Zend\Form\Form;

class ClienteForm extends Form
{

    public function __construct()
    {
        parent::__construct('cliente-form');
        // Set POST method for this form
        $this->setAttribute('method', 'post');
        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'nombre',
            'type' => 'text',
            'options' => [
                'label' => 'Nombre',
            ],
        ]);
        $this->add([
            'name' => 'direccion',
            'type' => 'text',
            'options' => [
                'label' => 'Direcció',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Guardar',
                'id'    => 'submitbutton',
            ],
        ]);  
    }
}

