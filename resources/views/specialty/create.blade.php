@extends('layouts.header')
@section('title', 'Criar Especialidade')
@extends('layouts.navbarTest')
@section('content')

<form action="/specialty" method="POST" class="w-full max-w-lg">
  @csrf

  <div class="flex items-center justify-center h-screen mb-4">
    <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Criar Especialidade</h1>
  </div>

  <div class="grid gap-6 mb-6 md:grid-cols-2">
      <div>
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome da especialidade</label>
          <input id="name" name="name" type="text" value="" placeholder="Nome da especialidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </div>

      <div>
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor em R$</label>
          <input id="price" name="price" type="number" value="" placeholder="Valor em R$" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </div>  
  </div>

  <div>
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
      <textarea id="description" name="description" placeholder="Descrição da especialidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-200 resize-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height:200px"></textarea>
  </div>

  <div class="md:col-span-1 flex justify-end"> <!-- Adicionado md:col-span-1 para ocupar uma coluna em telas maiores -->
        <button type="submit" value="create specialty" class="new" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
    </div>
</form>

@endsection
