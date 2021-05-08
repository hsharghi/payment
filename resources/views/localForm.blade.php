<form action="{!! isset($inputs['successUrl']) ? $inputs['successUrl'] : '#' !!}" method="post" id="success_form"></form>
<form action="{!! isset($inputs['cancelUrl']) ? $inputs['cancelUrl'] : '#' !!}" method="post" id="cancel_form"></form>


<h2 style="text-align: center;">{!! isset($inputs['title']) ? $inputs['title'] : 'Title' !!}</h2>
<h4 style="text-align: center; color: darkgray">{!! isset($inputs['description']) ? $inputs['description'] : 'Description' !!}</h4>
<table dir="rtl" style="margin-left: auto; margin-right: auto; width: 454px;">
<tbody>
<tr>
	<td style="text-align: center; width: 200px;">
		<h4><span style="color: #000000;">{!! isset($inputs['orderLabel']) ? $inputs['orderLabel'] : 'Order no.' !!}</span></h4>
	</td>
	<td style="text-align: center; width: 54px;">&nbsp;</td>
	<td style="text-align: center; width: 200px;">{!! isset($inputs['orderId']) ? $inputs['orderId'] : '' !!}</td>
</tr>
<tr>
	<td style="text-align: center; width: 200px;">
		<h4>{!! isset($inputs['amountLabel']) ? $inputs['amountLabel'] : 'Amount' !!}</h4>
	</td>
	<td style="text-align: center; width: 54px;">&nbsp;</td>
	<td style="text-align: center; width: 200px;">{!! isset($inputs['price']) ? $inputs['price'] : 0 !!}</td>
</tr>
<tr>
<td style="text-align: center; width: 200px;">&nbsp;</td>
<td style="text-align: center; width: 54px;">&nbsp;</td>
<td style="text-align: center; width: 200px;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center; width: 200px;">
<div id="success">
<h2><span style="background-color: #008000; color: #ffffff;">&nbsp;{!! isset($inputs['payButton']) ? $inputs['payButton'] : 'Success' !!}&nbsp; &nbsp; </span></h2>
</div>
</td>
<td style="text-align: center; width: 54px;"><span style="color: #ffffff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></td>
<td style="text-align: center; width: 200px;">
<div id="cancel">
<h2><span style="background-color: #ff6600; color: #ffffff;">&nbsp; {!! isset($inputs['cancelButton']) ? $inputs['cancelButton'] : 'Cancel' !!} &nbsp; &nbsp;</span></h2>
</div>
</td>
</tr>
</tbody>
</table>
<script type="text/javascript">
var success_button = document.getElementById('success');
var cancel_button = document.getElementById('cancel');

success_button.style.cursor = 'pointer';
success_button.onclick = function() {
	var f=document.getElementById('success_form');
	f.submit();
};

cancel_button.style.cursor = 'pointer';
cancel_button.onclick = function() {
	var f=document.getElementById('cancel_form');
	f.submit();
};

</script>
