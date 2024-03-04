@extends('layouts.header')
@section('title', 'Criar Procedimento')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Agendar Procedimento</h1>
</div>
<div class="class"></div>
<form action="/surgeries" method="POST" class="grid gap-6 mb-6 md:grid-cols-2">
    @csrf
    <div>
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Tipo de procedimento</label>
        <input type="text" id="nome" name="nome" value="John" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >
    </div>

    <div>
    <label for="medico" class="block mb-2 text-sm font-medium text-gray-900">Médico responsável</label>
    <select id="medico" name="medico" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        <option value="1">Dr. João</option>
        <option value="2">Dra. Maria</option>
        <option value="3">Dr. Pedro</option>
        <option value="4">Dra. Ana</option>
    </select>
</div>

    <div>
        <label for="senha" class="block mb-2 text-sm font-medium text-gray-900">Data e hora início</label>
        <input type="datetime-local" id="senha" name="senha" value="*********" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>



    <div class="md:col-span-1 flex justify-end"> 
        <button type="submit" class="new" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Agendar</button>
    </div>
</form>

@endsection
