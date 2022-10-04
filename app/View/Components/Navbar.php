<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar = [
            'Home' => '/home',
            'About' => '/about',
            'Contact' => '/contact',
            'Profile' => '/profile'
        ];
        // compact bisa dilakukan jika nama variabel dengan parameter sama
        // view juga bisa dilakukan pada layout tidak hanya dicomponent, yaitu dengan mengubah component.navbar
        return view('components.navbar', compact('navbar'));
    }
}
