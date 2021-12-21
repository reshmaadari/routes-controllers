<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collections extends Controller
{
    //
    public function index(){
        $a=collect([1, 2, 3,5,98,56]);
        echo $a."<br>";
        echo $a->avg()."<br>";
        echo $a->chunk(2)."<br>";
        $collection=collect([[1,2,3],[4,5,6],[7,8,9]]);
        echo $collection->collapse()."<br>";
        echo $collection->collapse()->sum()."<br>";
        $c=collect([1,2,3]);
        $b=$c->collect();
        echo $b."<br>";
        $cc=collect(["name","section"]);
        $combined=$cc->combine(['Harsha','c']);
        echo $combined."<br>";
        $con=collect(['Jeh']);
        $concatenated=$con->concat(['Jeh'])->concat(['name'=>'Joe']);
        echo $concatenated."<br>";
        echo $concatenated->count()."<br>"; 
        $aa=collect([1,3,3,4,5]);
        echo $aa->countBy()."<br>";
        $x=collect([1,2]);
        $y=$x->crossJoin(['a','b']);
        echo $y."<br>";
        $diff=collect([1,2,3,4,5]);
        echo $diff->diff([2,4,6,8])."<br>";
        $clt=collect(['color'=>'orange','type']);
        $dif=$clt->diffAssoc(['color'=>'yellow',
        'type'=>'fruit',
        'remain'=>'3',
        'used'=>'6']);
        echo $dif."<br>";
        $collections = collect(['a', 'b', 'b', 'a', 'c', 'b','b']);
        echo $collections->duplicates()."<br>";
        echo $collections->forPage(2,3)."<br>";
        $collectionss = collect([
            ['name' => 'Regena', 'age' => null],
            ['name' => 'Linda', 'age' => 14],
            ['name' => 'Diego', 'age' => 23],
            ['name' => 'Linda', 'age' => 84],
        ]);
        echo $collectionss."<br>";
        echo $diff->max()."<br>";
        echo $diff->min()."<br>";
        echo $diff->median()."<br>";
        $multiplied = $a->map(function ($item, $key) {
            return $item * 2;
        });
        echo $multiplied;
    }
}
