<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Caisse') }}
        </h2>
    </x-slot>
    
    <div class="bg-white rounded shadow">
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
        </tr>
      </thead>
      <tbody>
        <tr>
                         <td class="px-6 py-4 whitespace-nowrap">
            {{-- <div class="text-sm text-gray-900">{{ $row->libelle }}</div> --}}
         <div class="text-sm text-gray-500">{{ $id->id }}</div>
          </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="flex items-center">

              {{-- <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt=""> --}}
              {{ $id->date }}

          </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          {{-- <div class="text-sm text-gray-900">{{ $row->libelle }}</div> --}}
       <div class="text-sm text-gray-500">{{ $id->libelle }}</div>
        </td>
        <td  class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-green-800">
                {{-- <div class="mr-2">
                    <input type="text" name="entree" id="entree" class="mt-1 focus:ring-indigo-500 focus:border-gray-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div> --}}
                {{ number_format($id->initial , 0, '', ' ') }}
              </span>
          </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-green-800">
            {{ number_format($id->entree  , 0, '', ' ') }}
          </span>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-red-800">
                {{ number_format( $id->sortie  , 0, '', ' ') }}
              </span>
        </td>
            {{-- @foreach($initials as $ligne) --}}
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-500">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-red-800">
                    <div class="hidden">
                        {{ $id->final = $id->initial + $id->entree - $id->sortie }}
                  </div>
                  {{  number_format( $id->final  , 0, '', ' ') }}
                  {{-- @if ($row->sortie != 0)
                  {{  $row->initial = $row->final }}
                  @else
                      0
                  @endif --}}
                 </span>
               </div>
             </td>
          </tr>

      </tbody>
    </table>
    
         </div>
        </div>
       </div>
</x-app-layout>
