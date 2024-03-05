@extends('layouts.header')
@section('title', 'Editar Paciente')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Editar Paciente</h1>
</div>
<div class="class"></div>
<form action="" method="POST" class="grid gap-6 mb-6 md:grid-cols-2">
    @csrf
    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nome</label>
        <input type="text" id="name" name="name" value="John" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
        <input type="email" id="email" name="email" value="john@example.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
        <input type="password" id="password" name="password" value="*********" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
    </div>

    <div>
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
        <input type="text" id="address" name="address" value="123 Main St, City, Country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
    </div>

    <div>
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
        <input type="tel" id="phone" name="phone" value="+1234567890" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
    </div>

    <div>
        <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de nascimento</label>
        <input type="text" id="birthdate" name="birthdate" value="01/01/1990" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
    </div>

    <div>
        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
        <input type="text" id="cpf" name="cpf" value="123.456.789-00" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </div>

    <div>
        <label for="blood_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo sanguíneo</label>
        <input type="text" id="blood_type" name="blood_type" value="Cardiologia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
    </div>

    <div class="md:col-span-1 flex justify-end">  
        <button type="submit" class="new" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Editar</button>
    </div>
</form>

@endsection
