<div>
    @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
        </div>
    @endif
    <h3 class="text-3xl text-bold">
        
       Total {{ Cart::getTotalQuantity()}} Cart 
    </h3>
    <div class="flex-1">
        <table class="w-full text-sm lg:text-base" cellspacing="0">
          <thead>
            <tr class="h-12 uppercase">
              <th class="hidden md:table-cell"></th>
              <th class="text-left">Name</th>
              <th class="pl-5 text-left lg:text-right lg:pl-0">
                <span class="lg:hidden" title="Quantity">Qtd</span>
                <span class="hidden lg:inline">Quantity</span>
              </th>
              <th class="hidden text-right md:table-cell"> price</th>
              <th class="hidden text-right md:table-cell"> Remove </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($cartItems as $item)
            <tr>
              <td class="hidden pb-4 md:table-cell">
                <a href="#">
                  <img src="{{ $item['attributes']['image'] }}" class="w-20 rounded" alt="Thumbnail">
                </a>
              </td>
              <td>
                <a href="#">
                  <p class="mb-2 md:ml-4">{{ $item['name'] }}</p> 
                </a>
              </td>
              <td class="justify-center mt-6 md:justify-end md:flex">
                <div class="h-10 w-28">
                  <div class="relative flex flex-row w-full h-8">
                    <livewire:cart-update :item="$item" :key="$item['id']"/>
                  </div>
                </div>
              </td>
              <td class="hidden text-right md:table-cell">
                <span class="text-sm font-medium lg:text-base">
                    ${{ $item['price'] }}
                </span>
              </td>
              <td class="hidden text-right md:table-cell">
                  <a href="#" class="px-4 py-2 text-white bg-red-600" wire:click.prevent="removeCart('{{$item['id']}}')">x</a>    
              </td>
            </tr>
            @endforeach
             
          </tbody>
        </table>
        <div>
         Total: ${{ Cart::getTotal() }}
        </div>
        <div class="mt-5">
            <a href="#" class="px-6 py-2 text-red-800 bg-red-300" wire:click.prevent="clearAllCart">Remove All Cart</a>
        </div>

      </div>
</div>