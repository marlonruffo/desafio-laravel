@extends('layouts.header')
@section('title', 'Gerenciamento')
@extends('layouts.navbarTest')
@section('content')

<!-- 4 cards with icons and titles -->

<div class="flex justify-center items-center h-screen">
    <!-- Card 1 -->
    <a href="/specialties" class="rounded overflow-hidden shadow-lg m-4 block" style="width: 20%; height:500px; margin-right: 20px">
        <img class="w-full" src="/images/medicalSpecialty.png" alt="Imagem do Card">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">Gerenciar especialidades</div>
        </div>
        <div class="px-6 pt-4 pb-2 text-center">
        </div>
    </a>

    <!-- Card 2 -->
    <a href="/healthcares" class="rounded overflow-hidden shadow-lg m-4 block" style="width: 20%; height:500px; margin-right: 20px">
        <img class="w-full" src="  /images/healthInsurance.png" alt="Imagem do Card">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">Gerenciar Planos de Saúde</div>
        </div>
        <div class="px-6 pt-4 pb-2 text-center">
        </div>
    </a>

    <!-- Card 3 -->
    <a href="/patients" class="rounded overflow-hidden shadow-lg m-4 block" style="width: 20%; height:500px; margin-right: 20px">
        <img class="w-full" src="  /images/patient.png" alt="Imagem do Card">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">Gerenciar pacientes</div>
        </div>
        <div class="px-6 pt-4 pb-2 text-center">
        </div>
    </a>

    <!-- Card 4 -->
    <a href="/doctors" class="rounded overflow-hidden shadow-lg m-4 block" style="width: 20%; height:500px; margin-right: 20px">
        <img class="w-full" src="  /images/doctor.png" alt="Imagem do Card">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">Gerenciar médicos</div>
        </div>
        <div class="px-6 pt-4 pb-2 text-center">
        </div>
    </a>
</div>

@endsection
