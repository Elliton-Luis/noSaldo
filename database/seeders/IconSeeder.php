<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Icon;

class IconSeeder extends Seeder
{
    public function run(): void
    {
        Icon::create(['name' => 'trophy', 'class' => 'trophy', 'category' => 'Objetivos']);
        Icon::create(['name' => 'award', 'class' => 'award', 'category' => 'Objetivos']);
        Icon::create(['name' => 'flag', 'class' => 'flag', 'category' => 'Objetivos']);
        Icon::create(['name' => 'check-circle', 'class' => 'check-circle', 'category' => 'Objetivos']);
        Icon::create(['name' => 'star', 'class' => 'star', 'category' => 'Objetivos']);
        Icon::create(['name' => 'medal', 'class' => 'medal', 'category' => 'Objetivos']);
        Icon::create(['name' => 'rocket', 'class' => 'rocket', 'category' => 'Objetivos']);
        Icon::create(['name' => 'target', 'class' => 'target', 'category' => 'Objetivos']);
        Icon::create(['name' => 'coin', 'class' => 'coin', 'category' => 'Finanças']);
        Icon::create(['name' => 'piggy-bank', 'class' => 'piggy-bank', 'category' => 'Finanças']);
        Icon::create(['name' => 'cash-stack', 'class' => 'cash-stack', 'category' => 'Finanças']);
        Icon::create(['name' => 'credit-card', 'class' => 'credit-card', 'category' => 'Finanças']);
        Icon::create(['name' => 'wallet', 'class' => 'wallet', 'category' => 'Finanças']);
        Icon::create(['name' => 'bank', 'class' => 'bank', 'category' => 'Finanças']);
        Icon::create(['name' => 'graph-up', 'class' => 'graph-up', 'category' => 'Finanças']);
        Icon::create(['name' => 'graph-up-arrow', 'class' => 'graph-up-arrow', 'category' => 'Finanças']);
        Icon::create(['name' => 'check-square', 'class' => 'check-square', 'category' => 'Tarefas']);
        Icon::create(['name' => 'list-task', 'class' => 'list-task', 'category' => 'Tarefas']);
        Icon::create(['name' => 'calendar-check', 'class' => 'calendar-check', 'category' => 'Tarefas']);
        Icon::create(['name' => 'clipboard-check', 'class' => 'clipboard-check', 'category' => 'Tarefas']);
        Icon::create(['name' => 'hourglass', 'class' => 'hourglass', 'category' => 'Tarefas']);
        Icon::create(['name' => 'bell', 'class' => 'bell', 'category' => 'Tarefas']);
        Icon::create(['name' => 'alarm', 'class' => 'alarm', 'category' => 'Tarefas']);
        Icon::create(['name' => 'flag-fill', 'class' => 'flag-fill', 'category' => 'Tarefas']);
        Icon::create(['name' => 'bar-chart-line', 'class' => 'bar-chart-line', 'category' => 'Progresso']);
        Icon::create(['name' => 'graph-up', 'class' => 'graph-up', 'category' => 'Progresso']);
        Icon::create(['name' => 'arrow-up', 'class' => 'arrow-up', 'category' => 'Progresso']);
        Icon::create(['name' => 'arrow-trend-up', 'class' => 'arrow-trend-up', 'category' => 'Progresso']);
        Icon::create(['name' => 'lightning-charge', 'class' => 'lightning-charge', 'category' => 'Progresso']);
        Icon::create(['name' => 'play', 'class' => 'play', 'category' => 'Progresso']);
        Icon::create(['name' => 'rocket-takeoff', 'class' => 'rocket-takeoff', 'category' => 'Progresso']);
        Icon::create(['name' => 'speedometer', 'class' => 'speedometer', 'category' => 'Progresso']);

    }
}
