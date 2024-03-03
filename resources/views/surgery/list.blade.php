@extends('layouts.header')
@section('title', 'Lista de Procedimentos')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Gerenciamento de Procedimentos</h1>
</div>

<div class="overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tipo de Procedimento
                </th>
                <th scope="col" class="px-6 py-3">
                    Médico responsável
                </th>
                <th scope="col" class="px-6 py-3">
                    Data e hora início
                </th>
                <th scope="col" class="px-6 py-3">
                    Data e hora Término
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Cancelar
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($surgeries as $surgery)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$surgery->name}}
                </td>
                <td class="px-6 py-4">
                {{$surgery->description}}
                </td>
                <td class="px-6 py-4">
                    Data
                </td>
                <td class="px-6 py-4">
                    Data
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center">
                        <a href="#"><img src="/images/delete.png" alt="Delete logo" class="w-6 h-6"></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
