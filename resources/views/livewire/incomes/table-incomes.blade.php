<div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
    <div>
    </div>
  <table class="table">

    <thead>

      <tr>
        <th></th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Categoria</th>
      </tr>
    </thead>

    <tbody>
    @foreach ($incomes as $income)
        <tr>
            <th>{{$loop->index + 1}}</th>
            <td>{{$income->description}}</td>
            <td>R$ {{$income->value}}</td>
            <td>{{$income->category->name}}</td>
        </tr>
    @endforeach

    </tbody>
  </table>
</div>
