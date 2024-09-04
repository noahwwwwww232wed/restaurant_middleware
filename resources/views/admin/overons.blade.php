@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <h1>Onze openingstijden</h1>
    <div class="openingstijden">
        <p>Maandag 15:00-22:00</p>
        <p>Dinsdag 15:00-22:00</p>
        <p>Woensdag 15:00-22:00</p>
        <p>Donderdag 15:00-22:00</p>
        <p>Vrijdag 15:00-22:00</p>
        <p>Zaterdag 15:00-22:00</p>
        <p>Zondag 15:00-22:00</p>
    </div>
    <div class="contact">
        <h2>Contact gegevens</h2>
        <p>Adres: laakbllaak straat 6070</p>
        <p>Email: argentino@gmail.com</p>
        <p>Telefoon: 0634887941</p>
    </div>
</div>

<style>
    .content-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-top: 15vh;
    }
</style>
@endsection

