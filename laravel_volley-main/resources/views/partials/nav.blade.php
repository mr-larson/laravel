{{-- <nav>
    <li><a href=""></a>Lien</li>
    <li><a href=""></a>Lien</li>
    <li><a href=""></a>Lien</li>
</nav> --}}

<nav class="bg-white-0 py-8">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-16" src="{{ asset("img/_logo/logo_volleyball.png") }}" alt="">
                </div>
                <div class="hidden sm:block sm:ml-6 items-center">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}" class="text-blue-500 hover:text-yellow-200 px-3 py-2 rounded-md text-4xl font-medium">Home</a>

                        <a href="{{ route("equipe.index") }}" class="text-blue-500 hover:text-yellow-200 px-3 py-2 rounded-md text-4xl font-medium">Equipes</a>
        
                        <a href="{{ route("joueur.index") }}" class="text-blue-500 hover:text-yellow-200 px-3 py-2 rounded-md text-4xl font-medium">Joueurs</a>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
    
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Equipes</a>
    
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Joueurs</a>
    
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Continents</a>

        </div>
    </div>

</nav>