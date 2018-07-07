<table class="table table-hover">
    <thead>
    <tr>
        <th>Name</th>
        <th>Icon</th>
        <th>Price</th>
        <th>DailyChngPer</th>
    </tr>
    </thead>
    <tbody>
    @foreach($popArray as $p)
        <tr>
            <td>{{$p->getName()}}</td>
            <td><img src="{{$p->getImageUrl()}}" alt=""></td>
            <td>{{$p->getPrice()}} $</td>
            <td>{{$p->getDailyChangePercent()}} %</td>
        </tr>
        @endforeach

    </tbody>
</table>

