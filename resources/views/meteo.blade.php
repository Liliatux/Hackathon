@extends('layouts.app')

@section('content')
<table>
    <tr>
        <th>Villes</th>
        <th>Météo</th>
    </tr>
    <tbody>
    @foreach($centres as $centre)
    <tr>
        <td class="ville" data={{$centre->ville}}>{{$centre->ville}}</td>
        <td></td>
    </tr>
    @endforeach
    </tbody>
</table>