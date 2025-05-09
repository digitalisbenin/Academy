<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


<div class="relative overflow-x-auto">
    <table class="w-full text-base text-left rtl:text-right text-gray-500 ">
        <thead class="text-sm text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom Complet
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Téléphone
                </th>
                <th scope="col" class="px-6 py-3">
                    Pays
                </th>
                <th scope="col" class="px-6 py-3">
                    Ville
                </th>
                <th scope="col" class="px-6 py-3">
                    Filiere
                </th>

                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach($inscription as $value)
          <tr class="bg-white border-b ">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{$value->nom}} {{$value->prenom}}
            </th>
            <td class="px-6 py-4">
                {{$value->email}}
            </td>
            <td class="px-6 py-4">
                {{$value->phone}}
            </td>
            <td class="px-6 py-4">
                {{$value->pays}}
            </td>
            <td class="px-6 py-4">
                {{$value->ville}}
            </td>
            <td class="px-6 py-4">
                {{$value->filiere->name}}
            </td>
            <td class="px-6 py-4">
                <a href="{{url('inscription-details/'.$value->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16">
                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                    </svg>

                  </a>

            </td>
        </tr>
          @endforeach

        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
