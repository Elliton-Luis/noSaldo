<div
    class="w-full mx-auto rounded-box bg-neutral-950
         max-w-96 lg:max-w-none lg:w-140
         p-4 md:px-0 flex flex-col mt-16">

    <div class="flex-1 border border-neutral-950 border-7">
        <div class="flex items-center justify-center mb-5">
            <h1 class="text-lg font-bold text-white mx-13">Últimas Receitas</h1>
            <select class="bg-neutral-800 select select-bordered w-36" wire:model.lazy="filter">
                <option value="desc">Mais recentes primeiro</option>
                <option value="asc">Mais antigos primeiro</option>
            </select>
        </div>

        <table class="table w-full text-sm text-gray-50 [&>tbody>tr:nth-child(even)]:bg-neutral-900">
            <thead class="sticky top-0 z-10 bg-neutral-900 uppercase">
                <tr>
                    <th class="w-10 text-gray-50">N°</th>
                    <th class="min-w-[8rem] text-gray-50">Descrição</th>
                    <th class="w-24 text-gray-50">Valor</th>
                    <th class="hidden sm:table-cell min-w-[8rem] text-gray-50">Categoria</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($incomes as $income)
                    <tr>
                        <td class="w-10 text-base">{{ ($incomes->currentPage() - 1) * $incomes->perPage() + $loop->index + 1 }}</td>
                        <td class="min-w-[8rem] max-w-[10rem]">
                            <livewire:incomes.edit-modal-income :id="$income->id" :key="'edit_income_modal_'.$income->id" />
                        </td>

                        <td class="w-24 truncate text-success font-bold">R$ {{ number_format($income->value, 2, ',', '.') }}</td>
                        <td class="hidden sm:table-cell min-w-[8rem] text-amber-300 font-bold">{{ $income->category->name }}</td>
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

    <div class="sticky bottom-0 bg-neutral-950 w-full z-10 mt-2 flex justify-end p-2">
        {{ $incomes->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
    </div>
</div>
