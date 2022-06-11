<?php

namespace App\Form;

use Kris\LaravelFormBuilder\Form;

class LandlordForm extends Form
{
    public function buildForm()
    {

        // Add fields here...
        $this->setName('Landlord Form', false)
            ->add('name', 'text')
            ->add('title')
            ->add('email', 'email')
            ->add('phone', 'tel');
    }
}
