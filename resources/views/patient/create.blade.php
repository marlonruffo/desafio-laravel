@extends('layouts.header')
@section('title', 'Criar Paciente')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Criar Paciente</h1>
</div>
<div class="class"></div>
<form action="/patients" method="POST" class="grid gap-6 mb-6 md:grid-cols-2">
    @csrf
    <div>
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
        <input type="text" id="nome" name="nome" value="John" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >
    </div>

    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
        <input type="email" id="email" name="email" value="john@example.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="senha" class="block mb-2 text-sm font-medium text-gray-900">Senha</label>
        <input type="password" id="senha" name="senha" value="*********" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="endereco" class="block mb-2 text-sm font-medium text-gray-900">Endereço</label>
        <input type="text" id="endereco" name="endereco" value="123 Main St, City, Country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900">Telefone</label>
        <input type="tel" id="telefone" name="telefone" value="+1234567890" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="data_nascimento" class="block mb-2 text-sm font-medium text-gray-900">Data de nascimento</label>
        <input type="text" id="data_nascimento" name="data_nascimento" value="01/01/1990" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
        <input type="text" id="cpf" name="cpf" value="123.456.789-00" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="especialidade" class="block mb-2 text-sm font-medium text-gray-900">Tipo sanguíneo</label>
        <input type="text" id="especialidade" name="especialidade" value="Cardiologia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div class="md:col-span-1 flex justify-end"> <!-- Adicionado md:col-span-1 para ocupar uma coluna em telas maiores -->
        <button type="submit" class="new" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Editar</button>
    </div>
</form>

@endsection
