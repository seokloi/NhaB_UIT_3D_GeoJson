<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title>GeoJSONLayer | Sample | ArcGIS API for JavaScript 4.16</title>

    <style>
        html,
        body,
        #viewDiv {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
        }
    </style>

    <link rel="stylesheet" href="https://js.arcgis.com/4.16/esri/themes/light/main.css" />
    <script src="https://js.arcgis.com/4.16/"></script>

    <script>
        require([
            "esri/Map",
            "esri/views/SceneView",
            "esri/layers/GeoJSONLayer",
            "esri/layers/SceneLayer"
        ], function(Map, SceneView, GeoJSONLayer, SceneLayer) {
            <?php $flag1 = [
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
                [
                    [1,2,3],
                    [1,2,3]
                ],
            ]
            ?>
            @foreach( $flag1 as $key => $item)
                @foreach($item as $key1 => $item1)
                    const geojson{{$key+1}}af{{$key1+1}}1  = new GeoJSONLayer({
                        url: "geojson/body/a/{{$key + 1}}af{{$key1 +1}}1.geojson"
                    })
                    geojson{{$key+1}}af{{$key1+1}}1.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 1, //chiều cao
                                material: {
                                    color: "#019ee2" // xanh dam
                                }
                            }]
                        }
                    };

                    const geojson{{$key+1}}af{{$key1+1}}2  = new GeoJSONLayer({
                        url: "geojson/body/a/{{$key + 1}}af{{$key1 +1}}2.geojson"
                    })
                    geojson{{$key+1}}af{{$key1+1}}2.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 2, //chiều cao
                                material: {
                                    color: "#87dbfa" // xanh dam
                                }
                            }]
                        }
                    };

                    const geojson{{$key+1}}af{{$key1+1}}3  = new GeoJSONLayer({
                        url: "geojson/body/a/{{$key + 1}}af{{$key1 +1}}3.geojson"
                    })
                    geojson{{$key+1}}af{{$key1+1}}3.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 2, //chiều cao
                                material: {
                                    color: "#ffffff" // xanh dam
                                }
                            }]
                        }
                    };
                @endforeach
            @endforeach

            <?php $flag2 = [
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
        ]
            ?>

            @foreach( $flag2 as $key => $item)
                @foreach($item as $key1 => $item1)
                    const geojson{{$key+1}}bf{{$key1+1}}1  = new GeoJSONLayer({
                        url: "geojson/body/b/{{$key + 1}}bf{{$key1 +1}}1.geojson"
                    })
                    geojson{{$key+1}}bf{{$key1+1}}1.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 1, //chiều cao
                                material: {
                                    color: "#019ee2" // xanh dam
                                }
                            }]
                        }
                    };

                    const geojson{{$key+1}}bf{{$key1+1}}2  = new GeoJSONLayer({
                        url: "geojson/body/b/{{$key + 1}}bf{{$key1 +1}}2.geojson"
                    })
                    geojson{{$key+1}}bf{{$key1+1}}2.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 2, //chiều cao
                                material: {
                                    color: "#87dbfa" // xanh dam
                                }
                            }]
                        }
                    };

                    const geojson{{$key+1}}bf{{$key1+1}}3  = new GeoJSONLayer({
                        url: "geojson/body/b/{{$key + 1}}bf{{$key1 +1}}3.geojson"
                    })
                    geojson{{$key+1}}bf{{$key1+1}}3.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 2, //chiều cao
                                material: {
                                    color: "#ffffff" // xanh dam
                                }
                            }]
                        }
                    };
                @endforeach
            @endforeach

            <?php $flag3 = [
            [
                [1,2,3]
            ],
            [
                [1,2,3]
            ],
            [
                [1,2,3]
            ],
            [
                [1,2,3]
            ],
            [
                [1,2,3]
            ],
            [
                [1,2,3]
            ],
            [
                [1,2,3]
            ],
        ]
            ?>

            @foreach( $flag3 as $key => $item)
                @foreach($item as $key1 => $item1)
                    const geojson{{$key+1}}cf{{$key1+1}}1  = new GeoJSONLayer({
                        url: "geojson/body/c/{{$key + 1}}cf{{$key1 +1}}1.geojson"
                    })
                    geojson{{$key+1}}cf{{$key1+1}}1.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 1, //chiều cao
                                material: {
                                    color: "#019ee2" // xanh dam
                                }
                            }]
                        }
                    };

                    const geojson{{$key+1}}cf{{$key1+1}}2  = new GeoJSONLayer({
                        url: "geojson/body/c/{{$key + 1}}cf{{$key1 +1}}2.geojson"
                    })
                    geojson{{$key+1}}cf{{$key1+1}}2.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 2, //chiều cao
                                material: {
                                    color: "#87dbfa" // xanh dam
                                }
                            }]
                        }
                    };

                    const geojson{{$key+1}}cf{{$key1+1}}3  = new GeoJSONLayer({
                        url: "geojson/body/c/{{$key + 1}}cf{{$key1 +1}}3.geojson"
                    })
                    geojson{{$key+1}}cf{{$key1+1}}3.renderer = {
                        type: "simple",
                        symbol: {
                            type: "polygon-3d",
                            symbolLayers: [{
                                type: "extrude",
                                size: 2, //chiều cao
                                material: {
                                    color: "#ffffff" // xanh dam
                                }
                            }]
                        }
                    };
                @endforeach
            @endforeach

//d
            <?php $flag4 = [
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ]
        ]
            ?>

            @foreach( $flag4 as $key => $item)
            @foreach($item as $key1 => $item1)
            const geojson{{$key+1}}df{{$key1+1}}1  = new GeoJSONLayer({
                url: "geojson/body/d/{{$key + 1}}df{{$key1 +1}}1.geojson"
            })
            geojson{{$key+1}}df{{$key1+1}}1.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 1, //chiều cao
                        material: {
                            color: "#019ee2" // xanh dam
                        }
                    }]
                }
            };

            const geojson{{$key+1}}df{{$key1+1}}2  = new GeoJSONLayer({
                url: "geojson/body/d/{{$key + 1}}df{{$key1 +1}}2.geojson"
            })
            geojson{{$key+1}}df{{$key1+1}}2.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 2, //chiều cao
                        material: {
                            color: "#87dbfa" // xanh dam
                        }
                    }]
                }
            };

            const geojson{{$key+1}}df{{$key1+1}}3  = new GeoJSONLayer({
                url: "geojson/body/d/{{$key + 1}}df{{$key1 +1}}3.geojson"
            })
            geojson{{$key+1}}df{{$key1+1}}3.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 2, //chiều cao
                        material: {
                            color: "#ffffff" // xanh dam
                        }
                    }]
                }
            };
            @endforeach
            @endforeach

            //e
            <?php $flag5 = [
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ]
        ]
            ?>

            @foreach( $flag5 as $key => $item)
            @foreach($item as $key1 => $item1)
            const geojson{{$key+1}}ef{{$key1+1}}1  = new GeoJSONLayer({
                url: "geojson/body/e/{{$key + 1}}ef{{$key1 +1}}1.geojson"
            })
            geojson{{$key+1}}ef{{$key1+1}}1.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 1, //chiều cao
                        material: {
                            color: "#019ee2" // xanh dam
                        }
                    }]
                }
            };

            const geojson{{$key+1}}ef{{$key1+1}}2  = new GeoJSONLayer({
                url: "geojson/body/e/{{$key + 1}}ef{{$key1 +1}}2.geojson"
            })
            geojson{{$key+1}}ef{{$key1+1}}2.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 2, //chiều cao
                        material: {
                            color: "#87dbfa" // xanh dam
                        }
                    }]
                }
            };

            const geojson{{$key+1}}ef{{$key1+1}}3  = new GeoJSONLayer({
                url: "geojson/body/e/{{$key + 1}}ef{{$key1 +1}}3.geojson"
            })
            geojson{{$key+1}}ef{{$key1+1}}3.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 2, //chiều cao
                        material: {
                            color: "#ffffff" // xanh dam
                        }
                    }]
                }
            };
            @endforeach
            @endforeach
//f
            <?php $flag6 = [
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [1,2,3],
                [1,2,3]
            ]
        ]
            ?>

            @foreach( $flag6 as $key => $item)
            @foreach($item as $key1 => $item1)
            const geojson{{$key+1}}ff{{$key1+1}}1  = new GeoJSONLayer({
                url: "geojson/body/f/{{$key + 1}}ff{{$key1 +1}}1.geojson"
            })
            geojson{{$key+1}}ff{{$key1+1}}1.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 1, //chiều cao
                        material: {
                            color: "#019ee2" // xanh dam
                        }
                    }]
                }
            };

            const geojson{{$key+1}}ff{{$key1+1}}2  = new GeoJSONLayer({
                url: "geojson/body/f/{{$key + 1}}ff{{$key1 +1}}2.geojson"
            })
            geojson{{$key+1}}ff{{$key1+1}}2.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 2, //chiều cao
                        material: {
                            color: "#87dbfa" // xanh dam
                        }
                    }]
                }
            };

            const geojson{{$key+1}}ff{{$key1+1}}3  = new GeoJSONLayer({
                url: "geojson/body/f/{{$key + 1}}ff{{$key1 +1}}3.geojson"
            })
            geojson{{$key+1}}ff{{$key1+1}}3.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 2, //chiều cao
                        material: {
                            color: "#ffffff" // xanh dam
                        }
                    }]
                }
            };
            @endforeach
            @endforeach

	//TwoSide
            const geojsonWallLeft  = new GeoJSONLayer({
                url: "geojson/TwoSide/WallLeft.geojson"
            })
            geojsonWallLeft.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 40, //chiều cao
                        material: {
                            color: "#87dbfa" // xanh nhat
                        }
                    }]
                }
            };

	    const geojsonWallRight  = new GeoJSONLayer({
                url: "geojson/TwoSide/WallRight.geojson"
            })
            geojsonWallRight.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 20, //chiều cao
                        material: {
                            color: "#87dbfa" // xanh nhat
                        }
                    }]
                }
            };

	    const geojsonWallWindowSize1  = new GeoJSONLayer({
                url: "geojson/TwoSide/WallWindowSize1.geojson"
            })
            geojsonWallWindowSize1.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 1, //chiều cao
                        material: {
                            color: "#87dbfa" // xanh nhat
                        }
                    }]
                }
            };
	
	    const geojsonWallWindowSize2  = new GeoJSONLayer({
                url: "geojson/TwoSide/WallWindowSize2.geojson"
            })
            geojsonWallWindowSize2.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 2, //chiều cao
                        material: {
                            color: "#87dbfa" // xanh nhat
                        }
                    }]
                }
            };
		
	    const geojsonWindowRight  = new GeoJSONLayer({
                url: "geojson/TwoSide/WindowRight.geojson"
            })
            geojsonWindowRight.renderer = {
                type: "simple",
                symbol: {
                    type: "line-3d",
                    symbolLayers: [{
                        type: "path",
                        width: 0.1,
                        material: {
                            color: "#FFFFFF" // White
                        }
                    }]
                }
            };

            const geojsonWindowLeft  = new GeoJSONLayer({
                url: "geojson/TwoSide/WindowLeft.geojson"
            })
            geojsonWindowLeft.renderer = {
                type: "simple",
                symbol: {
                    type: "line-3d",
                    symbolLayers: [{
                        type: "path",
                        width: 0.1,
                        material: {
                            color: "#FFFFFF" // White
                        }
                    }]
                }
            };

        //front
            <?php $arrf = [6,34.2,30.2,26.2,22.2,18.2,14.2 ] ?>
            @for($i = 0; $i < 7; $i++)
                const geojsonf{{$i}}  = new GeoJSONLayer({
                    url: "geojson/front/f{{$i}}.geojson"
                })

                geojsonf{{$i}}.renderer = {
                    type: "simple",
                    symbol: {
                        type: "polygon-3d",
                        symbolLayers: [{
                            type: "extrude",
                            size: {{ $arrf[$i] }}, //chiều cao
                            material: {
                                @if( $i == 0 )
                                    color: "#7DA859"
                                @else
                                    color: "#87dbfa"
                                @endif
                            }
                        }]
                    }
                };
            @endfor
        //wall
        <?php $arrf = [0,40,36,32,28,24,20] ?>
            @for($i = 1; $i < 7; $i++)
                const geojsonw{{$i}}  = new GeoJSONLayer({
                    url: "geojson/Wall/insideWall/f{{$i}}.geojson"
                })

                geojsonw{{$i}}.renderer = {
                    type: "simple",
                    symbol: {
                        type: "polygon-3d",
                        symbolLayers: [{
                            type: "extrude",
                            size: {{ $arrf[$i] }}, //chiều cao
                            material: {
                                    color: "#73f1ff"
                            }
                        }]
                    }
                };
            @endfor
        //balcony
        const geojsonbalcony  = new GeoJSONLayer({
                    url: "geojson/balcony/balconyInside.geojson"
                })

                geojsonbalcony.renderer = {
                    type: "simple",
                    symbol: {
                        type: "line-3d",
                        symbolLayers: [{
                            type: "path",
                            width : 0.1,
                            material: {
                                    color: "#2e3536"
                            }
                        }]
                    }
                };
        //windowOutside
        const geojsonwindowOutside  = new GeoJSONLayer({
                    url: "geojson/window/windowA.geojson"
                })

                geojsonwindowOutside.renderer = {
                    type: "simple",
                    symbol: {
                        type: "line-3d",
                        symbolLayers: [{
                            type: "path",
                            width : 0.1,
                            material: {
                                    color: "#000000"
                            }
                        }]
                    }
                };
        //windowInsideFrame
        const geojsonwindowInsideFrame = new GeoJSONLayer({
                    url: "geojson/window/windowInside/frame1.geojson"
                })

                geojsonwindowInsideFrame.renderer = {
                    type: "simple",
                    symbol: {
                        type: "line-3d",
                        symbolLayers: [{
                            type: "path",
                            width : 0.1,
                            material: {
                                    color: "#000000"
                            }
                        }]
                    }
                };
        
        //balconyroof
        const geojsonbalconyroof  = new GeoJSONLayer({
                    url: "geojson/balcony/balconyroof.geojson"
                })

                geojsonbalconyroof.renderer = {
                    type: "simple",
                    symbol: {
                        type: "line-3d",
                        symbolLayers: [{
                            type: "path",
                            width : 0.1,
                            material: {
                                    color: "#019ee2"
                            }
                        }]
                    }
                };

        //pillarroof

        const geojsonpillarroof  = new GeoJSONLayer({
                    url: "geojson/balcony/pillarroof.geojson"
                })

                geojsonpillarroof.renderer = {
                    type: "simple",
                    symbol: {
                        type: "line-3d",
                        symbolLayers: [{
                            type: "path",
                            width : 0.1,
                            material: {
                                    color: "#019ee2"
                            }
                        }]
                    }
                };

        // flootr
            @for($i = 0; $i < 8; $i++)
                const geojsonfl{{$i}}  = new GeoJSONLayer({
                    url: "geojson/floor/f{{$i}}.geojson"
                })

                geojsonfl{{$i}}.renderer = {
                    type: "simple",
                    symbol: {
                        type: "polygon-3d",
                        symbolLayers: [{
                            type: "extrude",
                            size: 0.2, //chiều cao
                            material: {
                                @if($i <7)
                                    color: "#ffffff"
                                @else
                                    color: "#87dbfa"
                                @endif
                            }
                        }]
                    }
                };
            @endfor

            <?php $arrs = [0,2.4,0.8,1.6,3.2 ] ?>
            @for($i = 1; $i < 5; $i++)
                const geojsons{{$i}}  = new GeoJSONLayer({
                    url: "geojson/stair/s{{$i}}.geojson"
                })

                geojsons{{$i}}.renderer = {
                    type: "simple",
                    symbol: {
                        type: "polygon-3d",
                        symbolLayers: [{
                            type: "extrude",
                            size: {{ $arrs[$i] }}, //chiều cao
                            material: {
                                color: "#E0DBCB"
                            }
                        }]
                    }
                };
            @endfor

            @for($i = 1; $i < 4; $i++)
                const geojsonsi{{$i}}  = new GeoJSONLayer({
                    url: "geojson/stair/si{{$i}}.geojson"
                })

                geojsonsi{{$i}}.renderer = {
                    type: "simple",
                    symbol: {
                        type: "polygon-3d",
                        symbolLayers: [{
                            type: "extrude",
                            size: 4, //chiều cao
                            material: {
                                color: "#61706B"
                            }
                        }]
                    }
                };
            @endfor

            const dat  = new GeoJSONLayer({
                url: "geojson/dat.geojson"
            })

            dat.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 4.2, //chiều cao
                        material: {
                            color: "#87dbfa"
                        }
                    }]
                }
            };

            const geojsontrusau_duoi  = new GeoJSONLayer({url: "geojson/trusau_duoi.geojson"});
            geojsontrusau_duoi.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 3, //chiều cao
                        material: {
                            color: "#019ee2" // xanh dam
                        }
                    }]
                }
            };
            const geojsontrusau_tren  = new GeoJSONLayer({url: "geojson/trusau_tren.geojson"});
            geojsontrusau_tren.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 1, //chiều cao
                        material: {
                            color: "#019ee2" // xanh dam
                        }
                    }]
                }
            };


            const minh  = new GeoJSONLayer({url: "geojson/circle.geojson"});
            minh.renderer = {
                type: "simple",
                symbol: {
                    type: "polygon-3d",
                    symbolLayers: [{
                        type: "extrude",
                        size: 1, //chiều cao
                        material: {
                            color: "#ebf2bf"
                        }
                    }]
                }
            };
            //windowInside
            <?php $arrs = [0, 35, 27, 23, 15 ] ?>
            @for($i = 1; $i < 5; $i++)
                const geojsonLayerwindow{{$i}} = new GeoJSONLayer({url: "geojson/window/windowInside/windowInside{{$i}}.geojson"});
                geojsonLayerwindow{{$i}}.renderer = {
                    type: "simple",
                    symbol: {
                        type: "polygon-3d",
                        symbolLayers: [
                            {
                                type: "extrude",
                                size: {{ $arrs[$i] }},
                                material: {
                                    color: "#019ee2"
                                }
                            }
                        ]
                    }
                };
            @endfor

            const map = new Map({
                basemap: "topo-vector",
                ground: "world-elevation",
                // layers: [geojsonLayer, geojsonLayer2, geojsonLayer3, geojsonLayer4 ] //Những layer xuất hiện
                layers: [
                @foreach( $flag1 as $key => $item)
                    @foreach($item as $key1 => $item1)
                         geojson{{$key+1}}af{{$key1+1}}1,
                         geojson{{$key+1}}af{{$key1+1}}2,
                         geojson{{$key+1}}af{{$key1+1}}3,
                    @endforeach
                @endforeach
                @foreach( $flag2 as $key => $item)
                    @foreach($item as $key1 => $item1)
                        geojson{{$key+1}}bf{{$key1+1}}1,
                        geojson{{$key+1}}bf{{$key1+1}}2,
                        geojson{{$key+1}}bf{{$key1+1}}3,
                    @endforeach
                @endforeach
                @foreach( $flag3 as $key => $item)
                    @foreach($item as $key1 => $item1)
                        geojson{{$key+1}}cf{{$key1+1}}1,
                        geojson{{$key+1}}cf{{$key1+1}}2,
                        geojson{{$key+1}}cf{{$key1+1}}3,
                    @endforeach
                @endforeach
                @foreach( $flag4 as $key => $item)
                    @foreach($item as $key1 => $item1)
                        geojson{{$key+1}}df{{$key1+1}}1,
                        geojson{{$key+1}}df{{$key1+1}}2,
                        geojson{{$key+1}}df{{$key1+1}}3,
                    @endforeach
                @endforeach
                @foreach( $flag5 as $key => $item)
                    @foreach($item as $key1 => $item1)
                        geojson{{$key+1}}ef{{$key1+1}}1,
                        geojson{{$key+1}}ef{{$key1+1}}2,
                        geojson{{$key+1}}ef{{$key1+1}}3,
                    @endforeach
                @endforeach
                @foreach( $flag6 as $key => $item)
                    @foreach($item as $key1 => $item1)
                        geojson{{$key+1}}ff{{$key1+1}}1,
                        geojson{{$key+1}}ff{{$key1+1}}2,
                        geojson{{$key+1}}ff{{$key1+1}}3,
                    @endforeach
                @endforeach
                @for($i = 0; $i < 7; $i++)
                     geojsonf{{$i}},
                @endfor
                @for($i = 1; $i < 7; $i++)
                     geojsonw{{$i}},
                @endfor
                @for($i = 0; $i < 8; $i++)
                    geojsonfl{{$i}},
                @endfor
                @for($i = 1; $i < 5; $i++)
                    geojsons{{$i}},
                @endfor
                @for($i = 1; $i < 4; $i++)
                    geojsonsi{{$i}},
                @endfor
                dat,
                geojsontrusau_duoi,
                geojsontrusau_tren,
                minh,
                @for($i = 1; $i < 5; $i++)
                    geojsonLayerwindow{{$i}},
                @endfor
                geojsonbalcony,
                geojsonbalconyroof,
                geojsonpillarroof,
                geojsonwindowOutside,
                geojsonwindowInsideFrame,            
               
		geojsonWallLeft, geojsonWallRight, geojsonWallWindowSize1, geojsonWallWindowSize2, geojsonWindowRight, geojsonWindowLeft
                ] //Những layer xuất hiện
            });

            const view = new SceneView({
                container: "viewDiv",
                map: map,
                camera: {
                    position: [106.80374639576863, 10.868325110065655, 100],
                    heading: 0,
                    tilt: 75
                }
            });
            view.popup.defaultPopupTemplateEnabled = true;
        });
    </script>
</head>

<body>
<div id="viewDiv"></div>
</body>

</html>
