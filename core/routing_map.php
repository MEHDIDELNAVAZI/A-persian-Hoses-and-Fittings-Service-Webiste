<?php 
##this file is for rout the url depends on  3 types 
$map = [
    ##these are the 3 pattern for types of the ur 
    's1'=> ['pattern'=>"/^(?<athen>(admin))\/(?<controller>[a-z0-9- ]+)\/(?<action>[a-z0-9 ]+)\/(?<params>.+)$/i" , 'init'=>''], ## the worst situation 
    's2'=> ['pattern'=>"/^(?<athen>(admin))\/(?<controller>[a-z0-9- ]+)\/(?<action>[a-z0-9 ]+)$/i", 'init'=>''], 
    's3'=>['pattern'=>"/^(?<athen>(admin))\/(?<params>.*)/i",'init'=>['controller'=> 'main','action'=>'index']],
    's4'=>['pattern'=>"/^(?<athen>(admin))$/i",'init'=>['controller'=> 'main','action'=>'index']],


    's5'=> ['pattern'=>"/^(?<athen>(ajax))\/(?<controller>[a-z0-9- ]+)\/(?<action>[a-z0-9 ]+)\/(?<params>.+)$/i" , 'init'=>''], ## the worst situation 
    's6'=> ['pattern'=>"/^(?<athen>(ajax))\/(?<controller>[a-z0-9- ]+)\/(?<action>[a-z0-9 ]+)$/i", 'init'=>''], 

    's7'=>['pattern'=>"/^(?<athen>(search))\/(?<params>.*)/i",'init'=>['controller'=> 'main','action'=>'index']],
    's8'=>['pattern'=>"/^(?<athen>(product))\/(?<params>.*)/i",'init'=>['controller'=> 'main','action'=>'index']],

    's9'=> ['pattern'=>"/^(?<controller>[a-z0-9- ]+)\/(?<action>[a-z0-9 ]+)\/(?<params>.+)$/i" , 'init'=>''], ## the worst situation 
    's10'=> ['pattern'=>"/^(?<controller>[a-z0-9- ]+)\/(?<action>[a-z0-9 ]+)$/i", 'init'=>''], 
    's11'=>['pattern'=>"/^(?<params>.*)/i",'init'=>['controller'=> 'main','action'=>'loadpage']]
] ;

?>