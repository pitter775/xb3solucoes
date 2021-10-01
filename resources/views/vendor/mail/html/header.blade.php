<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img') }}/logop.png" class="logo" alt="XB3 Soluções">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
