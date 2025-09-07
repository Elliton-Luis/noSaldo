<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Icon;

class IconSeeder extends Seeder
{
    public function run(): void
    {
                // Default
        Icon::create(['name' => 'Padrão', 'class' => 'question-circle', 'category' => 'Default']);

        // Bens (26 ícones)
        Icon::create(['name' => 'carro', 'class' => 'car-front', 'category' => 'Bens']);
        Icon::create(['name' => 'casa', 'class' => 'house', 'category' => 'Bens']);
        Icon::create(['name' => 'predio', 'class' => 'building', 'category' => 'Bens']);
        Icon::create(['name' => 'loja', 'class' => 'shop', 'category' => 'Bens']);
        Icon::create(['name' => 'sacola', 'class' => 'bag', 'category' => 'Bens']);
        Icon::create(['name' => 'sacolacoracao', 'class' => 'bag-heart', 'category' => 'Bens']);
        Icon::create(['name' => 'telefone', 'class' => 'phone', 'category' => 'Bens']);
        Icon::create(['name' => 'telefonesmart', 'class' => 'phone-flip', 'category' => 'Bens']);
        Icon::create(['name' => 'notebook', 'class' => 'laptop', 'category' => 'Bens']);
        Icon::create(['name' => 'computador', 'class' => 'pc-display', 'category' => 'Bens']);
        Icon::create(['name' => 'controle', 'class' => 'controller', 'category' => 'Bens']);
        Icon::create(['name' => 'fones', 'class' => 'headphones', 'category' => 'Bens']);
        Icon::create(['name' => 'relogio', 'class' => 'watch', 'category' => 'Bens']);
        Icon::create(['name' => 'bicicleta', 'class' => 'bicycle', 'category' => 'Bens']);
        Icon::create(['name' => 'copoquente', 'class' => 'cup-hot', 'category' => 'Bens']);
        Icon::create(['name' => 'ovo', 'class' => 'egg-fried', 'category' => 'Bens']);
        Icon::create(['name' => 'pizza', 'class' => 'pizza', 'category' => 'Bens']);
        Icon::create(['name' => 'sorvete', 'class' => 'ice-cream', 'category' => 'Bens']);
        Icon::create(['name' => 'vinho', 'class' => 'wine', 'category' => 'Bens']);
        Icon::create(['name' => 'copo', 'class' => 'cup-straw', 'category' => 'Bens']);
        Icon::create(['name' => 'presente', 'class' => 'gift', 'category' => 'Bens']);
        Icon::create(['name' => 'diamante', 'class' => 'diamond', 'category' => 'Bens']);
        Icon::create(['name' => 'camera', 'class' => 'camera', 'category' => 'Bens']);
        Icon::create(['name' => 'musica', 'class' => 'music-note-beamed', 'category' => 'Bens']);
        Icon::create(['name' => 'livro', 'class' => 'book', 'category' => 'Bens']);
        Icon::create(['name' => 'aviao', 'class' => 'airplane', 'category' => 'Bens']);

        // Finanças (14 ícones)
        Icon::create(['name' => 'dolar', 'class' => 'currency-dollar', 'category' => 'Finanças']);
        Icon::create(['name' => 'euro', 'class' => 'currency-euro', 'category' => 'Finanças']);
        Icon::create(['name' => 'bitcoin', 'class' => 'currency-bitcoin', 'category' => 'Finanças']);
        Icon::create(['name' => 'cofrinho', 'class' => 'piggy-bank', 'category' => 'Finanças']);
        Icon::create(['name' => 'dinheiro', 'class' => 'cash', 'category' => 'Finanças']);
        Icon::create(['name' => 'cartao', 'class' => 'credit-card', 'category' => 'Finanças']);
        Icon::create(['name' => 'carteira', 'class' => 'wallet', 'category' => 'Finanças']);
        Icon::create(['name' => 'banco', 'class' => 'bank', 'category' => 'Finanças']);
        Icon::create(['name' => 'cofre', 'class' => 'safe', 'category' => 'Finanças']);
        Icon::create(['name' => 'nota', 'class' => 'receipt', 'category' => 'Finanças']);
        Icon::create(['name' => 'graficoCima', 'class' => 'graph-up', 'category' => 'Finanças']);
        Icon::create(['name' => 'graficoBaixo', 'class' => 'graph-down', 'category' => 'Finanças']);
        Icon::create(['name' => 'barras', 'class' => 'bar-chart-line', 'category' => 'Finanças']);
        Icon::create(['name' => 'clipboard', 'class' => 'clipboard-data', 'category' => 'Finanças']);



    }
}
