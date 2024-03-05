<nav class="bg-gray-800 p-4 mb-4">
  <div class="container mx-auto flex justify-between items-center">
    <!-- Logo -->
    <a href="#" class="flex items-center text-white text-lg font-semibold">
      <img class="w-8 h-8 mr-2" src="/images/logo.png" alt="logo"> 
      <span>Medicine</span>
    </a>      
    <ul class="flex space-x-8"> 
      <li><a href="/welcome" class="text-white hover:text-gray-300">Início</a></li>
      @auth
      <li><a href="/management" class="text-white hover:text-gray-300">Gerenciar</a></li>
      <li><a href="/surgeries/create" class="text-white hover:text-gray-300">Agendar Procedimento</a></li>
      <li><a href="/mysurgeries" class="text-white hover:text-gray-300">Minhas Cirurgias</a></li>
      <li><a href="#" class="text-white hover:text-gray-300">Enviar Email</a></li>
      <li><a href="#" class="text-white hover:text-gray-300">Gerar Relatório</a></li>
      <li>
    <a href="#" class="text-white hover:text-gray-300" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Gerar Relatório
    </a>
    <form id="logout-form" action="/logout" method="POST" style="display: none;">
    @csrf
        <button type="submit">Logout</button>
    </form>
</li>
      
      @endauth
      @guest
      <li><a href="/login" class="text-white hover:text-gray-300">Entrar</a></li>
      <li><a href="/register" class="text-white hover:text-gray-300">Cadastrar</a></li>
      @endguest
    </ul>
  </div>
</nav>