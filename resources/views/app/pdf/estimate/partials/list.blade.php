<table>
    @foreach ($estimate->items as $item)
        <tr>
            <td style="width: 80%;"><strong>{{ $item->name }}</strong><br>
                <small>{!! nl2br(htmlspecialchars($item->description)) !!}</small>
            </td>
            <td class="text-right">
                {!! format_money_pdf($item->total, $estimate->user->currency) !!}
            </td>
        </tr>
    @endforeach
</table>
<div class="content-container">
    The estimate total, exclusive of VAT:
    <strong>{!! format_money_pdf($estimate->total, $estimate->user->currency)!!}</strong>
    <hr />
</div>
