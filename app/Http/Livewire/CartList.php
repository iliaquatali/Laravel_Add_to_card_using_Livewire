<?php
  
  namespace App\Http\Livewire;
  
  use Livewire\Component;
  
  
  class CartList extends Component
  {
      protected $listeners = ['cartUpdated' => '$refresh'];
      public $cartItems = [];
  
      public function removeCart($id)
      {
          \Cart::remove($id);
  
          session()->flash('success', 'Item has removed !');
      }
  
      public function clearAllCart()
      {
          \Cart::clear();
  
          session()->flash('success', 'All Item Cart Clear Successfully !');
      }
  
      public function render()
      {
          $this->cartItems = \Cart::getContent()->toArray();
  
          return view('livewire.cart-list');
      }
  }
