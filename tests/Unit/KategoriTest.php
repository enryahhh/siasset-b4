<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Support\GeneratePrimaryHelper;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function generateKode(){
        $id = Kategori::withTrashed()->select('id_kategori')->latest()->first();  
        $primary = new GeneratePrimaryHelper('KT',$id);
        return $primary->createCode();
    }

    public function test_generate_primary_key_when_no_data_in_database()
    {
        $id = Kategori::withTrashed()->select('id_kategori')->latest()->first();  
        $primary = new GeneratePrimaryHelper('KT',$id);
        $this->assertEquals('KT001',$primary->createCode());
    }

    public function test_should_throw_error_when_input_empty(){
        $token = session('_token');
        $response = $this->post('/kategori',['kategori'=>'','_token'=>$token]);
        // $response->dd();
        $response->assertInvalid(['kategori'=>'Kategori Tidak Boleh Kosong']);
    }

    public function test_should_throw_error_when_duplicate_kategori_name(){
        // Arrange
        $primaryKey = $this->generateKode();
        Kategori::create(['id_kategori'=>$primaryKey,'nama_kategori'=>'Kategori 1']);

        // Action
        $response = $this->post('/kategori',['kategori'=>'Kategori 1']);
        // $response->dd();
        // Assert
        $response->assertInvalid(['kategori'=>'Kategori tersebut sudah ada']);
    }

    public function test_kategori_should_insert_to_database_correctly(){
        $primaryKey = $this->generateKode();
        $token = session('_token');
        $response = $this->post('/kategori',['kategori'=>'Kategori Baru','_token'=>$token]);
        // $response->dd();
        $response->assertSessionHas([
            'notif' => ['type'=>'success','message'=>'Berhasil Menambah Kategori']
        ]);
    }

}
