
    <div class="bg-white rounded shadow">
        <div class="pt-2 ml-1 relative mx-auto text-gray-600">
            <input type="text" placeholder="Rechercher...   🔎" name="query" wire:model="query" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
            {{-- <svg  class="w-5 h-5 absolute bottom-3 left-0 mt-6 mr-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg> --}}
            </button>
          </div>


        <div class="flex flex-col">
         <div class="flex-grow overflow-auto">
    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Id
          </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Date
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Libellé
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Solde initial
          </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Entrée
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Sortie
        </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Solde final
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($suivis as $row)
        <tr>
                         <td class="px-6 py-4 whitespace-nowrap">
            {{-- <div class="text-sm text-gray-900">{{ $row->libelle }}</div> --}}
         <div class="text-sm text-gray-500">{{ $row->id }}</div>
          </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="flex items-center">

              {{-- <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt=""> --}}
              {{ $row->date }}

          </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          {{-- <div class="text-sm text-gray-900">{{ $row->libelle }}</div> --}}
       <div class="text-sm text-gray-500">{{ $row->libelle }}</div>
        </td>
        <td  class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-green-800">
              {{-- <div class="hidden">
                {{ $row->initial }}
          </div> --}}
                {{ number_format($row->initial , 0, '', ' ') }}
              </span>
          </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-green-800">
            {{ number_format($row->entree  , 0, '', ' ') }}
          </span>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-red-800">
                {{ number_format( $row->sortie  , 0, '', ' ') }}
              </span>
        </td>
            {{-- @foreach($initials as $ligne) --}}
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-500">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-red-800">
                    <div class="hidden">
                        {{ $row->final = $row->initial + $row->entree - $row->sortie }}
                  </div>
                  {{  number_format( $row->final  , 0, '', ' ') }}
                  {{-- @if ($row->sortie != 0)
                  {{  $row->initial = $row->final }}
                  @else
                      0
                  @endif --}}
                 </span>
               </div>
             </td>
             {{-- @endforeach x-data="data()"--}}
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <div class="flex items-center justify-between">
                <a href="{{ route('suivis.show', $row->id) }}" class="text-indigo-600 hover:text-indigo-900">👁️</a>
                {{-- <a href="{{ route('suivis.edit', $row->id) }}" class="text-indigo-600 hover:text-indigo-900">🖊️</a> --}}
                <button wire:click.prevent="edit({{ $row->id }})"  class="text-indigo-600 hover:text-indigo-900">🖊️</button>
                {{-- <a href="{{ route('suivis.destroy', $row->id) }}" class="text-red-600 hover:text-red-900">🗑️</a> --}}
                <button onclick="confirm('Attention!!!, voulez-vous vraiment supprimer toutes les données de cette opérration ?') || event.stopImmediatePropagation()" wire:click...="delete({{$row->id}})" class="text-indigo-600 hover:text-indigo-900">🗑️</button>

                {{-- @if($confirming===$row->id)
                    <button wire:click="delete({{ $row->id }})"
                        class="bg-red-800 text-white w-32 px-4 py-1 hover:bg-red-600 rounded border">Vraiment ?</button>
                @else
                    <button wire:click="confirmDelete({{ $row->id }})"
                        class="">🗑</button>
                @endif --}}
            </div>
        </td>
          </tr>
    @endforeach

      </tbody>
      <div class="m-2">
        {{ $suivis->links() }}
    </div>
    </table>
    
         </div>
        </div>
       </div>


            
       
  
{{-- <script type="text/javascript">

function data() {
        return {
            hello: function () {
            return "Hello!"
        },
           
        }
    }


    </script> --}}