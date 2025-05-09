<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails Inscription') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                <div class="relative overflow-x-auto">
                
                <table class="w-2/3 mx-auto table-responsive text-sm text-left text-gray-500">
                    <thead class="text-xl text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center " colspan="2">
                                Informations Personnels
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white text-lg  border-b ">

                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Civilité          
                            </th>
                            <td class="px-6 py-4 text-center">
                     {{$inscription->civilite}}
                    </td>



                </tr>
                <tr class="bg-white text-lg border-b ">



                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        Nom Complet
                    </th>
                    <td class="px-6 py-4  text-center">
                     {{$inscription-> nom}}  {{$inscription->prenom}}
                    </td>

                </tr>
                <tr class="bg-white text-lg border-b ">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                      Nationalité
                  </th>
                  <td class="px-6 py-4  text-center">
                    {{$inscription-> nationalite}}
                  </td>

              </tr>
              <tr class="bg-white text-lg border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Date de naissance
                </th>
                <td class="px-6 py-4  text-center">
                    {{$inscription-> dateNaissance}}
                </td>

            </tr>
            <tr class="bg-white text-lg border-b ">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Pays
              </th>
              <td class="px-6 py-4  text-center">
                {{$inscription-> pays}}
              </td>



          </tr>
          <tr class="bg-white text-lg border-b ">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                Ville
            </th>
            <td class="px-6 py-4  text-center">
                {{$inscription-> ville}}
            </td>



                    </tr>
                    <tr class="bg-white text-lg border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Téléphone
                        </th>
                        <td class="px-6 py-4   text-center">
                            {{$inscription-> phone}}
                        </td>



                    </tr>
                    <tr class="bg-white text-lg border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Numero WhatsApp
                        </th>
                        <td class="px-6 py-4 text-center ">
                            {{$inscription-> numwhat}}
                        </td>



                    </tr>
                    <tr class="bg-white text-lg border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Email
                        </th>
                        <td class="px-6 py-4  text-center ">
                            {{$inscription-> email}}
                        </td>



                            </tr>
                            </tbody>
                            </table>

                            <table class="w-2/3 mx-auto table-responsive text-sm text-left text-gray-500">
                                <thead class="text-xl text-gray-700 uppercase bg-gray-100">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center " colspan="2">
                                            Autres informations
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white text-lg border-b ">

                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            Niveau d'etude
                                        </th>
                                        <td class="px-6 py-4  text-center">
                                        {{$inscription-> niveauEtude->name}}
                                        </td>



                                    </tr>
                                    <tr class="bg-white text-lg border-b ">



                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            Cursus
                        </th>
                        <td class="px-6 py-4  text-center">
                            {{$inscription-> filiere->cursus->name}}
                        </td>

                                    </tr>
                                    <tr class="bg-white text-lg border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Filière
                        </th>
                        <td class="px-6 py-4  text-center">
                            {{$inscription-> filiere->name}}
                        </td>

                                </tr>
                                <tr class="bg-white text-lg border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Diplome
                        </th>
                        <td class="px-6 py-4  text-center">
                            <a class="text-blue-600 text-xl" target="blank" href="{{ asset('assets/uploads/diplome/'.$inscription->diplome_url) }}">Télécharger</a>
                        </td>

                                </tr>
                                <tr class="bg-white text-lg border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Pièces d'identité
                        </th>
                        <td class="px-6 py-4  text-center ">
                            <a class="text-blue-600 text-xl" target="blank" href="{{asset('assets/uploads/identite/'.$inscription->identite_url)  }}">Télécharger</a>
                        </td>



                            </tr>
                            <tr class="bg-white text-lg border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">

                                    Photo
                                </th>
                                <td class="px-6 py-4  text-center ">
                                <a class="text-blue-600 text-xl" target="blank" href="{{asset('assets/uploads/photo/'.$inscription->photo_url)  }}">Télécharger</a>
                                </td>



                            </tr>

                            </tbody>
                            </table>


        </div>

                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative">
                        <!-- Contenu ici -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
</x-app-layout>
