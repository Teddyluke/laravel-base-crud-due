<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pagamenti;

class PagamentiController extends Controller
{
    public function index() {

      $pagamenti = Pagamenti::all();

      return view('pagamenti', compact('pagamenti'));
    }

    public function destroy($id) {

      $pagamenti = Pagamenti::findOrFail($id);

      $pagamenti -> delete();

      return redirect() -> route('pagamenti.index');
    }

    public function edit($id) {

      $pagamenti = Pagamenti::findOrFail($id);

      return view('pagamento-edit', compact('pagamenti'));
    }

    public function update(Request $request, $id) {

      $data = $request -> all();

      $pagamento = Pagamenti::findOrFail($id);
      $pagamento -> update($data);
      return redirect() -> route('pagamenti.index');
    }
}
