$comp_select = $("#comp_select");
$item_select = $("#item_select");

$comp_select.on("change", function(evt)
{
	var id = $comp_select.val();
	
	$.ajax({
		type:"GET",
		url:"ajax.php",
		data:"req=item&id="+id,
		success:function(data)
		{
			data = "<option>Select Item</option>"+data;
			$item_select.html(data);
		}
	});
	
})