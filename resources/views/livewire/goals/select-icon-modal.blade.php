<dialog id="icon_modal" class="modal backdrop:bg-black/70 backdrop-blur-sm">

    <div class="modal-box max-w-4xl bg-stone-900 border border-stone-700 rounded-2xl">

        <button class="btn btn-sm btn-circle btn-ghost absolute right-4 top-4 text-stone-400 hover:bg-stone-700"
            onClick="document.getElementById('icon_modal').close()">✕</button>

        <h3 class="font-bold text-2xl text-amber-400">Ícones</h3>
        <p class="py-2 text-stone-400">Selecione um ícone para sua categoria.</p>

        <div class="py-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            @foreach ($icons as $icon)
                <div
                    class="card bg-stone-800 border border-stone-700 hover:border-amber-500/50 hover:-translate-y-1 transition-all duration-300">
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <i class="bi bi-{{ $icon->class }} text-6xl "></i>
                        <h2 class="card-title text-stone-200 mt-4"> {{ $icon->name }}</h2>
                        <p class="text-stone-400 text-sm"> {{ $icon->category }}</p>
                        <div class="card-actions mt-4">
                            <button class="btn btn-sm sm:btn-md bg-amber-600 hover:bg-amber-500 border-none text-white"
                                wire:click="selectIcon({{ $icon->id }})">
                                Selecionar
                            </button>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <script>
        window.addEventListener('iconId', () => {
            document.getElementById('icon_modal').close();
        });
    </script>

</dialog>
