<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
![Mark Dynamics]({{ public_path('/img/logo-white.png') }})
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
