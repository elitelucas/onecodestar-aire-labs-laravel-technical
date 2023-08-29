<?php

namespace App\Livewire;

use Livewire\Component;

class Reviews extends Component
{
    public $reviews = [
        ["“You made it so simple.”", 4, "Brittan Wheeler", "Consultant", "Brittan_Wheeler.png"],
        ["“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”", 3, "Alexa Popen", "CEO", "Alexa_Popen.png"],
        ["“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”", 5, "Leslie Alexander", "Founder", "Leslie_Alexander.png"],
        ["“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”", 5, "Leslie Alexander", "Founder", "Leslie_Alexander.png"],
        ["“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”", 5, "Leslie Alexander", "Founder", "Leslie_Alexander.png"],
        ["“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”", 5, "Leslie Alexander", "Founder", "Leslie_Alexander.png"],
    ];

    public function render()
    {
        return view('livewire.reviews');
    }
}
