<?php
echo var_dump(http_response_code());
$heh='1';
echo "
@foreach $i as [1,2,3,4,5]	
	heh is {{$i}}
@endforeach
";
?>
