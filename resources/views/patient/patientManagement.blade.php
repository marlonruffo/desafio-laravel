@extends('layouts.header')
@section('title', 'Gerenciamento')
@extends('layouts.navbarTest')
@section('content')



<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Gerenciamento de Pacientes</h1>
</div>

<div class="md:col-span-1 flex justify-end">
    <button class="new" onclick="window.location.href = 'URL_DA_PAGINA_DESTINO'" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </td>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center">
                        <a href="link_para_visualizar"><img src="images/view.png" alt="View Logo" class="w-6 h-6 mr-2" style="cursor: pointer;"></a>
                        <a href="link_para_editar"><img src="images/edit.png" alt="Edit Logo" class="w-6 h-6 mr-2"></a>
                        <a href="link_para_deletar"><img src="images/delete.png" alt="Delete logo" class="w-6 h-6"></a>

                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>





@endsection