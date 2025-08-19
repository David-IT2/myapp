<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class BitcoinPrice extends Component
{
    public $price;

    public function mount()
    {
        try {
            $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
                'ids' => 'bitcoin',
                'vs_currencies' => 'usd'
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $this->price = $data['bitcoin']['usd'] ?? null;
            } else {
                $this->price = null;
            }
        } catch (\Exception $e) {
            $this->price = null;
        }
    }

    public function render()
    {
        return view('livewire.bitcoin-price');
    }
}
