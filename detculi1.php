<?php
require 'connect.php';

$cari = $_GET["info"];	//ID

	//DATA culinary
    $querysearch = 
        "SELECT 
            culinary_place.id
            , culinary_place.name
            , culinary_place.capacity
            , culinary_place.address
            , culinary_place.cp
            , culinary_place.open
            , culinary_place.close
            , st_x(st_centroid(culinary_place.geom)) as lon
            ,st_y(st_centroid(culinary_place.geom)) as lat
        from 
            culinary_place 
        where 
            culinary_place.id='$cari'";

	$hasil=pg_query($querysearch);
	while($baris = pg_fetch_array($hasil)){
		  $id=$baris['id'];
		  $name=$baris['name'];
		  $address=$baris['address'];
		  $cp=$baris['cp'];
		  $capacity=$baris['capacity'];
		  $open=$baris['open'];
		  $close=$baris['close'];
		  $lat=$baris['lat'];
		  $lng=$baris['lon'];
		  $dataarray[]=array('id'=>$id,'name'=>$name,'address'=>$address,'cp'=>$cp, 'capacity'=>$capacity, 'open'=>$open, 'close'=>$close, 'lng'=>$lng,'lat'=>$lat);
	}


    //DATA FASILITAS
    $query_fasilitas="SELECT facility_culinary.id, facility_culinary.facility FROM facility_culinary left join detail_facility_culinary on detail_facility_culinary.id_facility = facility_culinary.id left join culinary_place on culinary_place.id = detail_facility_culinary.id_culinary_place where culinary_place.id = '".$cari."' "; 
    $hasil3=pg_query($query_fasilitas);
    while($baris = pg_fetch_array($hasil3)){
        $id=$baris['id'];
        $name=$baris['facility'];
        $data_fasilitas[]=array('id'=>$id,'name'=>$name);
    }

    //DATA KAMAR
    $query_kamar=
        "SELECT 
            detail_culinary.id_culinary_place
            ,detail_culinary.price
            , string_agg(culinary.name, ', ') as culinary 
        from 
            detail_culinary 
        join 
            culinary 
                on culinary.id = detail_culinary.id_culinary 
        where 
            detail_culinary.id_culinary_place='$cari' 
        group by 
            detail_culinary.id_culinary_place,detail_culinary.price"; 
            
    $hasil4=pg_query($query_kamar);
    while($baris = pg_fetch_array($hasil4)){
        $id=$baris['id_culinary_place'];
        $name=$baris['culinary'];
        $price=$baris['price'];
        $data_kuliner[]=array('id'=>$id,'name'=>$name,'price'=>$price);
    }

    //OUTPUT
    $arr=array("data"=>$dataarray, "fasilitas"=>$data_fasilitas, "kuliner"=>$data_kuliner);
    echo json_encode($arr);


?>
