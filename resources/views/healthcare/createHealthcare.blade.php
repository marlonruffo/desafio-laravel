@extends('layouts.header')
@section('title', 'Gerenciamento')
@extends('layouts.navbarTest')
@section('content')

<form action="" method="POST" class="w-full max-w-lg">
  @csrf

  <div class="flex items-center justify-center h-screen mb-4">
    <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Criar Plano de Saúde</h1>
  </div>

  <div class="grid gap-6 mb-6 md:grid-cols-2">
      <div>
          <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do plano</label>
          <input id="nome" name="nome" type="text" value="Nome da Pessoa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </div>

      <div>
          <label for="valor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desconto em %</label>
          <input id="valor" name="valor" type="text" value="190,00" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </div>  
  </div>

  <div>
      <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
      <textarea id="descricao" name="descricao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-200 resize-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height:200px">DESCRIÇÃODESCRIÇÃODESCRIÇÃODESCRIÇÃODESCRIÇÃODESCRIÇÃODESCRIÇÃODESCRIÇÃODESCRIÇÃODESCRIÇÃO</textarea>
  </div>

  <div class="md:col-span-1 flex justify-end"> <!-- Adicionado md:col-span-1 para ocupar uma coluna em telas maiores -->
        <button type="submit" class="new" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
    </div>
</form>

@endsection
