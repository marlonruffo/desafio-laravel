@extends('layouts.header')
@section('title', 'Visualizar Paciente')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Visualizar Paciente</h1>
</div>
<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">Nome da Pessoa</p>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">email@example.com</p>
    </div>  

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Senha</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">*********</p>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Endereço</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">Endereço da Pessoa</p>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Telefone</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">+1234567890</p>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Data de nascimento</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">01/01/1990</p>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">123.456.789-00</p>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Tipo sanguíneo</label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">Tipo A+</p>
    </div>
</div>





 





@endsection