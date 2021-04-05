<?php

namespace App\Http\Controllers;

use App\Events\ExportEvent;
use App\Models\Face;
use App\Models\FaceNode;
use App\Models\Node;
use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\at;

class LazyController extends Controller
{
    public function node(){
        $node = Node::orderBy('id', 'asc')->take(8)->get();
//        dd(substr($node[0]->id, 3, 1));
//        dd($node);
        foreach ($node as $key => $item_node){
            Node::create([
                'id' => '10'.substr($item_node->id, 1, 3),
                'name' => '10'.substr($item_node->id, 1, 3),
                'desc' => 'tầng 10 Khu '.substr($item_node->id, 1, 1).' , phong, node '.substr($item_node->id, 3, 1)
            ]);
//            $item_node->delete();
            echo $key."<br>";
        }
    }

    public function point(){
        $point = Point::orderBy('node_id', 'asc')->get();

        foreach ($point->skip(150) as $key => $item){
//            $item->long = $item->long.'0000';
//            $item->save();
//            if(substr($item->id, 0, 2) == 10){
//                $string1 = substr($item->long, 0, 15);
//                $string2= substr($item->long, 15);
//                $string2 = substr($string2, 0, 2);
//                $string2 += 5;
//
//                $item->long = $string1.$string2;
//                $item->save();
//            }
            $item->long = str_replace(',', '', $item->long);
            $item->save();
            echo $key."<br>";
        }
    }

    public function window(){
        $node1 = Node::find('0EN2');
        $node2 = Node::find('0FN1');
        $node3 = Node::find('0FN2');

//                 Node 1
        $newnode = Node::create([
            'id' => 'F1',
            'name' => 'F1',
        ]);

        $newpoint = Point::create([
            'id' => 'F1',
            'long' => 0.875*($node1->point->long) + 0.125*($node2->point->long),
            'lat' => 0.875*($node1->point->lat) + 0.125*($node2->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);echo $newpoint->id."<br>";
        //Node 2
        $newnode = Node::create([
            'id' => 'F2',
            'name' => 'F2',
        ]);

        $newpoint = Point::create([
            'id' => 'F2',
            'long' => 0.625*($node1->point->long) + 0.375*($node2->point->long),
            'lat' => 0.625*($node1->point->lat) + 0.375*($node2->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);echo $newpoint->id."<br>";
        // Node 3
        $newnode = Node::create([
            'id' => 'F3',
            'name' => 'F3',
        ]);

        $newpoint = Point::create([
            'id' => 'F3',
            'long' => 0.375*($node1->point->long) + 0.625*($node2->point->long),
            'lat' => 0.375*($node1->point->lat) + 0.625*($node2->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);echo $newpoint->id."<br>";

        // Node 4
        $newnode = Node::create([
            'id' => 'F4',
            'name' => 'F4',
        ]);

        $newpoint = Point::create([
            'id' => 'F4',
            'long' => 0.125*($node1->point->long) + 0.875*($node2->point->long),
            'lat' => 0.125*($node1->point->lat) + 0.875*($node2->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);echo $newpoint->id."<br>";


        //                 Node 1
        $newnode = Node::create([
            'id' => 'F5',
            'name' => 'F5',
        ]);

        $newpoint = Point::create([
            'id' => 'F5',
            'long' => 0.875*($node2->point->long) + 0.125*($node3->point->long),
            'lat' => 0.875*($node2->point->lat) + 0.125*($node3->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);echo $newpoint->id."<br>";
        //Node 2
        $newnode = Node::create([
            'id' => 'F6',
            'name' => 'F6',
        ]);

        $newpoint = Point::create([
            'id' => 'F6',
            'long' => 0.625*($node2->point->long) + 0.375*($node3->point->long),
            'lat' => 0.625*($node2->point->lat) + 0.375*($node3->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);echo $newpoint->id."<br>";
        // Node 3
        $newnode = Node::create([
            'id' => 'F7',
            'name' => 'F7',
        ]);

        $newpoint = Point::create([
            'id' => 'F7',
            'long' => 0.375*($node2->point->long) + 0.625*($node3->point->long),
            'lat' => 0.375*($node2->point->lat) + 0.625*($node3->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);
        echo $newpoint->id."<br>";
        // Node 4
        $newnode = Node::create([
            'id' => 'F8',
            'name' => 'F8',
        ]);

        $newpoint = Point::create([
            'id' => 'F8',
            'long' => 0.125*($node2->point->long) + 0.875*($node3->point->long),
            'lat' => 0.125*($node2->point->lat) + 0.875*($node3->point->lat),
            'z' => 0,
            'node_id' => $newnode->id
        ]);
        echo $newpoint->id."<br>";
    }

    public function stair(){
//        $arrNode0 = Node::find('O');
        $arrNode = ['0AN7','0AN8','0BN7','0BN8','0CN5','0DN7','0DN8','0EN5','0FN6','0FN7'];
//        for ($i=0; $i <10; $i++){
//            echo $arrNode[$i];
            $newnode = Node::create([
                'id' => '0ST2' ,
                'name' => '0ST2',
            ]);
            $node = Node::find('0ST3');
            $nodeO = Node::find('O0');

            $newpoint = Point::create([
                'id' => '0ST2',
                'long' =>(($nodeO->point->long + $node->point->long)/2),
                'lat' =>(($nodeO->point->lat + $node->point->lat)/2),
                'z' => 0,
                'node_id' => $newnode->id
            ]);
            echo $newpoint->id."<br>";
//        }
    }
    public function export(){
        echo 'export file js';
        $face = Face::find('1FF21');
        $data = '[[';
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 4) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']],[[';

        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 7) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']]';


        $fh = fopen('geojson/body/f/1ff21.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                    "@id": "Nha B",
                    "Room": "b1.2"

                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);

//        event(new ExportEvent());
    }

    public function export1(){
        echo 'export file js1';
        $face = Face::find('1BF22');
        $data1 = '[[';
        foreach ($face->facenodes as $key => $item){
            $data1 .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 5 +4 + 4 +4 +4+4+4+4) .']';
            if($key < ($face->facenodes->count() -1)){
                $data1 .= ', ';
            }

        }
        $data1 .= ']]';
        $fh = fopen('geojson/body/b/8bf22.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                   "@id": "Nha B",
                    "Room": "b2.16"
                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data1
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);

//        event(new ExportEvent());
    }


    public function export2(){
        echo 'export file js2';

        $face = Face::find('1FF23');
        $data2 = '[[';
        foreach ($face->facenodes as $key => $item){
            $data2 .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 5) .']';
            if($key < ($face->facenodes->count() -1)){
                $data2 .= ', ';
            }

        }
        $data2 .= ']]';

        $fh = fopen('geojson/body/f/1ff23.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                    "@id": "Nha B",
                    "Room": "b1.2"
                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data2
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);
//        event(new ExportEvent());
    }


    public function front(){
        echo 'export file js2';

        $face = Face::find('FA');
        $data = '[[';
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27) .'],';
//            if($key < ($face->facenodes->count() -1)){
//                $data .= ', ';
//            }

        }
        $data .= ']],[[';
        $face = Face::find('FB');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27) .'],';
//            if($key < ($face->facenodes->count() -1)){
//                $data .= ', ';
//            }

        }
        $data .= ']],[[';
        $face = Face::find('FC');

        foreach ($face->facenodes as $key => $item){

            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 ) .'],';
//            if($key < ($face->facenodes->count() -1)){
//                $data .= ', ';
//            }

        }
        $data .= ']],[[';
        $face = Face::find('FD');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27) .'],';
//            if($key < ($face->facenodes->count() -1)){
//                $data .= ', ';
//            }

        }
        $data .= ']],[[';
        $face = Face::find('FE');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27) .'],';
//            if($key < ($face->facenodes->count() -1)){
//                $data .= ', ';
//            }

        }
        $data .= ']],[[';
        $face = Face::find('FF');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 ) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }

        $data .= ']]';

        $fh = fopen('geojson/front/f0.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);
    }

    public function front1(){
        echo 'export file js2';

        $face = Face::find('FF');
        $data2 = '[[';
        foreach ($face->facenodes as $key => $item){
            $data2 .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 6) .']';
            if($key < ($face->facenodes->count() -1)){
                $data2 .= ', ';
            }

        }
        $data2 .= ']]';

        $fh = fopen('geojson/front/ff.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data2
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);
    }

    public function floor(){
        echo 'export file js2';

        $face = Face::find('FLD');
        $arr = [31,35,39,43,47,51, 55, 59];
        $data2 = '';
        for($i = 0 ; $i < 6; $i++){
            $data2 .= '[[';
            foreach ($face->facenodes as $key => $item){
                $data2 .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. $arr[$i] .']';
                if($key < ($face->facenodes->count() -1)){
                    $data2 .= ', ';
                }
            }
            $data2 .= ']]';
            if($i < 5 ){
                $data2 .= ',';
            }
        }



        $fh = fopen('geojson/floor/f4.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data2
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);
    }

    public function top(){
        echo 'export file js2';
        $arr = [67,63,59,55,51,47];
        $face = Face::find('FTA');

        $data = '[[';
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (67) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']],[[';
        $face = Face::find('FTB');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (63) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']],[[';
        $face = Face::find('FTC');

        foreach ($face->facenodes as $key => $item){

            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (59 ) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']],[[';
        $face = Face::find('FTD');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (55) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']],[[';
        $face = Face::find('FTE');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (51) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']],[[';
        $face = Face::find('FTF');
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (47 ) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }

        $data .= ']]';


        $fh = fopen('geojson/floor/f7.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);
    }

    public function exportstair(){
        echo 'export file js2';

        $face = Face::find('SI3');
        $data2 = '[[';
        foreach ($face->facenodes as $key => $item){
            $data2 .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '.(27) .']';
            if($key < ($face->facenodes->count() -1)){
                $data2 .= ', ';
            }
        }
        $data2 .= ']]';



        $fh = fopen('geojson/stair/si3.geojson', 'w');
        $text = '
            {
              "type": "FeatureCollection",
              "generator": "overpass-ide",
              "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
              "timestamp": "2020-08-27T10:45:03Z",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                  },
                  "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                      '.
            $data2
            .'
                    ]
                  },
                  "id": "way/243154153"
                }
              ]
            }
        ';
        fwrite($fh, $text);
        fclose($fh);
    }

}
