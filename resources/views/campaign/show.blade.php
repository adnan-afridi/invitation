<?php
//print_r($campaign);exit;
//dd($campaign);exit;
?>

@extends("layouts.app")

@section('content')
<div class="container">
    
<table>

    <tr>
        <th class="col-sm-2">Campaign Title :</th>
        <td>{{ $campaign->campaign_title  }}</td>
    </tr>
    <tr>
        <th class="col-sm-2">Campaign Desc :</th>
        <td>{{ $campaign->campaign_desc }}</td>
    </tr>


</table>
</div>
@endsection