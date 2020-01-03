<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\etudiantsController;
use App\Http\Controllers;
use App\Http\Resources\Etudiant as EtudiantResource;
use App;
use App\etudiant;

class MyFirstUnitTest extends TestCase
{

    public function testIndex()
    {
      //  $this->assertTrue(true);

       /* $response = $this->Json('GET', 'etudiantsController@index');
        $this->assertResponseOk();
        $this->*/

        $ex=new etudiant;



      $this->assertTrue($ex->index1('2cp7') == '2cp7');
      // $this->assertEquals('2cp7',$x['groupe']);
       //$ex->index();


     ///$this->assertAttributeContains('2cp7');
     //echo($ex);

     //$this->assertEquals('2cp7', $ex->getContent());
     //$this->assertAttributeSame('2cp7',$ex,'etudiant.php',"okkk");

     //   $u=$_SESSION['gro'];
      //  $this->assertTrue($calculator->sum(2, 2) == 4);

  //  $this->assertTrue(true);
    }
}
