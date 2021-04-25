<!DOCTYPE html>
<html>

<head>
    <title>Estimate</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        html, body {
            font-size: 16px;
            color: #000;
            margin: 0;
            padding: 0;
            line-height: 1;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
        }

        small {
            font-size: .8rem;
        }

        .content-container {
            padding: 2rem;
        }

        table {
            width: 100%;
        }

        table tr td, table tr th {
            padding: 1rem 2rem;
            text-align: left;
            /*border: solid 1px #000;*/
            vertical-align: top;
        }

        .text-right {
            text-align: right;
        }

        .py-0 {
            padding-top: 0;
            padding-bottom: 0;
        }

        .mt-0 {
            margin-top: 0;
        }

        .logo {
            width: 150px;
            display: inline-block;
            margin-bottom: 0.8rem;
        }

        hr {
            width: 100%;
            margin-top: 1rem;
            margin-bottom: 0rem;
            padding: 0;
        }
    </style>
</head>

<body>
<table>
    <tr>
        <td>
            {{ $estimate->user->name }}<br/>
            {{ $estimate->user->billingAddress->address_street_1 }}<br/>
            {{ $estimate->user->billingAddress->city }}<br/>
            {{ $estimate->user->billingAddress->zip }}</td>
        <td class="text-right">
            @if($logo)
                <img class="logo" src="{{ $logo }}" alt="Company Logo"><br/>
            @endif
            <small>{{ $estimate->company->address->address_street_1 }}<br/>
                {{ $estimate->company->address->city }}<br/>
                {{ $estimate->company->address->zip }}<br/><br/>
                {{ $company_phone }}<br/><a href="https://www.ribarservices.co.uk">www.ribarservices.co.uk</a>
            </small>
        </td>
    </tr>
</table>
<div class="content-container">
    <p><strong>Date:</strong> {{$estimate->formattedEstimateDate}}<br/>
        <strong>Reference:</strong> {{$estimate->estimate_number}}
    </p>
    <div class="notes">
        @if($notes)
            {!! $notes !!}
        @endif
    </div>
</div>
    @include('app.pdf.estimate.partials.list')
<div class="content-container py-0">
    <p class="mt-0 py-0">We hope that the above estimate is of interest, and look forward to hearing back from you and working with you
        on this job.
    </p>
    <p>If you have any questions about anything in this estimate, please do not hesitate to contact us either by
        email to : <a href="mailto:{{ $company_email }}">{{ $company_email }}</a> or by phone
        on {{ $company_phone }}</p>
    <p>Kind Regards,</p>
    <p>
        Barry Brindley and Ricardo Mateus,<br/>
        Ribar Services
    </p>
    <p>
        <img class="logo" src="{{ $logo }}" alt="Company Logo"><br/>
        {{ $company_phone }}<br/>
        <a href="https://www.ribarservices.co.uk">www.ribarservices.co.uk</a>
    </p>

</div>
</body>

</html>
