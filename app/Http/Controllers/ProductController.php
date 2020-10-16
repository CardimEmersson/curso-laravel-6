<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $request;

    /**
     * Construct
     * 
     */
    public function __construct(Request $request)
    {

        $this->request = $request;
        
        //Chama o login para autenticação somente para o controller create e store
        // $this->middleware('auth')->only(['create','store']);

        //ou exceto
        // $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teste = ['Teste1', 'Teste2', 'Teste3', 'Teste4', 'Teste5', 'Teste6'];

        // return view('teste', [
        //     'teste' => $teste
        // ]);

        // return view('teste', compact('teste'));
        // return view('admin.pages.products.index', ['teste' => $teste]);
        
        $product = Product::paginate();
        
        return view('admin.pages.product.index', ['product' => $product]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        $data = $request->only(['name', 'description', 'price', 'foto']);

        // $product = new Product;
        // $product->name = $request->name;  
        // $product->save();

        Product::create($data);

        return redirect()->route('products.index');

        //Validação simples dos inputs
        // $request->validate([
        //    'name' => 'required|min:3|max:255',
        //    'description' => 'min:3|max:10000',
        //    'foto' => 'required|image'
        // ]);
        //Caso validado imprimi OK
        // dd('OK');

        // dd($request->only(['name']));
        // dd($request->all());
        // if($request->file('foto')->isValid()){
            // local onde será salvo o arquivo
            // dd($request->file('foto')->store('public'));

            //criação de um link simbolico para acesso aos uploads dos arquivos 
            //php artisan storage:link

        //     $nameFile = $request->name . '.' . $request->foto->extension();
        //     dd($request->file('foto')->storeAs('products', $nameFile));
        // }


        // dd('Cadastrando...');
        // return "Criando um produto";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = Product::where('id', $id)->first();
      
        if (!$product = Product::find($id))
            redirect()->back();

        return view('admin.pages.productsshow', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando o produto {$id}");
        return "atualiza produto: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Deletar produto: {$id}";
    }
}
