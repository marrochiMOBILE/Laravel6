# foreach dan forelse
## foreach
```php
$data['database'] = [
    [
        "nama" => "marrochi",
        "umur" => 23,
        "hoby" => "ML"
    ],
    [
        "nama" => "kamila",
        "umur" => 21,
        "hoby" => "bucin"
    ]
    ];
 
Route::view('blade', 'tes', $data);
```

sekarang di file bladenya :
```php
@foreach($database as $row)
    {{ $row['nama'] }} <br>
    {{ $row['umur'] }} <br>
    {{ $row['hoby'] }} <br>
    <hr>
@endforeach
```

## forelse
forelse sama dengan foreach cuman bedanya dia ada tambahan yaitu empty untuk menampilkan jika datanya kosong
```php
$data['database'] = [
 
    ];
 
Route::view('blade', 'tes', $data);
```
di bladenya :
```php
@forelse($database as $row)
    {{ $row['nama'] }} <br>
    {{ $row['umur'] }} <br>
    {{ $row['hoby'] }} <br>
    <hr>
@empty
    data kosong    
@endforelse
```

## memangil database menggunkan method di laravel 
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Supplier;
class Csupplier extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_supplier = Supplier::all();
        return view('supplier/index',compact('data_supplier'));
    }
```
di bladenya :
```php
          @forelse($data_supplier as $row)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $row->nama_supplier }}</td>
              <!-- <td>{{ $row->telp_supplier }}</td>
              <td>{{ $row->alamat_supplier }}</td> -->
              <td>
              <form action="{{ route('supplier.destroy',[$row->kd_supplier]) }}" method="post">
                @csrf
                {{ METHOD_FIELD('DELETE') }}
                <a href="{{ route('supplier.edit',[$row->kd_supplier]) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('supplier.show',[$row->kd_supplier]) }}" class="btn btn-primary">Show</a>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </td>
            </tr>
            @empty
              <tr>
                <td>Data Kosong Brother</td>
               </tr>
            @endforelse  
``` 
