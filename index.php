<?php 
$array=array();
$color1=1;
$color2=1;
$color3=1;
$color4=1;
$color5=1;
$color6=1;
$color7=1;
$color8=1;
for($i=1;$i<=344;$i++){
     // A 23
 $folder1="01_BG";
 $folder2="02_Item";
 $folder3="03_Skin";
 $folder4="04rmor";
 $folder5="05_Frames";
 $folder6="06_Faces";
 $folder7="07_Noses";
 $folder8="08_Mouth";
 $folder9="09_Front_Items";
 $folder10="info_layer_$i";
 $array[]='growEditionSizeTo: '.$i.',
         layersOrder: [
             { name: "01_BG" },
             { name: "02_Item" },
             { name: "03_Skin" },
             { name: "04rmor" },
             { name: "05_Frames" },
             { name: "06_Faces" },
             { name: "07_Noses" },
             { name: "08_Mouth" },
             { name: "09_Front_Items" },
             { name: "info_layer_'.$i.'" },
         ],
     },';

 if (!file_exists("layers2/$folder1")) {
 mkdir("layers2/$folder1", 0777, true);
 }
 if (!file_exists("layers2/$folder2")) {
 mkdir("layers2/$folder2", 0777, true);
}
 if (!file_exists("layers2/$folder3")) {
 mkdir("layers2/$folder3", 0777, true);
}
 if (!file_exists("layers2/$folder4")) {
 mkdir("layers2/$folder4", 0777, true);
}
 if (!file_exists("layers2/$folder5")) {
 mkdir("layers2/$folder5", 0777, true);
}
 if (!file_exists("layers2/$folder6")) {
 mkdir("layers2/$folder6", 0777, true);
}
 if (!file_exists("layers2/$folder7")) {
 mkdir("layers2/$folder7", 0777, true);
}
 if (!file_exists("layers2/$folder8")) {
 mkdir("layers2/$folder8", 0777, true);
}
 if (!file_exists("layers2/$folder9")) {
 mkdir("layers2/$folder9", 0777, true);
}
 if (!file_exists("layers2/$folder10")) {
 mkdir("layers2/$folder10", 0777, true);
}

}

$arrayunique=array_unique($array);
echo $arrayunique=implode(" ",$arrayunique);
die;
for($i=1;$i<=2436;$i++){

    if($i<=26){
        // A 3
        
        $folder1="01_BG_Gold$color6";
        $folder2="02_Item_Gold$color6";
        $folder3="03_Skin_Gold$color6";
        $folder4="04_Armor_Gold$color6";
        $folder5="05_Frames_Gold$color6";
        $folder6="06_Faces_Gold$color6";
        $folder7="07_Noses_Gold$color6";
        $folder8="08_Mouth_Gold$color6";
        $folder10="info_layer_$i";
        $array[]='growEditionSizeTo: '.$i.',
                layersOrder: [
                    { name: "01_BG_Gold'.$color6.'" },
                    { name: "02_Item_Gold'.$color6.'" },
                    { name: "03_Skin_Gold'.$color6.'" },
                    { name: "04_Armor_Gold'.$color6.'" },
                    { name: "05_Frames_Gold'.$color6.'" },
                    { name: "06_Faces_Gold'.$color6.'" },
                    { name: "07_Noses_Gold'.$color6.'" },
                    { name: "08_Mouth_Gold'.$color6.'" },
                    { name: "info_layer_Gold'.$i.'" },
                ],
            },';
    
    
        mkdir("layers/$folder1", 0777, true);
        mkdir("layers/$folder2", 0777, true);
        mkdir("layers/$folder3", 0777, true);
        mkdir("layers/$folder4", 0777, true);
        mkdir("layers/$folder5", 0777, true);
        mkdir("layers/$folder6", 0777, true);
        mkdir("layers/$folder7", 0777, true);
        mkdir("layers/$folder8", 0777, true);
        mkdir("layers/$folder10", 0777, true);
            $color6++;
    }elseif($i>=27 && $i<=29)
    {
        // A 3
        $folder1="01_BG_A_color_$color1";
        $folder2="02_Item_A_color_$color1";
        $folder3="03_Skin_A_color_$color1";
        $folder4="04_Armor_A_color_$color1";
        $folder5="05_Frames_A_color_$color1";
        $folder6="06_Faces_A_color_$color1";
        $folder7="07_Noses_A_color_$color1";
        $folder8="08_Mouth_A_color_$color1";
        $folder9="09_Front_Items_A_color_$color1";
        $folder10="info_layer_$i";
        $array[]='growEditionSizeTo: '.$i.',
                layersOrder: [
                    { name: "01_BG_A_color_'.$color1.'" },
                    { name: "02_Item_A_color_'.$color1.'" },
                    { name: "03_Skin_A_color_'.$color1.'" },
                    { name: "04_Armor_A_color_'.$color1.'" },
                    { name: "05_Frames_A_color_'.$color1.'" },
                    { name: "06_Faces_A_color_'.$color1.'" },
                    { name: "07_Noses_A_color_'.$color1.'" },
                    { name: "08_Mouth_A_color_'.$color1.'" },
                    { name: "09_Front_Items_A_color_'.$color1.'" },
                    { name: "info_layer_'.$i.'" },
                ],
            },';
    
 
        mkdir("layers/$folder1", 0777, true);
        mkdir("layers/$folder2", 0777, true);
        mkdir("layers/$folder3", 0777, true);
        mkdir("layers/$folder4", 0777, true);
        mkdir("layers/$folder5", 0777, true);
        mkdir("layers/$folder6", 0777, true);
        mkdir("layers/$folder7", 0777, true);
        mkdir("layers/$folder8", 0777, true);
        mkdir("layers/$folder9", 0777, true);
        mkdir("layers/$folder10", 0777, true);
        $color1++;
    }elseif($i>=30 && $i<=54){
    // A 23
    $folder1="01_BG_A";
    $folder2="02_Item_A";
    $folder3="03_Skin_A";
    $folder4="04_Armor_A";
    $folder5="05_Frames_A";
    $folder6="06_Faces_A";
    $folder7="07_Noses_A";
    $folder8="08_Mouth_A";
    $folder9="09_Front_Items_A";
    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_A" },
                { name: "02_Item_A" },
                { name: "03_Skin_A" },
                { name: "04_Armor_A" },
                { name: "05_Frames_A" },
                { name: "06_Faces_A" },
                { name: "07_Noses_A" },
                { name: "08_Mouth_A" },
                { name: "09_Front_Items_A" },
                { name: "info_layer_'.$i.'" },
            ],
        },';

    if (!file_exists("layers/$folder1")) {
    mkdir("layers/$folder1", 0777, true);
    }
    if (!file_exists("layers/$folder2")) {
    mkdir("layers/$folder2", 0777, true);
}
    if (!file_exists("layers/$folder3")) {
    mkdir("layers/$folder3", 0777, true);
}
    if (!file_exists("layers/$folder4")) {
    mkdir("layers/$folder4", 0777, true);
}
    if (!file_exists("layers/$folder5")) {
    mkdir("layers/$folder5", 0777, true);
}
    if (!file_exists("layers/$folder6")) {
    mkdir("layers/$folder6", 0777, true);
}
    if (!file_exists("layers/$folder7")) {
    mkdir("layers/$folder7", 0777, true);
}
    if (!file_exists("layers/$folder8")) {
    mkdir("layers/$folder8", 0777, true);
}
    if (!file_exists("layers/$folder9")) {
    mkdir("layers/$folder9", 0777, true);
}
    if (!file_exists("layers/$folder10")) {
    mkdir("layers/$folder10", 0777, true);
}



}elseif($i>=55 && $i<=57){
    // A 3
    $folder1="01_BG_B_color_$color2";
    $folder2="02_Item_B_color_$color2";
    $folder3="03_Skin_B_color_$color2";
    $folder4="04_Armor_B_color_$color2";
    $folder5="05_Frames_B_color_$color2";
    $folder6="06_Faces_B_color_$color2";
    $folder7="07_Noses_B_color_$color2";
    $folder8="08_Mouth_B_color_$color2";
    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_B_color_'.$color2.'" },
                { name: "02_Item_B_color_'.$color2.'" },
                { name: "03_Skin_B_color_'.$color2.'" },
                { name: "04_Armor_B_color_'.$color2.'" },
                { name: "05_Frames_B_color_'.$color2.'" },
                { name: "06_Faces_B_color_'.$color2.'" },
                { name: "07_Noses_B_color_'.$color2.'" },
                { name: "08_Mouth_B_color_'.$color2.'" },
                { name: "info_layer_'.$i.'" },
            ],
        },';


    mkdir("layers/$folder1", 0777, true);
    mkdir("layers/$folder2", 0777, true);
    mkdir("layers/$folder3", 0777, true);
    mkdir("layers/$folder4", 0777, true);
    mkdir("layers/$folder5", 0777, true);
    mkdir("layers/$folder6", 0777, true);
    mkdir("layers/$folder7", 0777, true);
    mkdir("layers/$folder8", 0777, true);
    mkdir("layers/$folder10", 0777, true);
    $color2++;
       
}elseif($i>=58 && $i<=119){
    // A 23
    $folder1="01_BG_B";
    $folder2="02_Item_B";
    $folder3="03_Skin_B";
    $folder4="04_Armor_B";
    $folder5="05_Frames_B";
    $folder6="06_Faces_B";
    $folder7="07_Noses_B";
    $folder8="08_Mouth_B";

    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_B" },
                { name: "02_Item_B" },
                { name: "03_Skin_B" },
                { name: "04_Armor_B" },
                { name: "05_Frames_B" },
                { name: "06_Faces_B" },
                { name: "07_Noses_B" },
                { name: "08_Mouth_B" },
      
                { name: "info_layer_'.$i.'" },
            ],
        },';

    if (!file_exists("layers/$folder1")) {
    mkdir("layers/$folder1", 0777, true);
    }
    if (!file_exists("layers/$folder2")) {
    mkdir("layers/$folder2", 0777, true);
}
    if (!file_exists("layers/$folder3")) {
    mkdir("layers/$folder3", 0777, true);
}
    if (!file_exists("layers/$folder4")) {
    mkdir("layers/$folder4", 0777, true);
}
    if (!file_exists("layers/$folder5")) {
    mkdir("layers/$folder5", 0777, true);
}
    if (!file_exists("layers/$folder6")) {
    mkdir("layers/$folder6", 0777, true);
}
    if (!file_exists("layers/$folder7")) {
    mkdir("layers/$folder7", 0777, true);
}
    if (!file_exists("layers/$folder8")) {
    mkdir("layers/$folder8", 0777, true);
}

    if (!file_exists("layers/$folder10")) {
    mkdir("layers/$folder10", 0777, true);
}




}elseif($i>=120 && $i<=122){
    // A 3
    $folder1="01_BG_C_color_$color3";
    $folder2="02_Item_C_color_$color3";
    $folder3="03_Skin_C_color_$color3";
    $folder4="04_Armor_C_color_$color3";
    $folder5="05_Frames_C_color_$color3";
    $folder6="06_Faces_C_color_$color3";
    $folder7="07_Noses_C_color_$color3";
    $folder8="08_Mouth_C_color_$color3";
    $folder9="09_Front_Items_C_$color3";
    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_C_color_'.$color3.'" },
                { name: "02_Item_C_color_'.$color3.'" },
                { name: "03_Skin_C_color_'.$color3.'" },
                { name: "04_Armor_C_color_'.$color3.'" },
                { name: "05_Frames_C_color_'.$color3.'" },
                { name: "06_Faces_C_color_'.$color3.'" },
                { name: "07_Noses_C_color_'.$color3.'" },
                { name: "08_Mouth_C_color_'.$color3.'" },
                { name: "09_Front_Items_C'.$color3.'" },
                { name: "info_layer_'.$i.'" },
            ],
        },';


    mkdir("layers/$folder1", 0777, true);
    mkdir("layers/$folder2", 0777, true);
    mkdir("layers/$folder3", 0777, true);
    mkdir("layers/$folder4", 0777, true);
    mkdir("layers/$folder5", 0777, true);
    mkdir("layers/$folder6", 0777, true);
    mkdir("layers/$folder7", 0777, true);
    mkdir("layers/$folder8", 0777, true);
    mkdir("layers/$folder9", 0777, true);
    mkdir("layers/$folder10", 0777, true);
       $color3++;
}elseif($i>=122 && $i<=425){
    // A 23
    $folder1="01_BG_C";
    $folder2="02_Item_C";
    $folder3="03_Skin_C";
    $folder4="04_Armor_C";
    $folder5="05_Frames_C";
    $folder6="06_Faces_C";
    $folder7="07_Noses_C";
    $folder8="08_Mouth_C";
    $folder9="09_Front_Items_C";

    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_C" },
                { name: "02_Item_C" },
                { name: "03_Skin_C" },
                { name: "04_Armor_C" },
                { name: "05_Frames_C" },
                { name: "06_Faces_C" },
                { name: "07_Noses_C" },
                { name: "08_Mouth_C" },
                { name: "09_Front_Items_C" },
                { name: "info_layer_'.$i.'" },
            ],
        },';

    if (!file_exists("layers/$folder1")) {
    mkdir("layers/$folder1", 0777, true);
    }
    if (!file_exists("layers/$folder2")) {
    mkdir("layers/$folder2", 0777, true);
}
    if (!file_exists("layers/$folder3")) {
    mkdir("layers/$folder3", 0777, true);
}
    if (!file_exists("layers/$folder4")) {
    mkdir("layers/$folder4", 0777, true);
}
    if (!file_exists("layers/$folder5")) {
    mkdir("layers/$folder5", 0777, true);
}
    if (!file_exists("layers/$folder6")) {
    mkdir("layers/$folder6", 0777, true);
}
    if (!file_exists("layers/$folder7")) {
    mkdir("layers/$folder7", 0777, true);
}
    if (!file_exists("layers/$folder8")) {
    mkdir("layers/$folder8", 0777, true);
}
if (!file_exists("layers/$folder9")) {
    mkdir("layers/$folder9", 0777, true);
}
    if (!file_exists("layers/$folder10")) {
    mkdir("layers/$folder10", 0777, true);
}




}elseif($i>=426 && $i<=428){
    // A 3
    $folder1="01_BG_D_color_$color4";
    $folder2="02_Item_D_color_$color4";
    $folder3="03_Skin_D_color_$color4";
    $folder4="04_Armor_D_color_$color4";
    $folder5="05_Frames_D_color_$color4";
    $folder6="06_Faces_D_color_$color4";
    $folder7="07_Noses_D_color_$color4";
    $folder8="08_Mouth_D_color_$color4";
 
    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_D_color_'.$color4.'" },
                { name: "02_Item_D_color_'.$color4.'" },
                { name: "03_Skin_D_color_'.$color4.'" },
                { name: "04_Armor_D_color_'.$color4.'" },
                { name: "05_Frames_D_color_'.$color4.'" },
                { name: "06_Faces_D_color_'.$color4.'" },
                { name: "07_Noses_D_color_'.$color4.'" },
                { name: "08_Mouth_D_color_'.$color4.'" },
           
                { name: "info_layer_'.$i.'" },
            ],
        },';


    mkdir("layers/$folder1", 0777, true);
    mkdir("layers/$folder2", 0777, true);
    mkdir("layers/$folder3", 0777, true);
    mkdir("layers/$folder4", 0777, true);
    mkdir("layers/$folder5", 0777, true);
    mkdir("layers/$folder6", 0777, true);
    mkdir("layers/$folder7", 0777, true);
    mkdir("layers/$folder8", 0777, true);
  
    mkdir("layers/$folder10", 0777, true);
       $color4++;
}elseif($i>=429 && $i<=1004){
    // A 23
    $folder1="01_BG_D";
    $folder2="02_Item_D";
    $folder3="03_Skin_D";
    $folder4="04_Armor_D";
    $folder5="05_Frames_D";
    $folder6="06_Faces_D";
    $folder7="07_Noses_D";
    $folder8="08_Mouth_D";


    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_D" },
                { name: "02_Item_D" },
                { name: "03_Skin_D" },
                { name: "04_Armor_D" },
                { name: "05_Frames_D" },
                { name: "06_Faces_D" },
                { name: "07_Noses_D" },
                { name: "08_Mouth_D" },
           
                { name: "info_layer_'.$i.'" },
            ],
        },';

    if (!file_exists("layers/$folder1")) {
    mkdir("layers/$folder1", 0777, true);
    }
    if (!file_exists("layers/$folder2")) {
    mkdir("layers/$folder2", 0777, true);
}
    if (!file_exists("layers/$folder3")) {
    mkdir("layers/$folder3", 0777, true);
}
    if (!file_exists("layers/$folder4")) {
    mkdir("layers/$folder4", 0777, true);
}
    if (!file_exists("layers/$folder5")) {
    mkdir("layers/$folder5", 0777, true);
}
    if (!file_exists("layers/$folder6")) {
    mkdir("layers/$folder6", 0777, true);
}
    if (!file_exists("layers/$folder7")) {
    mkdir("layers/$folder7", 0777, true);
}
    if (!file_exists("layers/$folder8")) {
    mkdir("layers/$folder8", 0777, true);
}

    if (!file_exists("layers/$folder10")) {
    mkdir("layers/$folder10", 0777, true);
}




}elseif($i>=1005 && $i<=1006){
    // A 3
    $folder1="01_BG_E_color_$color5";
    $folder2="02_Item_E_color_$color5";
    $folder3="03_Skin_E_color_$color5";
    $folder4="04_Armor_E_color_$color5";
    $folder5="05_Frames_E_color_$color5";
    $folder6="06_Faces_E_color_$color5";
    $folder7="07_Noses_E_color_$color5";
    $folder8="08_Mouth_E_color_$color5";
 
    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_E_color_'.$color5.'" },
                { name: "02_Item_E_color_'.$color5.'" },
                { name: "03_Skin_E_color_'.$color5.'" },
                { name: "04_Armor_E_color_'.$color5.'" },
                { name: "05_Frames_E_color_'.$color5.'" },
                { name: "06_Faces_E_color_'.$color5.'" },
                { name: "07_Noses_E_color_'.$color5.'" },
                { name: "08_Mouth_E_color_'.$color5.'" },
           
                { name: "info_layer_'.$i.'" },
            ],
        },';


    mkdir("layers/$folder1", 0777, true);
    mkdir("layers/$folder2", 0777, true);
    mkdir("layers/$folder3", 0777, true);
    mkdir("layers/$folder4", 0777, true);
    mkdir("layers/$folder5", 0777, true);
    mkdir("layers/$folder6", 0777, true);
    mkdir("layers/$folder7", 0777, true);
    mkdir("layers/$folder8", 0777, true);
  
    mkdir("layers/$folder10", 0777, true);
      $color5++; 
}elseif($i>=1007 && $i<=2421){
    // A 23
    $folder1="01_BG_E";
    $folder2="02_Item_E";
    $folder3="03_Skin_E";
    $folder4="04_Armor_E";
    $folder5="05_Frames_E";
    $folder6="06_Faces_E";
    $folder7="07_Noses_E";
    $folder8="08_Mouth_E";


    $folder10="info_layer_$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_E" },
                { name: "02_Item_E" },
                { name: "03_Skin_E" },
                { name: "04_Armor_E" },
                { name: "05_Frames_E" },
                { name: "06_Faces_E" },
                { name: "07_Noses_E" },
                { name: "08_Mouth_E" },
           
                { name: "info_layer_'.$i.'" },
            ],
        },';

    if (!file_exists("layers/$folder1")) {
    mkdir("layers/$folder1", 0777, true);
    }
    if (!file_exists("layers/$folder2")) {
    mkdir("layers/$folder2", 0777, true);
}
    if (!file_exists("layers/$folder3")) {
    mkdir("layers/$folder3", 0777, true);
}
    if (!file_exists("layers/$folder4")) {
    mkdir("layers/$folder4", 0777, true);
}
    if (!file_exists("layers/$folder5")) {
    mkdir("layers/$folder5", 0777, true);
}
    if (!file_exists("layers/$folder6")) {
    mkdir("layers/$folder6", 0777, true);
}
    if (!file_exists("layers/$folder7")) {
    mkdir("layers/$folder7", 0777, true);
}
    if (!file_exists("layers/$folder8")) {
    mkdir("layers/$folder8", 0777, true);
}

    if (!file_exists("layers/$folder10")) {
    mkdir("layers/$folder10", 0777, true);
}





}elseif($i>=2422 && $i<=2431){
    // A 3
    $folder1="01_BG_package$color7";
    $folder2="02_Item_package$color7";
    $folder3="03_Skin_package$color7";
    $folder4="04_Armor_package$color7";
    $folder5="05_Frames_package$color7";
    $folder6="06_Faces_package$color7";
    $folder7="07_Noses_package$color7";
    $folder8="08_Mouth_package$color7";
 
    $folder10="info_layer_package$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_package'.$color7.'" },
                { name: "02_Item_package'.$color7.'" },
                { name: "03_Skin_package'.$color7.'" },
                { name: "04_Armor_package'.$color7.'" },
                { name: "05_Frames_package'.$color7.'" },
                { name: "06_Faces_package'.$color7.'" },
                { name: "07_Noses_package'.$color7.'" },
                { name: "08_Mouth_package'.$color7.'" },
                { name: "info_layer_package'.$i.'" },
            ],
        },';


    mkdir("layers/$folder1", 0777, true);
    mkdir("layers/$folder2", 0777, true);
    mkdir("layers/$folder3", 0777, true);
    mkdir("layers/$folder4", 0777, true);
    mkdir("layers/$folder5", 0777, true);
    mkdir("layers/$folder6", 0777, true);
    mkdir("layers/$folder7", 0777, true);
    mkdir("layers/$folder8", 0777, true);
    mkdir("layers/$folder10", 0777, true);
    $color7++;  
}elseif($i>=2432 && $i<=2436){
    // A 3
    $folder1="01_BG_sad$color8";
    $folder2="02_Item_sad$color8";
    $folder3="03_Skin_sad$color8";
    $folder4="04_Armor_sad$color8";
    $folder5="05_Frames_sad$color8";
    $folder6="06_Faces_sad$color8";
    $folder7="07_Noses_sad$color8";
    $folder8="08_Mouth_sad$color8";
 
    $folder10="info_layer_sad$i";
    $array[]='growEditionSizeTo: '.$i.',
            layersOrder: [
                { name: "01_BG_sad'.$color8.'" },
                { name: "02_Item_sad'.$color8.'" },
                { name: "03_Skin_sad'.$color8.'" },
                { name: "04_Armor_sad'.$color8.'" },
                { name: "05_Frames_sad'.$color8.'" },
                { name: "06_Faces_sad'.$color8.'" },
                { name: "07_Noses_sad'.$color8.'" },
                { name: "08_Mouth_sad'.$color8.'" },
                { name: "info_layer_sad'.$i.'" },
            ],
        },';

    mkdir("layers/$folder1", 0777, true);
    mkdir("layers/$folder2", 0777, true);
    mkdir("layers/$folder3", 0777, true);
    mkdir("layers/$folder4", 0777, true);
    mkdir("layers/$folder5", 0777, true);
    mkdir("layers/$folder6", 0777, true);
    mkdir("layers/$folder7", 0777, true);
    mkdir("layers/$folder8", 0777, true);
    mkdir("layers/$folder10", 0777, true);
     $color8++;  
}
}
$arrayunique=array_unique($array);
echo $arrayunique=implode(" ",$arrayunique);

?>