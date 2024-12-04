<header>
    <div class="flex items-center justify-between p-4 bg-slate-500/25 rounded">
        <h1 class="text-2xl italic">CFGI</h1>

        <nav>
            <ul class="flex gap-4">
                <li>
                    <a href="/">Link</a>
                </li>
                <li>
                    <a href="#">Link</a>
            </ul>
        </nav>

        <div class="flex gap-2">
            <x-button variant="outline" :link="true">Login</x-button>
            <x-button variant="primary">Sign up</x-button>
        </div>
    </div>
</header>