<?php

namespace App\Listeners;

use App\Models\Face;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ExportListen
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        $face = Face::find('1AF11');
        $data = '[[';
        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 4 + 4) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']],[[';

        foreach ($face->facenodes as $key => $item){
            $data .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 7 + 4) .']';
            if($key < ($face->facenodes->count() -1)){
                $data .= ', ';
            }

        }
        $data .= ']]';


        $face = Face::find('1AF12');
        $data1 = '[[';
        foreach ($face->facenodes as $key => $item){
            $data1 .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 5 + 4) .']';
            if($key < ($face->facenodes->count() -1)){
                $data1 .= ', ';
            }

        }
        $data1 .= ']]';

        $face = Face::find('1AF13');
        $data2 = '[[';
        foreach ($face->facenodes as $key => $item){
            $data2 .= '['. ($item->node->point->long  )  .', '. ($item->node->point->lat ).', '. (27 + 5 + 4) .']';
            if($key < ($face->facenodes->count() -1)){
                $data2 .= ', ';
            }

        }
        $data2 .= ']]';

        $fh = fopen('geojson/body/a/1af23.geojson', 'w');
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
                    "Room": "b2.22",

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

        $fh = fopen('geojson/body/a/1af23.geojson', 'w');
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
                    "Room": "b2.22",
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

        $fh = fopen('geojson/body/a/1af23.geojson', 'w');
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
                    "Room": "b2.22",
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
