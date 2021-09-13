<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Suivi de la caisse') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">

              <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                  <div class="border-t border-gray-200"></div>
                </div>
              </div>
<div>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Excel</h3>
              <p class="mt-1 text-sm text-gray-600">
                Choisir un fichier excel à importer ou exporter.
              </p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      {{-- <label for="file" class="block text-sm font-medium text-gray-700">Choisir</label> --}}
                      <input type="file" name="file" class="mt-1 focus:ring-indigo-500 py-2 px-3 block w-full shadow-sm sm:text-sm border-green-300 rounded-md">
                    </div>
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    importer
                  </button>
                  <a href="{{ route('export') }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-800 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                    exporter
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
        </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-3">
  <div class="md:col-span-1">
    <div class="px-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Historique</h3>
      <p class="mt-1 text-sm text-gray-600">
        Vos activités dans la caisse.
      </p>
    </div>
  </div>
    </div>
  <div class="mx-auto sm:px-6 lg:px-8">
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-2 md:gap-3">
      <div class="mt-5 md:mt-0 md:col-span-2">
          <!-- This example requires Tailwind CSS v2.0+ -->
           <livewire:suivi-pagination :data="$data" />
</div>
</div>
</div>
    </div>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <div class="mt-10 sm:mt-0">

  <livewire:contact-forms />

        </div>
    </div>

</x-app-layout>
