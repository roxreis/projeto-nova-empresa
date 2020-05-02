@extends('layouts.template')

@section('titulo')
Home
@endsection

@section('conteudo')
    <section style="height:430px;">
        <div class="bannerHome">
            <div id="capaBanner">
                <div class="w-50 text-center">
                    <h2><strong> ESTAMOS AQUI PARA TE AJUDAR! </strong></h2><br>
                    <h4 >AGORA VOCÊ PEQUENO E MÉDIO COMERCIANTE, VAI TER PODER DE COMPRA DE UM GRANDE</h4>
                    <button type="button" class="btn btn-outline-danger buttonHome">Saiba Mais</button>
                </div>       
            </div>
        </div> 
    </section>
    <section>
        <div class="container homeTwo">
            <h3>Você quer comprar mais por um valor menor?</h3>
            <p>Aqui é a casa do <strong>(mini e super Mercado, Padaria, Bar, Armazém)</strong>, em nosso portal você vai achar várias ofertas em lotes para repor seu estoque por um valor menor</p>
            <p>Como a compra é conjunta, isso aumenta seu poder de compra junto ao grande fornecedor!</p>
        </div>
        <div class="container divIconsHome">
            <div class="individualIconsHome">
                <img src="/img/023-online-shop-4.svg" class="iconsHome" alt="">
                <p>Você tem um pequeno ou médio comercio, mas seu poder de compra</p> 
            </div>
        </div>
    </section>
@endsection
