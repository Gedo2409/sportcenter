@extends('backend.layouts.app')
@section('title')
Detalle de avance
@endsection
@section('content')
<script src="/js/vendor/modernizr-2.8.3.min.js"></script>
         

<div class="row">                                                        
    <center> <h3> <b>Sugerencia alimentaria para {{$alumno->Nombre}}</b></h3> </center>



    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <div class="container">
        @foreach ($alumno->avance as $aa )
        @endforeach
                <p>Aqui va tu dieta</p>

                <p><b>Estatura </b><br /> {{$alumno->Estatura}}</p>
                
                <p><b>Peso actual </b><br /> {{$aa->Peso}}</p>

                <p><b>Peso incio </b><br /> {{$alumno->Peso}}</p>
               
               
                @php

                    if($alumno->Estatura==150){

                        if ($aa->Peso<=56.2 && $aa->Peso>=45){

                            echo "Tu peso es el ideal";
                           }else{
                            if ($aa->Peso>56.2){
                            echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                           }else{
                                if($aa->Peso<45){
                                echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                }

                           }
                            
                        }



                    }else{
                        if($alumno->Estatura==152){

                            if ($aa->Peso<=57.8 && $aa->Peso>=46.2){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>57.8){
                                echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<46.2){
                                    echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }
    
    
    
                        }

                    }
                        if($alumno->Estatura==154){

                            if ($aa->Peso<=59.3 && $aa->Peso>=47.4){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>59.3){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<47.4){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==156){
    
                                if ($aa->Peso<=60.8 && $aa->Peso>=48.7){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>60.8){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<48.7){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }

                        if($alumno->Estatura==158){

                            if ($aa->Peso<=62.4 && $aa->Peso>=49.9){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>62.4){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<49.9){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==160){
    
                                if ($aa->Peso<=64 && $aa->Peso>=51.2){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>64){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<51.2){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }
                        if($alumno->Estatura==162){

                            if ($aa->Peso<=65.6 && $aa->Peso>=52.5){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>65.6){
                                echo "-Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<52.5){
                                    echo "-Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==164){
    
                                if ($aa->Peso<=67.2 && $aa->Peso>=53.8){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>67.2){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<53.8){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }
                        if($alumno->Estatura==166){

                            if ($aa->Peso<=68.9 && $aa->Peso>=55.1){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>68.9){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<55.1){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==168){
    
                                if ($aa->Peso<=70.6 && $aa->Peso>=56.4){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>70.6){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<56.4){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }
                        if($alumno->Estatura==170){

                            if ($aa->Peso<=72.3 && $aa->Peso>=57.8){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>72.3){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<57.8){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==172){
    
                                if ($aa->Peso<=74 && $aa->Peso>=59.2){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>74){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<59.2){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }
                        if($alumno->Estatura==174){

                            if ($aa->Peso<=75.7 && $aa->Peso>=60.6){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>75.7){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<60.6){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==176){
    
                                if ($aa->Peso<=77.4 && $aa->Peso>=62){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>77.4){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<62){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }

                        if($alumno->Estatura==178){

                            if ($aa->Peso<=79.2 && $aa->Peso>=63.4){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>79.2){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<63.4){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==180){
    
                                if ($aa->Peso<=81 && $aa->Peso>=64.8){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>81){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<64.8){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }

                        if($alumno->Estatura==182){

                            if ($aa->Peso<=82.8 && $aa->Peso>=66.2){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>82.2){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<66.2){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==184){
    
                                if ($aa->Peso<=84.6 && $aa->Peso>=67.7){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>84.6){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<67.7){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }


                        if($alumno->Estatura==186){

                            if ($aa->Peso<=86.5 && $aa->Peso>=69.2){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>86.5){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<69.2){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==188){
    
                                if ($aa->Peso<=88.4 && $aa->Peso>=70.7){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>88.4){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<70.7){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }
                        if($alumno->Estatura==190){

                            if ($aa->Peso<=90.3 && $aa->Peso>=72.2){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>90.3){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<72.2){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==192){
    
                                if ($aa->Peso<=73.7 && $aa->Peso>=92.2){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>73.7){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<92.2){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }
                        if($alumno->Estatura==194){

                            if ($aa->Peso<=75.3 && $aa->Peso>=94.1){
    
                                echo "Tu peso es el ideal";
                               }else{
                                if ($aa->Peso>75.3){
                                echo " 160 Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                               }else{
                                    if($aa->Peso<94.1){
                                    echo " 160 Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                    }
    
                               }
                                
                            }

    
    
                        }else{
                            if($alumno->Estatura==196){
    
                                if ($aa->Peso<=56.2 && $aa->Peso>=45){
        
                                    echo "Tu peso es el ideal";
                                   }else{
                                    if ($aa->Peso>56.2){
                                    echo "Tu peso está por encima de lo normal te recomendamos lo siguiente"; 
                                   }else{
                                        if($aa->Peso<45){
                                        echo "Tu peso está por debajo de lo normal te recomendamos lo siguiente"; 
                                        }
        
                                   }
                                    
                                }
        
        
        
                            }
    
                        }
                        

                    

                  
                
               @endphp 

        </div>
  

            
            
    </div>
    <div>
        <hr>
    </div>
   







      
       
@endsection