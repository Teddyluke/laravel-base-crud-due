 <h1>PAGAMENTI</h1>

 <ul>
   @foreach ($pagamenti as $pagamento)
   <li>
     {{$pagamento -> status}} {{$pagamento -> price}}
     <a href="{{route('pagamento.destroy', $pagamento -> id)}}">Delete</a>
     <a href="{{route('pagamento.edit', $pagamento -> id)}}">Edit</a>
   </li>
   @endforeach
 </ul>
