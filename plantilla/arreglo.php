<?php 
    function mostrarArreglo()  {


$arreglo = array ( 
    array ("id"=>"1","taller1"=>23, "taller2"=>100,"taller3"=>100,"parcial1"=>12, "parcial2"=>56,"semestral"=>76,"media"=>-1),
    array ("id"=>"2","taller1"=>90, "taller2"=>54,"taller3"=>76,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"3","taller1"=>80, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"4","taller1"=>85, "taller2"=>98,"taller3"=>12,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"5","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
     array ("id"=>"6","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"7","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>56,"media"=>-1),
    array ("id"=>"8","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>65,"media"=>-1),
    array ("id"=>"9","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"10","taller1"=>12, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>98,"media"=>-1),
    array ("id"=>"11","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"12","taller1"=>12, "taller2"=>34,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>34,"media"=>-1),
    array ("id"=>"13","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"14","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"15","taller1"=>70, "taller2"=>46,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"16","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"17","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"18","taller1"=>70, "taller2"=>12,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"19","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"20","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>70,"semestral"=>100,"media"=>-1),
    array ("id"=>"21","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"22","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"23","taller1"=>70, "taller2"=>80,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"24","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>80,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"25","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>91,"media"=>-1),
    array ("id"=>"26","taller1"=>70, "taller2"=>76,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"27","taller1"=>70, "taller2"=>98,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>54,"media"=>-1),
    array ("id"=>"28","taller1"=>70, "taller2"=>56,"taller3"=>100,"parcial1"=>100,"parcial2"=>50,"semestral"=>100,"media"=>-1),
    array ("id"=>"29","taller1"=>70, "taller2"=>23,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"30","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>45,"media"=>-1),
    array ("id"=>"31","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"32","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1),
    array ("id"=>"33","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>67,"media"=>-1),
    array ("id"=>"34","taller1"=>70, "taller2"=>100,"taller3"=>100,"parcial1"=>100,"parcial2"=>100,"semestral"=>100,"media"=>-1)
  );
?>

        <div class="respuestas__caja--1 respuestas__sin-media">
            <?php for ($i = 0; $i < sizeof($arreglo); $i++) { ?>
                <label>Estudiante <input type="text" value="<?php echo $arreglo[$i]["id"] ?>" readonly /> </label> 
                <label>Taller 1 <input type="text" value="<?php echo $arreglo[$i]["taller1"] ?>" readonly /> </label> 
                <label>Taller 2 <input type="text" value="<?php echo $arreglo[$i]["taller2"] ?>" readonly /> </label> 
                <label>Taller 3 <input type="text" value="<?php echo $arreglo[$i]["taller3"] ?>" readonly /> </label> 
                <label>Parcial 1 <input type="text" value="<?php echo $arreglo[$i]["parcial1"] ?>" readonly /> </label> 
                <label>Parcial 2 <input type="text" value="<?php echo $arreglo[$i]["parcial2"] ?>" readonly /> </label> 
                <label>Semestral <input type="text" value="<?php echo $arreglo[$i]["semestral"] ?>" readonly /> </label> 
                <?php } ?>
            </div>


    <?php } ?>