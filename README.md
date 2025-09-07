# NoSaldo
NoSaldo é uma aplicação web para controle financeiro pessoal, permitindo que o usuário registre ganhos, gastos, metas de economia e itens desejados, com análises inteligentes sobre a saúde financeira. O projeto é construído com Laravel no backend e utiliza Livewire para interatividade dinâmica.

---

### Funcionalidades

- Cadastro e gerenciamento de Receitas e Despesas.
- Controle de Metas financeiras com nome da meta, valor total e valor guardado, prioridade e status, data limite (deadline), ícone representativo.
- Registro de Itens desejados, permitindo que o sistema indique se o usuário consegue comprar com base no saldo disponível.
- Sistema de análise de saldo com cálculo de dinheiro real: receitas menos despesas.
- Interface interativa com Livewire, incluindo sliders, inputs com validação e filtros visuais.
- Personalização de ícones e cores das metas.

---

### Tecnologias Utilizadas

- PHP 8.x e Laravel 10.x
- Livewire para interatividade em tempo real
- Tailwind CSS para design responsivo e moderno
- Bootstrap Icons / Heroicons para representação visual de metas
- MySQL / MariaDB para banco de dados

---

### Como Usar

1. Clone o repositório: **git clone https://github.com/Elliton-Luis/nosaldo**
1. Instale as dependências do Laravel: **composer install, npm install && npm run dev**
1. Rode **cp .env.example .env**
1. Configure o .env com seu banco de dados e chaves
1. Use o comando: **php artisan generate:key**
1. Execute as migrations: **php artisan migrate**
1. Inicie o servidor local: **php artisan serve**
1. Acesse http://localhost:8000
