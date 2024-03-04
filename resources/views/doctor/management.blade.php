@extends('layouts.header')
@section('title', 'Gerenciamento de Médicos')
@extends('layouts.navbarTest')
@section('content')



<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Gerenciamento de Médicos</h1>
</div>


<div class="md:col-span-1 flex justify-end">
    <button class="new" onclick="window.location.href = '/doctors/create'" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
</div>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome do Médico
                </th>
                <th scope="col" class="px-6 py-3">
                    Especialidade
                </th>
                <th scope="col" class="px-6 py-3">
                    CRM
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Ação
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr class="bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $doctor->name}}
                </td>
                <td class="px-6 py-4">
                    {{ $doctor->specialty }}
                </td>
                <td class="px-6 py-4">
                    {{ $doctor->crm }}
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center">
                    <a href="{{route('doctors.show', $doctor->id)}}"><img src="/images/view.png" alt="View Logo" class="w-6 h-6 mr-2" style="cursor: pointer;"></a>
                        <a href="{{route('doctors.edit', $doctor->id)}}"><img src="/images/edit.png" alt="Edit Logo" class="w-6 h-6 mr-2"></a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
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