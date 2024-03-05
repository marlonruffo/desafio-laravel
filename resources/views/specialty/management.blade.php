@extends('layouts.header')
@section('title', 'Gerenciamento de Especialidades')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Gerenciamento de Especialidades</h1>
</div>

<div class="md:col-span-1 flex justify-end">
    <button class="new" onclick="window.location.href = '/specialties/create'" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                Nome da especialidade
                </th>
                <th scope="col" class="px-6 py-3">
                    Descrição
                </th>
                <th scope="col" class="px-6 py-3">
                    Valor em R$
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Ação
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($specialties as $specialty)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$specialty->name}}
                </td>
                <td class="px-6 py-4 max-w-xs overflow-hidden">
                {{ Illuminate\Support\Str::limit($specialty->description, 100) }}
                </td>
                <td class="px-6 py-4">
                    {{$specialty->price}}
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center">
                        <a href="{{route('specialties.show', $specialty->id)}}"><img src="/images/view.png" alt="View Logo" class="w-6 h-6 mr-2" style="cursor: pointer;"></a>
                        <a href="{{route('specialties.edit', $specialty->id)}}"><img src="/images/edit.png" alt="Edit Logo" class="w-6 h-6 mr-2"></a>
                        <form action="{{ route('specialties.destroy', $specialty->id) }}" method="post">
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
        </tbody>
    </table>
</div>

@endsection
