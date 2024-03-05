@extends('layouts.header')
@section('title', 'Gerenciamento de Procedimentos')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Gerenciamento de Procedimentos</h1>
</div>

<div class="md:col-span-1 flex justify-end">
    <button class="new" onclick="window.location.href = '/surgeries/create'" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
    <button class="new" onclick="window.location.href = '/surgeries/create'" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
</div>

<div class="overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tipo de Procedimento
                </th>
                <th scope="col" class="px-6 py-3">
                    Médico
                </th>
                <th scope="col" class="px-6 py-3">
                    Data e hora início
                </th>
                <th scope="col" class="px-6 py-3">
                    Data e hora Término
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Ações
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($surgeries as $surgery)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $surgery->name }}
                </td>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    {{ $surgery->begin_at }}
                    {{ $surgery->begin_at }}
                </td>
                <td class="px-6 py-4">
                    {{ $surgery->end_at }}
                    {{ $surgery->end_at }}
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center">
    
                        <form action="{{ route('surgeries.destroy', $surgery->id) }}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" style="border: none; background: none; padding: 0; margin: 0;">
    <img src="/images/delete.png" alt="Delete logo" class="w-6 h-6">
</button>
                        </form>
    
                        <form action="{{ route('surgeries.destroy', $surgery->id) }}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" style="border: none; background: none; padding: 0; margin: 0;">
    <img src="/images/delete.png" alt="Delete logo" class="w-6 h-6">
</button>
                        </form>
                    </div>
                </td>
            </tr>
    @endforeach
    @endforeach
        </tbody>
    </table>
</div>

@endsection
