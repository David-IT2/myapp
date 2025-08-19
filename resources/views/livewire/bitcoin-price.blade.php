<div style="text-align:center; margin-top:50px;">
    <h1>Bitcoin Price (USD)</h1>

    @if ($price)
        <p style="font-size: 1.5rem; color: #f7931a;">
            ${{ number_format($price, 2) }}
        </p>
    @else
        <p style="color: red;">Unable to fetch price at the moment.</p>
    @endif
</div>
