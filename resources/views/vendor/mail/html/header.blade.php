<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://cdn.pixabay.com/photo/2015/04/19/08/32/marguerite-729510__340.jpg" class="logo" alt="Laravel Logo">
<!-- <img src="{{asset('images/logomark.min.svg')}}" class="logo" alt="Laravel Logo"> -->
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
