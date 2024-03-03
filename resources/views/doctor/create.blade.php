@extends('layouts.header')
@section('title', 'Criar Médico')
@extends('layouts.navbarTest')
@section('content')

<div class="flex items-center justify-center h-screen mb-4">
  <h1 style="font-size: 2rem;" class="font-bold text-center text-gray-900">Criar Médico</h1>
</div>
<div class="class"></div>
<form action="" method="POST" class="grid gap-6 mb-6 md:grid-cols-2">
    @csrf
    <div>
    <label for="data_nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de nascimento</label>
    <input type="date" id="data_nascimento" name="data_nascimento" value="1990-01-01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
</div>

<div>
    <label for="e-mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
    <input type="email" id="e-mail" name="data_nascimento" value="1990-01-01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
</div>

<div>
    <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
    <input type="password" id="senha" name="senha" value="*********" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
</div>

<div>
    <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
    <input type="tel" id="telefone" name="telefone" value="+1234567890" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
</div>

<div>
    <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
    <input type="text" id="cpf" name="cpf" value="123.456.789-00" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
</div>

<div>
    <label for="especialidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidade</label>
    <select id="especialidade" name="especialidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="cardiologia">Cardiologia</option>
        <option value="ortopedia">Ortopedia</option>
        <option value="neurologia">Neurologia</option>
        <option value="dermatologia">Dermatologia</option>
        <option value="ginecologia">Ginecologia</option>
    </select>
</div>


<div>
    <label for="periodo_trabalho" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Período de trabalho</label>
    <input type="text" id="periodo_trabalho" name="periodo_trabalho" value="Segunda a Sexta, 9h às 17h" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
</div>

<div>
    <label for="crm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CRM (Código de Registro Médico)</label>
    <input type="text" id="crm" name="crm" value="1234567" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
</div>

    


    <div class="md:col-span-1 flex justify-end"> <!-- Adicionado md:col-span-1 para ocupar uma coluna em telas maiores -->
        <button type="submit" class="new" style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 5px; padding: 8px 16px; font-size: 16px; cursor: pointer;">Criar</button>
    </div>
</form>

@endsection