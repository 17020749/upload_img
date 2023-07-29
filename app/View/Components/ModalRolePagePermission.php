<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ModalRolePagePermission extends Component
{
     public $data;
        
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.modal-role-page-permission', [
            'data' => $this->data,
        ]);
    }
}
