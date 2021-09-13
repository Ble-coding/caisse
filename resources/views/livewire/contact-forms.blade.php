<div>
    {{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Sorry!</strong> invalid input.<br><br>
        <ul style="list-style-type:none;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


    @if($updateMode)
         @include('livewire.update')
    @else
          
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Ajouter une opération</h3>
            <p class="mt-1 text-sm text-gray-600">
             Remplissez le formulaire d'activité de caisse
            </p>
          </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            {{-- <form action="{{ route('suivis.index') }}" method="POST" enctype="multipart/form-data"> --}}
                {{-- wire:submit.prevent="submit"  --}}
                {{-- @csrf --}}
                <form  method="POST" enctype="multipart/form-data">
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="initial" class="block text-sm font-medium text-gray-700">Solde actuel en caisse</label>
                        <input type="text" wire:model="initial" name="initial" id="initial" class="mt-1 focus:ring-indigo-500 focus:border-gray-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('initial') <span class="mt-2 text-red-400 error">{{ $message }}</span> @enderror
                      </div>
                      <input type="text" name="id" class="hidden"  wire:model="ids">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="date"  class="block text-sm font-medium text-gray-700">Date</label>
                      <input type="date" wire:model="date" name="date" id="date" class="mt-1 focus:ring-indigo-500 focus:border-gray-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      @error('date') <span class="mt-2 text-red-400 error">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="col-span-6 sm:col-span-3">
                        <label for="entree" class="block text-sm font-medium text-gray-700">Entree</label>
                        <input type="text" wire:model="entree" name="entree" id="entree" class="mt-1 focus:ring-indigo-500 focus:border-gray-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                         @error('entree') <span class="mt-2 text-red-400 error">{{ $message }}</span> @enderror
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label for="sortie"  class="block text-sm font-medium text-gray-700">Sortie</label>
                        <input type="text" wire:model="sortie" name="sortie" id="sortie" class="mt-1 focus:ring-indigo-500 focus:border-gray-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('sortie') <span class="mt-2 text-red-400 error">{{ $message }}</span> @enderror
                      </div>
        
                      {{-- <div class="col-span-6 sm:col-span-3">
                        <label for="status" class="block text-sm font-medium text-gray-700">Choisir l'opération</label>
                        <select id="status" name="status" autocomplete="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                          <option>Entrée</option>
                          <option>Sortie</option>
                        </select>
                      </div> --}}
        
        
                    <div class="col-span-6 sm:col-span-3">
                        <label for="libelle"  class="block text-sm font-medium text-gray-700">Libéllé</label>
                        <textarea id="libelle"  wire:model="libelle" name="libelle" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Votre texte"></textarea>
                        @error('libelle') <span class="mt-2 text-red-400 error">{{ $message }}</span> @enderror
                      </div>
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button wire:click.prevent="submit()"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-800 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Valider
                      </button>
                      {{-- <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-800 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Annuler
                      </button> --}}
                </div>
              </div>
            </form>
        
      </div>
    </div>

    @endif

    
  </div>



  