@extends('layouts.header')
@section('title', 'Visualizar Plano de Saúde')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Visualizar Plano</h1>
</div>
<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do plano</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$healthcare->name}}</p>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desconto em %</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$healthcare->discount}}</p>
    </div>  


 
</div>
<div>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
    <textarea readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-200 resize-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height:200px">{{$healthcare->description}}</textarea>
</div>

@endsection