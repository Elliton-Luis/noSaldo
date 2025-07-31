<div class="w-full mx-auto rounded-box bg-neutral-950
         max-w-96 md:max-w-xl lg:max-w-none lg:w-[25vw]
         p-4 md:px-0 flex flex-col mt-16 overflow-hidden">


    <div class="overflow-y-auto flex-1 min-h-[30rem] lg:h-[60vh] border border-neutral-950 border-7">
        <h1 class="text-center font-bold text-lg mb-5">Últimas Receitas</h1>
        <table class="table w-full text-sm text-gray-50 [&>tbody>tr:nth-child(even)]:bg-neutral-900">
            <thead class="sticky top-0 z-10 bg-neutral-900 uppercase">
                <tr>
                    <th class="w-10 text-gray-50">N°</th>
                    <th class="min-w-[8rem] text-gray-50">Descrição</th>
                    <th class="w-24 text-gray-50">Valor</th>
                    <th class="hidden md:table-cell min-w-[8rem] text-gray-50">Categoria</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($incomes as $income)
                    <tr>
                        <td class="w-10 ">{{ $loop->index + 1 }}</td>
                        <td class="min-w-[8rem] truncate max-w-[10rem] ">{{ $income->description }}</td>
                        <td class="w-24 truncate ">R$ {{ number_format($income->value, 2, ',', '.') }}</td>
                        <td class="hidden md:table-cell min-w-[8rem] ">{{ $income->category->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-neutral-content/70 h-[20rem] align-middle">
                            Nenhuma receita cadastrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="sticky bottom-0 bg-neutral-950 z-10 mt-2 flex justify-end mx-5">
        {{ $incomes->links('vendor.livewire.tailwind', ['scrollTo' => 'false']) }}
    </div>
</div>
