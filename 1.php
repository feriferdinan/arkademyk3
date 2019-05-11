<?php 

function mybio()
{
	$data =[
	"name" => "Septian Feri Ferdinan",
	"address" => "Jl. Kiaracondong, Bandung, West Java, Indonesia",
	"hobbies"  => ["coding","watching movie"],
	"is_married" => false,
	"school" => ["highSchool" => "SMK Medikacom Bandung" , 
				"university" => null ],
	"skills" => [ "HTML,CSS" => "80" ,
				"Bootstrap" => "75",
				"PHP,JAVA,JAVASCRIPT" => "78",
				"CodeIgniter" => "70"]
	
		];		
	print(json_encode($data));
}
mybio();

?>
