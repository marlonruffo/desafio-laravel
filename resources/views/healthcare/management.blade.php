@extends('layouts.header')
@section('title', 'Gerenciamento de Planos')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Gerenciamento de Planos</h1>
</div>

<div class="md:col-span-1 flex justify-end">
    <button class="new" onclick="window.location.href = '/healthcare/create'" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                Nome do plano
                </th>
                <th scope="col" class="px-6 py-3">
                    Descrição
                </th>
                <th scope="col" class="px-6 py-3">
                    Desconto em %
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Ação
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($healthcares as $healthcare)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$healthcare->name}}
                </td>
                <td class="px-6 py-4 max-w-xs overflow-hidden">
                {{ Illuminate\Support\Str::limit($healthcare->description, 100) }}</td>
                <td class="px-6 py-4">
                    {{$healthcare->discount}}
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center">
                        <a href="/healthcare/{{$healthcare->id}}"><img src="/images/view.png" alt="View Logo" class="w-6 h-6 mr-2" style="cursor: pointer;"></a>
                        <a href="/healthcare/edit"><img src="/images/edit.png" alt="Edit Logo" class="w-6 h-6 mr-2"></a>
                        <a href="#"><img src="/images/delete.png" alt="Delete logo" class="w-6 h-6"></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
